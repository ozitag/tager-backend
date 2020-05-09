import request from '@/utils/request'


export function fetchAll() {
  return request({
    url: '/admin/users',
    method: 'GET',
  })
}
export function deleteItem(id) {
  return request({
    url: '/admin/users/' + id,
    method: 'DELETE',
  })
}

export function createItem(data) {
  return request({
    url: '/admin/users',
    method: 'POST',
      data
  })
}

export function updateItem(id, data) {
  return request({
    url: '/admin/users/' + id,
    method: 'PUT',
      data
  })
}

export function fetchItem(id) {
  return request({
    url: '/admin/users/' + id,
    method: 'GET',
  })
}

