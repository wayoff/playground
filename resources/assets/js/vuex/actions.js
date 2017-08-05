export default {
  userLoggedIn(context, data) {
    context.commit('userLoggedIn', data);
  },
  userLoggedOut(context){
    context.commit('userLoggedOut');
  },
  addLesson(context, data) {
    context.commit('addLesson', data);
  }
}