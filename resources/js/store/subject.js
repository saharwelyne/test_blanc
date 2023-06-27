import axios from "axios";

const subjectModule = {
  state: {
    subjects: [] 
  },
  actions : {

       addSubject : async ({commit,state,dispatch},payload)=>{
        await axios.post('/user_subject/', payload).then(function (response) {
          state.subjects = response.data;
          console.log(response);
        }) .catch(function (error) {
       
        })
      }

  },
  getters: {
    getSubjects: state => {
      return state.subjects;
    }
  }
};

export default subjectModule;