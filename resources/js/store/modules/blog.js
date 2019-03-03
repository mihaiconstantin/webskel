/*
 * Vuex state for the blog data. Data it fetched via the backend.
 */


const state = {
	posts: [],
	filterText: '',
    filterCounter: 0,
    fetchingStatus: undefined
};


const getters = {
	filteredPosts: (state) => {
		return state.posts.filter((post) => {
			return post.excerpt.match(state.filterText);
		});
	},

	totalPosts: (state) => {
		return state.posts.length;
	},

	filterText: (state) => {
		return state.filterText;
	},

	filterCounter: (state) => {
		return state.filterCounter;
    },
    
    fetchingStatus: (state) => {
		return state.fetchingStatus;
	}
};


const mutations = {
	SET_POSTS: (state, payload) => {
		state.posts = payload;
	},

	SET_FILTER_COUNT: (state, payload) => {
		state.filterCounter = payload;
	},

	SET_FILTER_TEXT: (state, payload) => {
		state.filterText = payload;
    },
    
    SET_FETCHING_STATUS: (state, payload) => {
		state.fetchingStatus = payload;
	},
};


const actions = {
	fetchPosts: ({ commit }, payload) => {
            commit('SET_FETCHING_STATUS', true);
            axios.get(`/api/${payload.api}`
        ).then(response => {
            commit('SET_POSTS', response.data );
            commit('SET_FETCHING_STATUS', false);            
		})
		.catch((error) => {
			console.log(`Api '${payload.api}' error: ${error}`);
		});
	},

	setFilterCounter: ({ commit }, payload) => {
		commit('SET_FILTER_COUNT', payload);
	},

	setFilterText: ({ commit }, payload) => {
		commit('SET_FILTER_TEXT', payload);
	}
};


export default {
	state,
	getters,
	mutations,
	actions
}
