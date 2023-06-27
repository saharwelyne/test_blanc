<template>
     <div>
        <div>
            <router-view></router-view>
        </div>
     </div>
</template>

<script>

import { useRoute } from 'vue-router';

export default {
        name: "App",
        setup(){
        const route=useRoute();
            return{
                route
            }
        }
    }
</script>

<style scoped>

</style>