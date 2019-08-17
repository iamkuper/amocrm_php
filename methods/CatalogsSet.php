<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;

class CatalogsSet extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/catalogs';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	      'add' => $this->add,
	      'update' => $this->update,
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
	* Массив обновляемых списков
	* @var
	*/
	public $update;

	/**
	* Массив удаляемых списков
	* @var
	*/
	public $delete;


}