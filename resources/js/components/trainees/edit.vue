<template>
    <div class="container">
        <h2 class="text-center">Update Trainee</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TraineeIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
                <a style="float:right" >User: Admin</a>
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
                        <label>Email</label>
                     <!-- <textarea type="text" rows="5" class="form-control" v-model="logbook.description"></textarea>--> 
                         <input type="text" class="form-control" v-model="trainee.email">
                    </div>
                    <div class="form-group">
                        <label>DOB</label>
                        <input type="text" class="form-control" v-model="trainee.dob">
                    </div>
                    <div class="form-group">
                        <label></label>
                    </div>
                      <button type="button" class="btn btn-primary" @click="updateTrainee()"> Update </button>
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
        mounted() {
            this.editTrainee(this.$route.params.traineeId);
        },
        methods: {
            editTrainee(traineeId) {
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
            }
        }
    }
</script>