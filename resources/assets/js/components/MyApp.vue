<template>
    <div>
      <div class="container">
        <nav class="navbar is-transparent">
          <div class="navbar-menu">
            <div class="navbar-start">
              <router-link to="/home" class="navbar-item is-tab" active-class="is-active">Home</router-link>
              <router-link to="/lessons" class="navbar-item is-tab" active-class="is-active">Lessons</router-link>
              <router-link to="/categories" class="navbar-item is-tab" active-class="is-active">Categories</router-link>
            </div>
            <div class="navbar-end">
              <a class="navbar-item" href="https://github.com/wayoff" target="_blank">Github</a>
              <a class="navbar-item is-tab" @click="onClickLogin" v-if="!user"> Login </a>
              <a class="navbar-item is-tab" @click="onClickLogout" v-if="user"> Logout </a>
            </div>
          </div>
        </nav>        
      </div>
      <router-view></router-view>
      <login
        v-if="openLogin"
        @cancel="onClickCancel"
      ></login>

    </div>
</template>

<script>
  import { mapGetters } from 'vuex';
  import Auth from '../services/Auth';

  export default {
    data() {
      return {
        openLogin: false
      }
    },
    mounted() {
      this.onCheckUser();
    },
    methods: {
      onClickLogin() {
        this.openLogin = true;
      },
      onClickCancel() {
        this.openLogin = false;
      },
      onClickLogout() {
        Auth.logOut().then( () => {
          this.$store.commit('userLoggedOut');
        }, (error) => console.log(error));
      },
      onCheckUser() {
        Auth.currentUser().then( (response) => {
          this.$store.commit('userLoggedIn', response.data.items)
        }, (error) => console.log(error));
      }
    },
    computed: mapGetters({
      user: 'getUser'
    })
  }
</script>
