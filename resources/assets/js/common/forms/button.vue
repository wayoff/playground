<template>
  <a :class="btnClass" @click="$emit('click')">{{ text }}</a>
</template>

<script>
  export default {
    props: {
      type: {
        required: false,
        default: ''
      },
      text: {
        required: false,
        default: ''
      }
    },
    mounted() {
      // 
    },
    computed: {
      btnClass() {

        if (this.type == '') {
          return 'button';
        }

        if (this.type == 'delete') {
          return 'delete';
        }

        return 'button is-' + this.type;
      }
    }
  }
  
</script>
