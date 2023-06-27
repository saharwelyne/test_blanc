<template>
  <div>
    <h1>Welcome {{Username}}, 
        <a href="javascript:;" @click="logout">Logout</a>
    </h1>
    <div>
    <ul>
      <li v-for="subject in subjects">{{ subject.name }}</li>
    </ul>
  </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import { useRouter, useRoute } from 'vue-router'
import  subjectModule  from "../store/subject";
import { useStore } from 'vuex';
import { computed } from 'vue';

export default {
    
    setup() {
      
        const Username = ref(''); 
        Username.value = window.sessionStorage.getItem('name');
        const route = useRoute();
        const data = route.params.id;
        const router = useRouter();

        const store = useStore();
        store.dispatch(`addSubject`,{id:window.sessionStorage.getItem('id')});
        const subjects = computed(() => store.getters.getSubjects);

        async function  logout() {
            try {
                const response =  await axios.post('/api/logout');

                if(response.data.status == true){
                    router.push({
                        name:'Login',  
                    })
                }
            } 
            catch (error) {
                console.error(error);
            }
         }
         
        return { logout, Username, subjects }
    }

}
</script>