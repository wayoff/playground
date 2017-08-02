<template>
    <div>
        <hero>
          <span slot="title"> Let's get started </span>
          <div slot="sub-title">
            Haloha <strong>@everyone</strong> !!.. hope you enjoy some lessons i'll be sharing 
          </div>
        </hero>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Index was mounted')
        }
    }
</script>