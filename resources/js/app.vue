<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link :to="{ name: 'ElisaHome' }"  class="nav-item nav-link">Home</router-link>
                    <router-link :to="{ name: 'LogbookIndex' }"  class="nav-item nav-link">Logbooks</router-link>
                </div>
            </div>
        </nav>

        <router-view> </router-view>
        
</div>
    
</template>

<script>
    export default {}
</script>