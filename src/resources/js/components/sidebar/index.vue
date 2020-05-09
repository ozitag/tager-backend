<template>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <span class="navbar-toggler-icon" @click="toggleSidebar"></span>
            <a class="navbar-brand pt-0" href="/">
                <img src="/assets/img/logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li
                        :class="['nav-item', !show && route.path === path ? 'active' : '', show && show === route.id ? 'color-icon' : '' ]"
                        v-for="route in routes"
                        :key="route.name"
                    >
                        <router-link class="nav-link"
                                     :href="'#' + route.id"
                                     :to="route.path && !route.children ? route.path : ''"
                                     :data-toggle="route.children ? 'collapse' : null"
                                     :aria-expanded="show === route.id"
                                     @click.native="changeShow(route.id)"
                        >
                            <i :class="route.icon"></i> <span>{{route.name}}</span>
                        </router-link>
                        <div
                            v-if="route.children"
                            :class="['collapse', show === route.id ? 'show' : null]"
                            :id="route.id"
                        >
                            <ul class="nav nav-sm flex-column">
                                <li
                                    :class="['nav-item', children.path === path ? 'active' : '' ]"
                                    v-for="children in route.children"
                                    :key="children.name"
                                >
                                    <router-link class="nav-link"
                                                 :to="children.path"
                                    >
                                        {{children.name}}
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="version">
                    <div>
                        <span>v. {{version.current}}</span>
                        <div>{{version.date}}</div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
  import Routes from '@/router/sidebar'
  export default {
    name: "index",
    props: {
      version: Object
    },
    data() {
      return {
        routes: [],
        show: null
      }
    },
    created() {
      this.routes = Routes
    },
    computed: {
      path() {
        let route = this.routes.find( u => u.children &&
          u.children.find( c => c.path === this.$route.path))
        this.show = route ? route.id : null
        return this.$route.path
      }
    },
    methods: {
      changeShow(id) {
        this.show = this.show === id ? null : id
      },
      toggleSidebar() {
        this.$emit('toggle')
      }
    }
  }
</script>

<style scoped lang="scss">
    .collapsed #sidenav-main {
        z-index: 9;
    }
    .version {
        text-align: center;
        color: #dfdfdf;
        flex: 1 1;
        display: flex;
        align-items: flex-end;

        div{
            width: 100%;
        }
    }
    .nav-item{
        cursor: pointer;
    }
</style>
