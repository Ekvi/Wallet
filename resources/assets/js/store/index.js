import Vue from 'vue';
import Vuex from 'vuex';

import {mutations} from './mutations';
import * as getters from './getters';
import * as actions  from './actions';

Vue.use(Vuex);

const state = {
    purchaseCategories: [],
    incomeCategories: []
};

export default new Vuex.Store({
    state,
    getters,
    actions,
    mutations
})