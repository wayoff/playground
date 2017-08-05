<template>
  <div class="field">
    <label class="label" v-if="label"> {{ label }} </label>
    <div class="control" :class="{
      'has-icons-left': iconLeft,
      'has-icons-right': iconRight
    }">
      <input class="input" :class="notifClass" :type="type" :placeholder="placeholder" :value="defaultValue" @keyup="onKeyUp">
      <span class="icon is-small is-left" v-if="iconLeft">
        <i :class="iconLeft"></i>
      </span>
      <span class="icon is-small is-left" v-if="iconRight">
        <i :class="iconRight"></i>
      </span>
    </div>
    <p class="help" :class="notifClass" v-if="helpBlock"> {{ helpBlock }} </p>
  </div>
</template>

<script>
  export default {
    props: {
      defaultValue: {
        required: false,
        default: null
      },
      placeholder: {
        required: false,
        default: null
      },
      label: {
        required: false,
        default: ''
      },
      type: {
        required: false,
        default: 'text'
      },
      iconLeft: {
        required: false,
        default: null
      },
      iconRight: {
        required: false,
        default: null
      },
      helpBlock: {
        required: false,
        default: null
      },
      notif: {
        required: false,
        default: null
      }
    },
    mounted() {
      this.input = this.default;
    },
    methods: {
      onKeyUp(ev) {
        this.$emit('value', ev.target.value);
      }
    },
    computed: {
      notifClass(){
        if (!this.notif) {
          return false;
        }

        return 'is-' + this.notif;
      }
    }
  }
  
</script>
