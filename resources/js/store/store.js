import { createStore } from 'vuex';
import  subjectModule  from '../store/subject';

const store = createStore({
  modules: {
    subjectModule
  },
  
});

export default store;