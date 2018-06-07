import * as types from './mutation-types'

export const mutations = {
    [types.INIT_PURCHASE_CATEGORIES] (state, payload) {
        state.purchaseCategories = payload;
    },

    [types.INIT_INCOME_CATEGORIES] (state, payload) {
        state.incomeCategories = payload;
    }
};