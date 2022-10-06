<template>
    <div class="container">
        <h2 class="text-center">Create Trainee</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'LogbookIndex' }" class="btn btn-primary btn-sm float-right mb-2">Go Logs</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="logbook.name">
                    </div>
                    <div class="form-group">
                        <label>A/C Registration</label>
                      <!-- 
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                      -->
                      <input type="text" class="form-control" v-model="logbook.description">

                    </div>
                    <div class="form-group">
                        <label>Duration (hrs)</label>
                        <input type="number" class="form-control" v-model="logbook.price">
                    </div>
                    <div class="form-group">
                        <label></label>
                    </div>
                    <button type="button" class="btn btn-primary" @click="createLogbook()">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                logbook: {}
            }
        },
        methods: {
            createLogbook() {
                this.axios.post('http://192.168.1.120:8080/api/logbook', this.logbook)
                    .then(response => (
                        this.$router.push({ name: 'LogbookIndex' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>