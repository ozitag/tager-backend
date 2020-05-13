import { getToken, getRole, setRole, setToken } from '@/utils/auth'
const state = {
  role: getRole(),
  token: getToken()
}

const mutations = {
  SET_ROLE: (state, role) => {
    state.role = role
  },
  SET_TOKEN: (state, token) => {
    state.token = token
  }
}

const actions = {
    changeRole({ commit }, data) {
        commit('SET_ROLE', data.profile.roleId)
        commit('SET_TOKEN', data.token)
        setToken(data.token)
        setRole(data.profile.roleId)
    }
}

export default {
  namespaced: true,
  state,
  mutations,
  actions
}
