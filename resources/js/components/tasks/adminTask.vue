<template>
    <div class="container">
        <h2 class="text-center">Tasks</h2>
          <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ElisaHome' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
                <a style="float:right" >User: Admin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>A/C Registration or Serial Num:</th>
                        <th>Aircraft Type (engine):</th>
                        <th>ATA:</th>
                        <th>Task Type:</th>
                        <th>Task Description:</th>
                        <th>Work Type:</th>
                        <th>Licence Category</th>

                    </tr>
                    </thead>
                    <tbody>
                      
                         <tr v-for="task in tasks" v-bind:key="task.id">
                         
                            <td>{{ task.registration }}</td>
                            <td>{{ task.aircraft }}</td>
                            <td>{{ task.ata }}</td>
                            <td>{{ task.type }}</td>
                            <td>{{ task.description }}</td>
                            <td>{{ task.workType }}</td>
                            <td>{{ task.licence }}</td>


                            <td>
                              
                              
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
                tasks: {}
            }
        },
        created() {
            this.getTasks();
        },
        methods: {
            getTasks() {
              this.axios.get('http://192.168.1.120:8080/api/task')
                  .then(response => {
                      this.tasks = response.data;
                  });
            },
            deleteTask(taskId) {
                this.axios
                    .delete(`http://192.168.1.120:8080/api/task/${taskId}`)
                    .then(response => {
                        let i = this.tasks.map(data => data.id).indexOf(taskId);
                        this.tasks.splice(i, 1)
                    });
            }
        }
    }
</script>