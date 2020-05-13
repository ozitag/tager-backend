<template>
    <div
        :class="[onDragOver ? 'dragOverActive' : '', sidebarCollapsed ? 'collapsed' : '']"
        @dragover.capture="onDragOver = true"
        @dragexit.prevent="onDragOver = false"
        @drop.prevent="onDragOver = false"
    >
        <sidebar :version="version" @toggle="sidebarToggle"></sidebar>
        <div class="main-content">
            <navbar></navbar>
            <div class="wrapper">
                <div class="col-md-12 card card-content">
                    <router-view/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import Sidebar from '@/components/sidebar/index'
  import Navbar from '@/components/navbar/index'
  export default {
    name: 'App',
    components: { Sidebar, Navbar },
    data() {
      return {
        onDragOver: false,
        sidebarCollapsed: false
      }
    },
    computed: {
      version() {
        return {
          date: !this.sidebarCollapsed ? '2020-05-09' : null,
          current: '1.0.1',
        }
      }
    },
    mounted() {
      this.sidebarCollapsed = localStorage.sidebarCollapsed === true || localStorage.sidebarCollapsed === 'true';
    },
    methods:{
      sidebarToggle() {
        this.sidebarCollapsed = !this.sidebarCollapsed;
        localStorage.sidebarCollapsed = this.sidebarCollapsed;
      }
    }
  }
</script>
<style scoped>
    .card-content{
        border-radius: 0;
        padding: 20px;
    }
    .wrapper {
        padding: 10px;
    }
</style>
<style lang="scss">
    .badge-info {
        color: #fff;
        background-color: #49acff;
    }
    .badge-warning {
        color: #fff;
        background-color: #ff971b;
    }
    #sidenav-main, .main-content {
        transition: 0.3s all ease;
    }
    #sidenav-main {
        width: 250px;
    }
    .navbar-toggler-icon {
        position: relative;
        left: -5px;
        top: 10px;
        transition: 0.3s all ease;
        cursor: pointer;
    }
    .navbar-vertical.navbar-expand-md .navbar-brand {
        padding-top: 1.5rem !important;
    }

    .collapsed {
        .navbar-vertical.navbar-expand-md {
            overflow-y: unset;
        }
        #sidenav-main {
            width: 75px;
            padding: 0;
            z-index: 1;

            .navbar-toggler-icon {
                left: 25px;
                top: 15px;
            }
            .navbar-brand {
                padding-top: 2rem !important;
                img {
                    width: 80%;
                }
            }

            ul.navbar-nav {
                margin-left: 0;
                margin-right: 0;

                .nav-link {
                    padding: 5px 12px;
                    text-align: center;
                    position: relative;
                    display: block;

                    span {
                        display: none;
                        transition: 0.2s all ease;
                    }

                    i{
                        width: 100%;
                    }
                    &:after {
                        position: absolute;
                        right: 5px;
                        top: 50%;
                        transform: translateY(-45%);
                        color: #e6e6e6;
                    }
                }
                .nav-item {

                    position: relative;
                    .collapse {
                        &.show {
                            display: none !important;
                        }
                    }
                    &:hover{
                        .nav-link span {
                            display: block;
                            position: absolute;
                            left: 90%;
                            background: #fff;
                            padding: 5px 10px;
                            border-radius: 0px;
                            width: 170px;
                            height: auto;
                            top:0px;
                            box-shadow: 2px 2px 20px 0px rgba(1,1,1,0.11);
                            border-radius: 4px;
                            z-index: 3;
                        }
                        .collapse {
                            display: block;
                            position: absolute;
                            left: 90%;
                            width: 160px;
                            background: #fff;
                            z-index: 2;
                            box-shadow: 2px 2px 20px 0px rgba(1,1,1,0.08);
                            transition: 0.3s all ease-in-out;
                            top: 36px;

                            &:hover{
                                z-index: 3;
                                padding: 10px 0;
                                left: 85%;
                                width: 178px;
                                top: 30px;
                                box-shadow: 2px 2px 20px 0px rgba(1,1,1,0.13);

                                &:before{
                                    top:-3px
                                }
                                &:after{
                                    right: -3px;
                                    opacity: 0;
                                    visibility: hidden;
                                }
                            }
                            &.show {
                                display: block !important;
                            }
                            &:before{
                                content: '';
                                position: absolute;
                                width: 100%;
                                height: 20px;
                                top: -15px;
                                transition: 0.3s all ease-in-out;
                            }
                            &:after{
                                content: '';
                                position: absolute;
                                width: 2px;
                                height: 100%;
                                top: 0;
                                right: -6px;
                                background: #6aabff;
                                transition: 0.1s all ease-in-out;
                            }
                        }
                    }
                }
            }
            #sidenav-collapse-main {
                padding: 0;
                margin: 0;
            }
        }
        .main-content {
            margin-left: 75px !important;
        }
    }
</style>
