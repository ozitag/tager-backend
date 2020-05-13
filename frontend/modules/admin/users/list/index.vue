<template>
    <div>
        <b-row>
            <b-col sm="8">
                <h2>Пользователи</h2>
            </b-col>
            <b-col sm="4" style="text-align: right">
                <b-button @click="createNew" variant="outline-primary">Создать</b-button>
            </b-col>
        </b-row>
        <b-table
            responsive
            :items="items"
            :fields="fields"
            small
            :busy="isLoading"
        >
            <template v-slot:table-busy>
                <div class="text-center text-info my-2">
                    <b-spinner class="align-middle"></b-spinner>
                    <strong>Загрузка...</strong>
                </div>
            </template>
            <template v-slot:cell(file)="data">
                <img :src="data.value.url" v-if="data.value && data.value.url" class="table-image" alt="">
            </template>
            <template v-slot:cell(edit)="data">
                <b-icon v-b-tooltip title="Редактировать" @click="changeAction(data.item.id)" class="b-icon-button" icon="pencil" font-scale="2"></b-icon>
                <b-icon v-b-tooltip.hover title="Удалить" :id="'remove-button-' + data.item.id" class="b-icon-button" icon="trash" font-scale="2" tabindex="0"></b-icon>
                <b-popover
                    placement="auto"
                    :target="'remove-button-' + data.item.id"
                    variant="danger"
                    triggers="focus">
                    <template v-slot:title>Удалить?</template>
                    <b-button variant="danger" @click="removeItem(data.item.id)">Да</b-button>
                </b-popover>
            </template>
        </b-table>
    </div>
</template>

<script>
  import { fetchAll, deleteItem } from '@/api/users'
  export default {
    name: 'Index',
    data() {
      return {
        items: [],
        isLoading: true,
        fields: [
          {
            key: 'name',
            label: 'Имя',
          },
          {
            key: 'email',
            label: 'email',
          },
          {
            key: 'edit',
            label: '-',
          },
        ]
      };
    },
    created() {
      this.prepareComponent();
    },
    methods: {
      prepareComponent(){
        this.getItems()
      },
      async getItems(){
        const { data } = await fetchAll()
        this.items = data
        this.isLoading = false
      },
      changeAction(id) {
        this.$router.push({ path: `/admin/users/${id}` })
      },
      createNew(){
        this.$router.push({ path: `/admin/users/create` })
      },
      async removeItem(id){
        await deleteItem(id)
        this.isLoading = true;
        this.getItems()
      }
    }
  }
</script>
<style>
    .table-image {
        max-width: 60px;
    }
</style>
