import * as types from './mutation-types'

export const mutations = {
    [types.INIT_CATEGORIES] (state, payload) {
        state.categories = payload;
    }
};
