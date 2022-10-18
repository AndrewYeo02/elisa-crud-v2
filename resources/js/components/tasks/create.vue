<template>
    <div class="container">
        <h2 class="text-center">Create New Task</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TaskIndex' }" class="btn btn-primary btn-sm float-right mb-2">Go back to Tasks</router-link>
                <a style="float:right" >User: Trainee</a>
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
                    <button type="button" class="btn btn-primary" @click="createTask()">Create</button>
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
        methods: {
            createTask() {
                this.axios.post('http://192.168.1.120:8080/api/task', this.task)
                    .then(response => (
                        this.$router.push({ name: 'TaskIndex' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>