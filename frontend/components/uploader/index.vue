<template>
    <div>
        <input type="file" ref="fileInput" style="display: none" @change="handleFileChange"/>
        <label v-if="label && label.length">{{label}}</label>
        <div :class="['uploader-zone', label && label.length ? 'with-label' : '']" v-cloak
             @drop.prevent="loadFileFromDrop"
             @dragover.prevent
        >
            <b-row>
                <b-col>
                    <div class="files">
                        <single-file
                            v-for="file in filesArray"
                            :key="file.id"
                            :file="file"
                            :multiple="multiple"
                            @remove="removeFileFromList"
                        ></single-file>
                    </div></b-col>
                <b-col class="helper" v-if="showHelper" :cols="(multiple && filesArray.length) ? 'auto' : 12">
                    <div class="text-center">
                        <b-icon icon="cloud-upload" font-scale="3"></b-icon>
                        <p id="cancel-label">Выберите файл{{multiple ? '(ы)' : ''}} или перетяните его</p>
                        <b-button
                            ref="cancel"
                            variant="primary"
                            size="sm"
                            @click="openNewFile"
                        > Выбрать файл </b-button>
                    </div>
                </b-col>
            </b-row>
        </div>
    </div>
</template>

<script>
  import { uploadFile } from '@/api/files'
  import SingleFile from './components/file'
  export default {
    props: {
      multiple: Boolean,
      value: [Array, Object, File],
      label: String,
    },
    computed: {
      files: {
        get() {
          return this.value;
        },
        set(val) {
          this.$emit('input', val);
        },
      },
      filesArray() {
        return this.multiple ? this.files : (this.files ? [this.files] : [])
      },
      showHelper(){
        return (!this.multiple && !this.filesArray.length) ||
          this.multiple;
      }
    },
    components: { SingleFile },
    methods: {
      openNewFile() {
        this.$refs.fileInput.click()
      },
      handleFileChange(e){
        this.uploadFile(e.target.files[0])
      },
      async uploadFile(file){
        const formData = new FormData();
        formData.append('file', file);
        if(this.multiple) {
          this.files.push(file)
        } else{
          this.files = file
        }
        try {
          const { data } = await uploadFile(formData)
          if(this.multiple) {
            Vue.set(this.files, this.files.findIndex(f => f === file), data)
          } else{
            this.files = data
          }
        }
        catch (e) {
          this.files = this.multiple ? this.files.filter( u => u !== file) : null
        }
      },
      removeFileFromList(id) {
        if(this.multiple) {
          this.files = this.files.filter(u => u.id !== id)
        } else {
          this.files = null
        }
      },
      loadFileFromDrop(e){
        const droppedFiles = e.dataTransfer.files;
        if(!droppedFiles) return;
        if(!this.multiple) {
          this.uploadFile(([...droppedFiles]).shift());
          return;
        }
        ([...droppedFiles]).forEach(f => {
          this.uploadFile(f);
        });
      }
    }
  }
</script>

<style scoped>
    .uploader-zone{
        border-radius: 4px;
        border: 2px solid #f1f1f1;
        padding: 20px;
        background: #fff;
        min-height: 150px;
        margin: 20px 0;
        transition: 0.3s all ease;
    }
    .with-label {
        margin: 2px 0 20px;
    }
    .dragOverActive .uploader-zone{
        border: 2px solid #ff6c73;
        background-image: linear-gradient(45deg, #F6F6F6 25%,transparent 0,
        transparent 50%, #F6F6F6 0, #F6F6F6 75%,transparent 0,transparent);
        background-size: 2rem 2rem;
        animation: progress-bar-stripes-large 2s linear infinite;
    }
    @keyframes progress-bar-stripes-large {
        from {
            background-position: 2rem 0;
        }

        to {
            background-position: 0 0;
        }
    }
    .files{
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    .helper{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
