import Vue from 'vue';
import Vuex from 'vuex';
import blog from './modules/blog.js';


Vue.use(Vuex);


export const store = new Vuex.Store({
	state: {},

	getters: {},

	mutations: {},

	actions: {},

	modules: {
		blog
	}
});
