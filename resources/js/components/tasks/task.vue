<template>
    <div class="container">
        <h2 class="text-center">New Task</h2>
    
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aircraft</th>
                        <th>Registration</th>
                    
                    </tr>
                    </thead>
                    <!-- <tbody>
                      
                         <tr v-for="trainee in trainees" v-bind:key="trainee.id">
                            <td>{{ trainee.id }}</td>
                            <td>{{ trainee.name }}</td>
                            <td>{{ trainee.email }}</td>
                            <td>{{ trainee.dob }}</td>
                            <td>
                                <router-link class="btn btn-success btn-sm" :to="{ name: 'LogbookEdit', params: { traineeId: trainee.id } }">Edit</router-link>
                                <button class="btn btn-danger btn-sm" @click="deleteTrainee(trainee.id)">Delete</button>
                                <router-link :to="{ name: 'LogbookIndex' }" class="btn btn-info">New Task</router-link>
                               
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    // export default {
    //     data() {
    //         return {
    //             trainees: {}
    //         }
    //     },
    //     created() {
    //         this.getTrainees();
    //     },
    //     methods: {
    //         getTrainees() {
    //           this.axios.get('http://192.168.1.120:8080/api/trainee')
    //               .then(response => {
    //                   this.trainees = response.data;
    //               });
    //         },
    //         deleteTrainee(traineeId) {
    //             this.axios
    //                 .delete(`http://192.168.1.120:8080/api/trainee/${traineeId}`)
    //                 .then(response => {
    //                     let i = this.trainees.map(data => data.id).indexOf(traineeId);
    //                     this.trainees.splice(i, 1)
    //                 });
    //         }
    //     }
    // }
</script>