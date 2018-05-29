<template>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <div id="nav-mobile" class="right hide-on-med-and-down">
                <router-link to="/dashboard">Home</router-link>
                <router-link to="/login">Login</router-link>
            </div>
        </div>
    </nav>
</template>

<script>
    /*import Dashboard from './Dashboard.vue';
    import Login from './Login.vue';*/

    export default {
        mounted() {
            console.log('header mounted.')
        }
    }
</script>
