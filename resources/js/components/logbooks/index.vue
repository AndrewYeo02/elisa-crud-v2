<template>
    <div class="container">
        <h2 class="text-center">Logbooks</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'LogbookCreate' }" class="btn btn-primary btn-sm float-right mb-2">Add Trainees</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>A/C Registration</th>
                        <th>Duration (hrs)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(logbook, key) of logbooks" v-bind:key="key">
                            <td>{{ key+1 }}</td>
                            <td>{{ logbook.name }}</td>
                            <td>{{ logbook.description }}</td>
                            <td>{{ logbook.price }}</td>
                            <td>
                                <router-link class="btn btn-success btn-sm" :to="{ name: 'LogbookEdit', params: { logbookId: logbook.id }}">Edit</router-link>
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
                logbooks: {}
            }
        },
        created() {
            this.getLogbooks();
        },
        methods: {
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