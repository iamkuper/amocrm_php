<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class CustomersPeriodsGet extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/customers_periods';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['_embedded']['items'];
    }

  
}