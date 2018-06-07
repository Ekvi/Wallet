import * as types from './mutation-types'

export const fetchPurchaseCategories = ({commit}) => {
    axios.post(`/api/categories`, {type: 'purchase'})
        .then(response => response.data)
        .then(categories => commit(types.INIT_PURCHASE_CATEGORIES, categories))
};

export const fetchIncomeCategories = ({commit}) => {
    axios.post(`/api/categories`, {type: 'income'})
        .then(response => response.data)
        .then(categories => commit(types.INIT_INCOME_CATEGORIES, categories))
};