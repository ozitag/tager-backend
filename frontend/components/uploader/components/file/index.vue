<template>
    <div class="file">
        <div v-if="!file.id" class="loading d-flex justify-content-center align-items-center">
            <b-spinner type="grow" label="Loading..." variant="danger"></b-spinner>
        </div>
        <div class="filebox" v-if="file.id">
            <img :src="file.url" alt="" :class="multiple ? 'full' : ''">
            <span class='remove' @click="remove(file.id)">Удалить</span>
        </div>
    </div>
</template>

<script>
  export default {
    name: "index",
    props: {
      file: [Object, File],
      multiple: Boolean,
    },
    methods: {
      remove(id){
        this.$emit('remove', id)
      }
    }
  }
</script>

<style scoped lang="scss">
    .file {
        position: relative;
        padding: 8px;
        img {
            max-height: 130px;
            transition: 0.3s all ease;
            border-radius: 4px;

            &.full{
                height: 100%;
            }
        }
    }
    .loading {
        width: 120px;
        height: 80px;
        border: 2px solid #f1f1f1;
        border-radius: 4px;
        background: none;
    }
    .filebox, .loading{
        position: relative;
        border-radius: 4px;
    }
    .filebox {
        &:hover {
            &:before{
                opacity: 1;
            }
            span{
                 opacity: 1;
                 visibility: visible;
            }
        }
        &:before{
             opacity: 0;
             padding: 8px;
             border-radius: 4px;
             position: absolute;
             content: '';
             width: 100%;
             height: 100%;
             top: 0;
             left: 0;
             background: rgba(249, 249, 249, 0.85);
             border: 2px solid #f1f1f1;
             z-index: 1;
             transition: 0.3s all ease;
         }
    }
    span {
        &.remove {
            opacity: 0;
            visibility: hidden;
            z-index: 2;
            transition: 0.3s all ease;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            position: absolute;
            color: #ff4f5a;
            font-size: 16px;
            cursor: pointer;
            margin-top: 3px;
        }
    }
</style>
