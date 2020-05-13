export const ORDER_STATUSES = {
    ACCEPT: 'Принят',
    SEND: 'Отправлен',
    DELIVERED: 'Доставлен',
    CANCELLATION: 'Отменен',
    EDITED: 'Отредактирован',
    REFUND: 'Возврат',
}
export const ORDER_STATUSES_COLOR_SCHEMA = {
    ACCEPT: 'info',
    SEND: 'warning',
    DELIVERED: 'success',
    REFUND: 'danger',
    EDITED: 'info',
    CANCELLATION: '',
}

export const ORDER_PAYMENT_STATUSES_COLOR_SCHEMA = {
    WAITING: 'info',
    SUCCESS_PAYMENT: 'success',
    REFUND: 'warning',
    DECLINED: 'warning',
    CANCELLATION: 'danger',
}

export const PAYMENT_STATUSES = {
    WAITING: 'Ожидание оплаты',
    SUCCESS_PAYMENT: 'Успешная оплата',
    CANCELLATION: 'Отменён',
    REFUND: 'Возврат средств',
    DECLINED: 'Отклонён',
}

export default {
    ORDER_STATUSES,
    PAYMENT_STATUSES,
}
