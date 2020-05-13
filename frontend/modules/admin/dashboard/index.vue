<template>
    <b-row class="h-100 mx-0">
        <b-row class="w-100 h-100 mx-0 position-relative" v-if="stats" align-h="center" align-v="center">
            <b-col class="box"><b>Пользователи: </b>{{stats.users}}</b-col>
            <b-col class="box"><b>Пользователи: </b>{{stats.users}}</b-col>
            <b-col class="box"><b>Пользователи: </b>{{stats.users}}</b-col>
            <b-col class="box"><b>Пользователи: </b>{{stats.users}}</b-col>
        </b-row>
        <b-overlay :show="!stats" no-wrap spinner-type="grow"></b-overlay>
    </b-row>
</template>

<script>
  export default {
    name: 'Index',
    data() {
      return {
        stats: {
          users: 1,
        }
      }
    },
  }
</script>
<style lang="scss">
    .box {
        padding: 20px;
        border-radius: 5px;
        border: 1px solid #ebebeb;
        font-size: 30px;
        text-align: center;
        margin: 10px;
        b{
            font-size: 14px;
            display: block;
            text-align: left;
        }
    }
</style>
