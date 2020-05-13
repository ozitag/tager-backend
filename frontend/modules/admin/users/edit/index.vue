<template>
    <div>
        <div v-if="id && !form.id" class="text-center text-info my-2">
            <b-spinner class="align-middle"></b-spinner>
            <strong>Загрузка...</strong>
        </div>
        <b-form v-else @submit.prevent="onSubmit">

            <b-form-group label="Имя">
                <b-form-input
                    v-model="form.name"
                    placeholder="Имя"
                ></b-form-input>
                <div class="invalid-feedback d-block" v-if="submitted && !$v.form.name.required">Обязательное поле</div>
            </b-form-group>

            <b-form-group label="email">
                <b-form-input
                    v-model="form.email"
                    placeholder="email"
                ></b-form-input>
                <div class="invalid-feedback d-block" v-if="submitted && !$v.form.email.required">Обязательное поле</div>
            </b-form-group>

            <b-form-group label="Пароль">
                <b-form-input
                    type="password"
                    v-model="form.password"
                    placeholder="Пароль"
                ></b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Сохранить</b-button>
        </b-form>
    </div>
</template>

<script>
  import { createItem, updateItem, fetchItem } from '@/api/users'
  import { required } from 'vuelidate/lib/validators'
  export default {
    name: 'Index',
    data() {
      return {
        id: null,
        form: {
          id: null,
          name: null,
          email: null,
          password: null,
        },
        submitted: false
      };
    },
    validations: {
      form: {
        name: {
          required
        },
        email: {
          required
        },
      },
    },
    created() {
      this.id = Number(this.$route.params.id)
      if(this.id) {
        this.getItem()
      }
    },
    methods: {
      onSubmit(e) {
        this.submitted = true;
        this.$v.$touch();
        if (this.$v.$invalid) {
          return;
        }
        if(this.id) {
          this.updateForm()
        } else {
          this.storeItem()
        }
      },
      async storeItem(){
        const { data } = await createItem(this.form)
        this.$router.push({ path: '/admin/users' })
      },
      async updateForm(){
        const { data } = await updateItem(this.id, this.form)
        this.$router.push({ path: '/admin/users' })
      },
      async getItem(){
        const { data } = await fetchItem(this.id)
        this.form = data;
      }
    }
  }
</script>

<style scoped>

</style>
