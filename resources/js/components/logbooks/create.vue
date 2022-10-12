<template>
    <div class="container">
        <h2 class="text-center">Create New Logbook</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TraineeIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                      <label>Trainee Name</label>
                        <!-- <label>Name</label>
                        <input type="text" class="form-control" v-model="trainee.name"> -->
                        <select class="form-control">
                                <option>{{trainee.name}}</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label>Logbook Name</label>
                      <!-- 
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                      -->
                      <input type="text" class="form-control" v-model="logbook.name">

                    </div>
                    <!-- <div class="form-group">
                        <label>DOB</label>
                        <input type="text" class="form-control" v-model="trainee.dob">
                    </div> -->
                    <div class="form-group">
                        <label></label>
                    </div>
                    <button type="button" class="btn btn-primary" @click=" createLogbook()">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

 <script>
    export default {
        data() {
            return {
                trainee: {},
                logbook:{}
            }
        },
        mounted() {
            this.addLogbook(this.$route.params.traineeId);
        },
        methods: {
            addLogbook(traineeId) {
                this.axios.get(`http://192.168.1.120:8080/api/trainee/${traineeId}`)
                   .then((res) => {
                       this.trainee = res.data;
                   });
            },
            updateTrainee() {
                this.axios
                    .patch(`http://192.168.1.120:8080/api/trainee/${this.$route.params.traineeId}`, this.trainee)
                    .then((res) => {
                        this.$router.push({ name: 'TraineeIndex' });
                    });
            },
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
