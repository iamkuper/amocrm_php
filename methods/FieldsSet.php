<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class FieldsSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/fields';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	      'add' => $this->add,
	      'delete' => $this->delete
	    );

	    $data = $this->post($request);

	    return $data['_embedded']['items'];
	}

   	
   	 /**
	* Массив добавляемых списков
	* @var
	*/
	public $add;


	/**
	* Массив удаляемых списков
	* @var
	*/
	public $delete;


}