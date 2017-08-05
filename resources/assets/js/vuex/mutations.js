export default {
  userLoggedIn(state, data) {
    state.user = data;
  },
  userLoggedOut(state) {
    state.user = null;
  },
  addLesson(state, data) {
    const lesson = {
       name: data.name,
       description: data.description
    }

    state.lessons.push(lesson);
  }
}