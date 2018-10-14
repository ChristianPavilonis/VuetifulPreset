import Vuex from 'vuex';
import Vue  from 'vue';

import example from './exampleModule';

Vue.use(Vuex);

export default new Vuex.store({

    state    : {},
    getters  : {},
    mutations: {},
    actions  : {},
    modules  : { example },

});