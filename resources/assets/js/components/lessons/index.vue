<template>
  <div class="container well">
    <ul>
      <li v-for="lesson in lessons">
        {{ lesson.name }}
      </li>
    </ul>

    <button class="btn is-primary" @click="add()">
      Add Lesson
    </button>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex';

  export default {
    mounted() {
      console.log('lessons')
    },
    methods: {
      add() {
        console.log('add');
        this.$store.commit( 'addLesson',
            {
              name: 'New Lesson Vitch',
              description: 'yuph works i think'
            }
          );
      }
    },
    computed: mapGetters({
      lessons: 'allLessons'
    })
  }
</script>