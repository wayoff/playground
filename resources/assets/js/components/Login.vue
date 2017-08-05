<template>
  <app-modal>
    <app-modal-header>
        <app-modal-title> Login </app-modal-title>
        <app-button
          type="delete"
          @click="onClickCancel"
        ></app-button>
    </app-modal-header>
    <app-modal-body>
      <form>
        <app-input
          placeholder="Please Enter your email address"
          label="Email"
          type="email"
          iconLeft="fa fa-user"
          @value="(data) => email = data"
        ></app-input>
        <app-input
          placeholder="Please Enter your password"
          label="Password"
          type="password"
          iconLeft="fa fa-lock"
          @value="(data) => password = data"
        ></app-input>
      </form>
    </app-modal-body>
    <app-modal-footer>
        <app-button
          type="success"
          text="Login"
          @click="onClickLogin"
        ></app-button>
        <app-button
          text="Cancel"
          @click="onClickCancel"
        ></app-button>
    </app-modal-footer>
  </app-modal>
</template>

<script>
  import Auth from '../services/Auth'

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
        Auth.logIn(this.email, this.password)
        .then( (response) => {
          this.onClickCancel();
          this.$store.commit('userLoggedIn', response.data.items)
        })
        .catch( (error) => console.log(error));
      }
    }
  }
</script>