<template>
    <div class="container">
        <h2 class="text-center">Update Task</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TaskIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
                <a style="float:right" >User: Admin</a>
            </div>
        </div>
        <div class="row">
             <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>A/C Registration</label>
                        <input type="text" class="form-control" v-model="task.registration">
                    </div>
                    <div class="form-group">
                        <label>Aircarft Type (engine):</label>
                      <!-- 
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                      -->
                      <input type="text" class="form-control" v-model="task.aircraft">

                    </div>

                     <div class="form-group">
                        <label>ATA:</label>
                        <input type="text" class="form-control" v-model="task.ata">
                    </div>

                     <div class="form-group">
                        <label>Task Type:</label>
                        <input type="text" class="form-control" v-model="task.type">
                    </div>

                     <div class="form-group">
                        <label>Task Description:</label>
                        <input type="text" class="form-control" v-model="task.description">
                    </div>

                    <div class="form-group">
                        <label>Work Type:</label>
                        <input type="text" class="form-control" v-model="task.workType">
                    </div>
                    
                     <div class="form-group">
                        <label>Licence Category:</label>
                        <input type="text" class="form-control" v-model="task.licence">
                    </div>

                    <div class="form-group">
                        <label></label>
                    </div>
                      <button type="button" class="btn btn-primary" @click="updateTask()"> Update </button>
                </form>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                task: {}
            }
        },
        mounted() {
            this.editTask(this.$route.params.taskId);
        },
        methods: {
            editTask(taskId) {
                this.axios.get(`http://192.168.1.120:8080/api/task/${taskId}`)
                   .then((res) => {
                       this.task = res.data;
                   });
            },
            updateTask() {
                this.axios
                    .patch(`http://192.168.1.120:8080/api/task/${this.$route.params.taskId}`, this.trainee)
                    .then((res) => {
                        this.$router.push({ name: 'TaskIndex' });
                    });
            }
        }
    }
</script>