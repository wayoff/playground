<template>
  <div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Login</p>
        <button class="delete" @click="onClickCancel"></button>
      </header>
      <section class="modal-card-body">
        <form>
          <div class="field">
            <label class="label">E-mail</label>
            <div class="control">
              <input class="input" type="text" placeholder="Enter email" v-model="email">
            </div>
          </div>
          <div class="field">
            <label class="label">Password</label>
            <div class="control">
              <input class="input" type="password" placeholder="Enter password" v-model="password">
            </div>
          </div>
        </form>
      </section>
      <footer class="modal-card-foot">
        <a class="button is-success" @click="onClickLogin">Login</a>
        <a class="button" @click="onClickCancel">Cancel</a>
      </footer>
    </div>
  </div>
</template>

<script>
  import axios from 'axios';

  export default {
    data() {
      return {
        email: '',
        password: '',
      }
    },
    mounted() {
      console.log('Login mount')
    },
    methods: {
      onClickCancel() {
        this.$emit('cancel');
      },
      onClickLogin() {
        axios.post('/api/login', {
          email: this.email,
          password: this.password
        }).then( (response) => console.log(response))
          .catch( (error) => console.log(error));
      }
    }
  }
</script>