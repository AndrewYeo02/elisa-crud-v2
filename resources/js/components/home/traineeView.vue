

<template>
   
    <div class="card mb-3 text-center">
        <div class="card-body">
          <h3 class="card-title">Trainee Logged In!</h3>
          <p class="card-text">Choose an option!</p>
         <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
         <div class="row">
            <div class="col-md-12">
                
                <router-link :to="{ name: 'TaskIndex' }" class="btn btn-primary">View Task</router-link>

               <!-- <router-link  class="btn btn-primary">My Profile</router-link> -->

            </div>
            </div>
        </div>


        </div>

</template>