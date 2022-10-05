<template>
    <div class="container">
        <h2 class="text-center">Update Trainee</h2>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'LogbookIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
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
                        <textarea type="text" rows="5" class="form-control" v-model="logbook.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Duration (hrs)</label>
                        <input type="number" class="form-control" v-model="logbook.price">
                    </div>
                    <div class="form-group">
                        <label></label>
                    </div>
                      <button type="button" class="btn btn-primary" @click="updateLogbook()"> Update </button>
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
        mounted() {
            this.editLogbook(this.$route.params.logbookId);
        },
        methods: {
            editLogbook(logbookId) {
                this.axios.get(`http://127.0.0.1:8001/api/logbook/${logbookId}`)
                   .then((res) => {
                       this.logbook = res.data;
                   });
            },
            updateLogbook() {
                this.axios
                    .patch(`http://127.0.0.1:8001/api/logbook/${this.$route.params.logbookId}`, this.logbook)
                    .then((res) => {
                        this.$router.push({ name: 'LogbookIndex' });
                    });
            }
        }
    }
</script>