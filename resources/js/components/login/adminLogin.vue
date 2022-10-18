<template>
  
 <!-- <div class="card mb-3 text-center">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
           
            <form class="form-example justify-content-center align-items-center" action="" method="post">
                <h1 class="align-items-center text-center">Welcome To Elisa</h1>
                <p class="description text-center">Come and join us!</p>
               
                
                <a role="button" class="btn btn-primary btn-customized" href="/home">Admin Login</a>
                <a role="button" class="btn btn-primary btn-customized" href="#">Trainee Login</a>
               
                <div class="form-group">
                        <label></label>
                </div>
            </form>
           
        </div>
    </div>
</div> -->


<div class="card mb-3 text-center">
        <div class="card-body">
          <h3 class="card-title">Welcome to Elisa</h3>
          <p class="card-text">Come and join us!</p>
         <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
         <div class="row">
            <div class="col-md-12">
               <router-link :to="{ name: 'ElisaHome' }" class="btn btn-primary">Admin Login</router-link>
               <router-link :to="{ name: 'TraineeView' }" class="btn btn-primary">Trainee Login</router-link>               
               <!-- <router-link  class="btn btn-primary">My Profile</router-link> -->

            </div>
            </div>
        </div>


        </div>

</template>
<script>
 
</script>