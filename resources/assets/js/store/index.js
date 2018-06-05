import Vue from 'vue';
import Vuex from 'vuex';
import * as types from './mutation-types';
import {mutations} from './mutations';
import * as actions  from './actions';

Vue.use(Vuex);

const state = {
    categories: []
};

export default new Vuex.Store({
    state,
    //getters,
    actions,
    mutations
})