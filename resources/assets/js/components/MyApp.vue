<template>
    <div>
      <div class="container">
        <nav class="navbar is-transparent">
          <div class="navbar-menu">
            <div class="navbar-start">
              <router-link to="/home" class="navbar-item is-tab" active-class="is-active">Home</router-link>
              <router-link to="/lessons" class="navbar-item is-tab" active-class="is-active">Lessons</router-link>
              <router-link to="/bar" class="navbar-item is-tab" active-class="is-active">Bar</router-link>
            </div>
            <div class="navbar-end">
              <a class="navbar-item" href="https://github.com/jgthms/bulma" target="_blank">Github</a>
              <a class="navbar-item is-tab" @click="onClickLogin"> Login </a>
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
    export default {
      data() {
        return {
          openLogin: false
        }
      },
      mounted() {
        // 
      },
      methods: {
        onClickLogin() {
          this.openLogin = true;
        },
        onClickCancel() {
          this.openLogin = false;
        }
      }
    }
</script>
