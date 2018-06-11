import * as types from './mutation-types'

export const mutations = {
    [types.INIT_PURCHASE_CATEGORIES] (state, payload) {
        state.purchaseCategories = payload;
    },

    [types.INIT_INCOME_CATEGORIES] (state, payload) {
        state.incomeCategories = payload;
    },

    [types.SHOW_DASHBOARD] (state, payload) {
        state.showPurchaseForm = payload.showPurchaseForm;
        state.showIncomeForm = payload.showIncomeForm;
        state.showDashboard = payload.showDashboard;
    },

    [types.SHOW_PURCHASE_FORM] (state, payload) {
        state.showPurchaseForm = payload.showPurchaseForm;
        state.showDashboard = payload.showDashboard;
    }
};