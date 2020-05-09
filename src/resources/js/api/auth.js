import request from '@/utils/request'


export function logout() {
  return request({
    url: '/admin/auth/logout',
    method: 'post',
  })
}


export function login(data) {
  return request({
    url: '/admin/auth',
    method: 'post',
    data
  })
}
