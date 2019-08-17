<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class ProductsSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/products_settings/';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	      'enable' => $this->enable
	    );

	    $data = $this->post($request);

	    return $data;
	}

   	
   	 /**
	* Флаг включения функционала товаров
	* @var
	*/
	public $enable;


}