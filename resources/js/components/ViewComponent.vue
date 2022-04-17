<template>
<div v-for="(post, slug) in content.data" :key="slug" >
  <h1 v-html="post.body" class="text-6xl font-bold" >

  </h1>
</div>
</template>

<script>
    import { onMounted,ref } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    import axios from "axios";


export default{
  setup(){
    let content = ref([]);

    onMounted(() =>{
      axios.get('http://127.0.0.1:8000/api/post')
      .then((result) =>{
        content.value = result.data
      }).catch((err) =>{
        console.log( "error", err)
      })
    })
    return {
      content
    }
  }
}

// const loadUserData = async () => {
//   return new Promise((resolve) => {
//     setTimeout(() => {
//       resolve();
//     }, 1000);
//   });
// };

// export default {
//   async setup() {
//     const userData = ref(await loadUserData());

//     return {
//       userData,
//     };
//   },
// };
</script>

<style>

</style>