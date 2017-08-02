<template>
    <div>
        <hero>
          <span slot="title"> Lessons </span>
          <div slot="sub-title">
            See what you can learn today ;)
          </div>
        </hero>

        <lessons></lessons>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Lesson was mounted')
        }
    }
</script>