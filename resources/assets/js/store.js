import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
Vue.config.debug = true;

import state from './vuex/state';
import getters from './vuex/getters';
import mutations from './vuex/mutations';
import actions from './vuex/actions';

export default new Vuex.Store({
  state,
  getters,
  mutations,
  actions
})