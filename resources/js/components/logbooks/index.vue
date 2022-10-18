<template>
    <div class="container">
        <h2 class="text-center">Logbooks</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TraineeIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
                <a style="float:right">User: Admin </a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                     
                        <th>Logbook Name</th>
                        <th>Action</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                        <!-- <tr v-for="(trainee, key) of trainees" v-bind:key="key">
                            <td>{{ key+1 }}</td>
                            <td>{{ trainee.name }}</td>
                            <td>{{ trainee.email }}</td>
                            <td>{{ trainee.dob }}</td>
                            <td> -->
                         <tr v-for="logbook in logbooks" v-bind:key="logbook.id">
                            <!-- <td>{{ logbook.id }}</td> -->
                            <td>{{ logbook.logname }}</td>
                             <!-- <td>{{ trainee.logbook.name }}</td> -->
                            <td>
                                <!-- <router-link class="btn btn-success btn-sm" :to="{ name: 'TraineeEdit', params: { traineeId: trainee.id } }">Edit</router-link>
                                <router-link :to="{ name: 'TaskIndex' }" class="btn btn-info btn-sm">New Task</router-link> -->
                                <button class="btn btn-danger btn-sm" @click="deleteLogbook(logbook.id)">Delete</button>
                               
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                logbooks: {},
                trainees: {}
            }
        },
        created() {
            this.getTrainees();
            this.getLogbooks();
        },
        methods: {
            getTrainees() {
              this.axios.get('http://192.168.1.120:8080/api/trainee')
                  .then(response => {
                      this.trainees = response.data;
                  });
            },
            getLogbooks() {
              this.axios.get('http://192.168.1.120:8080/api/logbook')
                  .then(response => {
                      this.logbooks = response.data;
                  });
            },
            deleteLogbook(logbookId) {
                this.axios
                    .delete(`http://192.168.1.120:8080/api/logbook/${logbookId}`)
                    .then(response => {
                        let i = this.logbooks.map(data => data.id).indexOf(logbookId);
                        this.logbooks.splice(i, 1)
                    });
            }
        }
    }
</script>