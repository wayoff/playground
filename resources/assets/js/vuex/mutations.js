export default {
  addLesson(state, data) {
    const lesson = {
       name: data.name,
       description: data.description
    }

    state.lessons.push(lesson);
  }
}