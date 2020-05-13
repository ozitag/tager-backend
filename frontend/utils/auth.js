import Cookies from 'js-cookie'

const TokenKey = 'dn2no2d'
const Role = 'an3ugb2i';

export function getToken() {
  const token = Cookies.get(TokenKey);
  return token ? token : null
}
export function getRole() {
    const role = Cookies.get(Role);
  return role ? role : -1
}
export function setRole(newRole) {
  return Cookies.set(Role, newRole)
}

export function setToken(token) {
  return Cookies.set(TokenKey, token)
}
