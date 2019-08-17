<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class TransactionsList extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/transactions';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['_embedded']['items'];
    }

    /**
     * Количество покупателей (максимум 500)
     * @var
     */
    public $limit_rows;

    /**
     * Смешение при получении списка
     * @var
     */
    public $limit_offset;



    /**
     * Идентификатор покупателя
     * @var
     */
    public $customer_id;

    /**
     * Идентификатор получаемой транзакции
     * @var
     */
    public $id;
}