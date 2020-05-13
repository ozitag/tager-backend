<template>
    <div
        :class="[onDragOver ? 'dragOverActive' : '', 'h-100vh']"
        @dragover.capture="onDragOver = true"
        @dragexit.prevent="onDragOver = false"
        @drop.prevent="onDragOver = false"
    >
        <component :is="layout"></component>
    </div>
</template>

<script>
    import Default from './layouts/default'
    import Admin from './layouts/Admin'

  export default {
    name: 'App',
    components: { Default, Admin },
    data() {
      return {
        onDragOver: false
      }
    },
    computed: {
      layout() {
        return this.$route.meta.layout || 'Default'
      },
    }
  }
</script>
<style lang="scss">
    .badge-info {
        color: #fff;
        background-color: #49acff;
    }
    .badge-warning {
        color: #fff;
        background-color: #ff971b;
    }
</style>
