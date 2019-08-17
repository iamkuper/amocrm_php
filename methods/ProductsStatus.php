<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class ProductsStatus extends GetMethod implements Method {

    /**
     * Получение имени метода для запроса к API
     * @return mixed
     */
    public function getMethodName() {
        return '/api/v2/products_settings';
    }

    /**
     * Код метода
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data;
    }

} 