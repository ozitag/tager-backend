import request from '../utils/request'

export function uploadFile(data) {
  return request({
    url: '/admin/upload',
    method: 'post',
    data
  })
}

