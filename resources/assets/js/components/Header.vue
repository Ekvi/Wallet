<template>
    <div class="container">
        <router-link to="/dashboard">Home</router-link>
        <router-link to="/login">Login</router-link>
    </div>
</template>

<script>
    import Dashboard from './Dashboard.vue';
    import Login from './Login.vue';

    export default {
        mounted() {
            console.log('header mounted.')
        }
    }
</script>
