<template>
    <div class="container">
        <h2 class="text-center">Create New Logbook</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'TraineeIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
                <a style="float:right"  v-model="logbook.trainee_id">Trainee ID: {{trainee.id}}</a>
                <a style="float:right">Trainee Name: {{trainee.name}} &nbsp;</a>
                <a style="float:right">User: Admin &nbsp;&nbsp;</a>
                <!-- <input  type="text"  v-model="logbook.trainee_id"  >{{trainee.id}}</input> -->
              
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <!-- <div class="form-group">
                        <label>Trainee ID</label>
                         <select class="form-control" v-model="logbook.trainee_id">
                                <option>{{trainee.id}}</option>
                         </select>
                    </div> -->
                    <!-- <div class="form-group">
                      <label>Trainee Name</label>
                      
                        <select class="form-control" >
                                <option>{{trainee.name}}</option>
                         </select>
                    </div> -->
                    <div class="form-group">
                        <label>Logbook Name</label>
                      <!-- 
                        <textarea type="text" rows="5" class="form-control" v-model="product.description"></textarea>
                      -->
                      <input type="text" class="form-control" v-model="logbook.logname">

                    </div>
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
                logbook:{},
                trainee: {}
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
