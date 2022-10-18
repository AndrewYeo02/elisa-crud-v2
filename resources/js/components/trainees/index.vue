<template>
    <div class="container">
        <h2 class="text-center">Trainees</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TraineeCreate' }" class="btn btn-primary btn-sm float-right mb-2">Add New Trainee</router-link>
                <a style="float:right" >User: Admin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>DOB</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(trainee, key) of trainees" v-bind:key="key">
                            <td>{{ trainee.id}}</td>
                            <td>{{ trainee.name }}</td>
                            <td>{{ trainee.email }}</td>
                            <td>{{ trainee.dob }}</td>
                            
                         <!-- <tr v-for="trainee in trainees" v-bind:key="trainee.id">
                            <td>{{ trainee.id }}</td>
                            <td>{{ trainee.name }}</td>
                            <td>{{ trainee.email }}</td>
                            <td>{{ trainee.dob }}</td> -->
                            
                            <td>
                                <router-link class="btn btn-success btn-sm" :to="{ name: 'TraineeEdit', params: { traineeId: trainee.id } }">Edit</router-link>
                                <button class="btn btn-danger btn-sm" @click="deleteTrainee(trainee.id)">Delete</button>
                                <router-link  class="btn btn-warning btn-sm" :to="{ name: 'LogbookCreate', params: { traineeId: trainee.id} }">Create Logbook</router-link>

                        
                               
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
                trainees: {},
                // logbooks: {}
            }
        },
        created() {
            this.getTrainees();
            // this.getLogbooks();
        },
        methods: {
            getTrainees() {
              this.axios.get('http://192.168.1.120:8080/api/trainee')
                  .then(response => {
                      this.trainees = response.data;
                  });
            },
            deleteTrainee(traineeId) {
                this.axios
                    .delete(`http://192.168.1.120:8080/api/trainee/${traineeId}`)
                    .then(response => {
                        let i = this.trainees.map(data => data.id).indexOf(traineeId);
                        this.trainees.splice(i, 1)
                    });
            }
        }
    }
</script>