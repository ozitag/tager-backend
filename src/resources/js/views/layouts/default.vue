<template>
    <b-container class="h-100 maincontainer p-0">
        <router-view/>
    </b-container>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    name: "Default",
    data() {
      return {

      }
    },
    computed: {
      ...mapGetters([
        'role'
      ]),
      route() {
        return this.$route.meta
      },
    }
  }
</script>

<style scoped>

</style>
