<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class CustomersList extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/customers';
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
     * Идентификатор получаемой сделки
     * @var
     */
    public $id;
}