const getters = {
  role: state => state.user.role,
  token: state => state.user.token,
  user: state => {
      return state.user.token && state.user.role > 0 ? {
          token: state.user.token,
          role: state.user.role,
          profile: {}
      } : null
  },
}
export default getters
