<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;

class WidgetsList extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/widgets/list';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $data = $this->get();
	    return $data['response']['widgets'];
	}

   	
}