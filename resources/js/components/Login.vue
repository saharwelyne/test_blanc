<template>
  <div>
    <h2>Login</h2>
    <form @submit="login">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" v-model="username" />
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="password" />
      </div>
      <button type="submit">Login</button>
    </form>
    <p v-if="error" class="error">{{ error }}</p>
  </div>
</template>

<script>
import { ref } from 'vue';
import { useRouter, useRoute } from 'vue-router'

export default {
  setup() {
    const username = ref('');
    const password = ref('');
    const error = ref('');
const router = useRouter();

    const login = async (event) => {
      event.preventDefault();
      // Simulate login request
       try {
            const response =  await axios.post('/api/auth/login', { email:username.value , password:password.value });
            console.log(response.data);
            //return response.data;
             if(response.data.status == true){
                window.sessionStorage.setItem('name', response.data.user.name);
                window.sessionStorage.setItem('id', response.data.user.id);

                router.push({
                            name:'Dashboard',  
                            params: { id: response.data.user.id }, 
                })
             }
        } 
       catch (error) {
            console.error(error);
        }
     
    };

    return { username, password, error, login };
  },
};
</script>

<style>
.error {
  color: red;
}
</style>