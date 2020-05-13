<template>
    <div>
        <b-row>
            <b-col class="ui--card">
                <h4>Загрузка одного файла</h4>
                <file-uploader v-model="file"></file-uploader>
                <code>{{file}}</code>
            </b-col>
            <b-col class="ui--card">
                <h4>Загрузка  нескольких файлов</h4>
                <file-uploader multiple label='Изображения:' v-model="files"></file-uploader>
                <code>{{files}}</code>
            </b-col>
        </b-row>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        file: null,
        files: [],
      };
    },
  }
</script>

<style lang="scss">
    .ui {

        &--card {
            border-radius: 5px;
            border: 1px solid lightblue;
            box-shadow:2px 2px 20px 0px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin: 20px;
        }
    }
</style>
