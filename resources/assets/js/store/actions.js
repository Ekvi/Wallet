import * as types from './mutation-types'

export const fetchCategories = ({commit}) => {
    axios.get(`/api/categories`)
        .then(response => response.json())
        .then(json => commit(types.INIT_CATEGORIES, json))
};

/*
removeLink: (context, link) => {       // Add this:
    context.commit("REMOVE_LINK", link)
}*/
