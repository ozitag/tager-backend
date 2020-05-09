<template>
    <div>
        <div class="header">
        </div>
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <breadcrumb></breadcrumb>
                <div class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                </div>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a @click="show = !show" class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="/assets/img/brand/profile.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Администратор</span>
                                </div>
                            </div>
                        </a>
                        <div :class="['dropdown-menu', 'dropdown-menu-arrow', 'dropdown-menu-right', show ? 'show' : null]">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item" @click="logout">
                                <i class="ni ni-user-run"></i>
                                <span>Выход</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
  import { setRole, setToken } from '@/utils/auth'
  import Breadcrumb from '@/components/breadcrumb/index'
  export default {
    name: "index",
    components: { Breadcrumb },
    data(){
      return {
        show: false
      }
    },
    methods: {
      logout(){
        setRole('')
        setToken('')
        this.$router.go(0)
      },
    }
  }
</script>

<style scoped>
    .header {
        background: #fff;
        height: 55px;
        display: flex;
        align-items: center;
    }
    .container-fluid{
        padding-left: 0 !important;
    }
    .main-content .navbar-top{
        padding-top: 5px;
    }
    .navbar-dark .navbar-nav .nav-link{
        color: rgba(98, 98, 98, 0.5);
    }
</style>
