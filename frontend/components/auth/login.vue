<template>
    <b-overlay :show="loading" class="h-100" rounded="sm">
        <b-row align-h="center" align-v="center" class="h-100 mx-0">
            <div class="loginForm">
                <b-form @submit.prevent="onSubmit">

                    <b-form-group label="Email">
                        <b-form-input
                            v-model="form.email"
                            placeholder="Email"
                        ></b-form-input>
                        <div class="invalid-feedback d-block" v-if="submitted && !$v.form.email.required">Обязательное поле</div>
                    </b-form-group>

                    <b-form-group label="Пароль">
                        <b-form-input
                            v-model="form.password"
                            placeholder="Пароль"
                            type="password"
                        ></b-form-input>
                        <div class="invalid-feedback d-block" v-if="submitted && !$v.form.password.required">Обязательное поле</div>
                    </b-form-group>


                    <b-button size="sm" type="submit" variant="primary">Войти</b-button>
                </b-form>
            </div>
        </b-row>
    </b-overlay>
</template>

<script>
  import { login } from '@/api/auth'
  import { required } from 'vuelidate/lib/validators'
  export default {
    name: 'Index',
    data() {
      return {
        loading: false,
        submitted: false,
        form: {
          email: '',
          password: '',
        },
      };
    },
    validations: {
      form: {
        email: {
          required
        },
        password: {
          required
        },
      },
    },
    methods: {
      onSubmit(e) {
        this.submitted = true;
        this.$v.$touch();
        if (this.$v.$invalid) {
          return;
        }
        this.auth()
      },
      async auth(){
        this.loading = true;
        const { data } = await login({
          email: this.form.email,
          password: this.form.password,
        })
        this.$store.dispatch('user/changeRole', data)
        this.$router.push('/admin')
      }
    }
  }
</script>

<style>
    .loginForm {
        width: 300px;
    }
</style>
