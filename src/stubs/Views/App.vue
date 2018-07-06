<template>
    <div>
        <nav>
            <router-link :to="{ name: 'home' }">Home</router-link>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>


<style scoped>

</style>