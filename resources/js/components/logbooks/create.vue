<template>
    <div class="container">
        <h2 class="text-center">Create New Task</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'LogbookIndex' }" class="btn btn-primary btn-sm float-right mb-2">Go Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="trainee.name">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                      <!-- 
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                      -->
                      <input type="text" class="form-control" v-model="trainee.email">

                    </div>
                    <div class="form-group">
                        <label>dob</label>
                        <input type="text" class="form-control" v-model="trainee.dob">
                    </div>
                    <div class="form-group">
                        <label></label>
                    </div>
                    <button type="button" class="btn btn-primary" @click="createTrainee()">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                trainee: {}
            }
        },
        methods: {
            createTrainee() {
                this.axios.post('http://192.168.1.120:8080/api/trainee', this.trainee)
                    .then(response => (
                        this.$router.push({ name: 'LogbookIndex' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>