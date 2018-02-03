<template>
  <div>
    <div class="burger" v-on:click="isShow = !isShow">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="overlay-menu" v-bind:class="{show:isShow}">
      menu
    </div>
  </div>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // },
        data:()=>{
          return {
            isShow:false
          }
        }
    }
</script>
