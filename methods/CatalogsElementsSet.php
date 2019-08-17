<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;

class CatalogsElementsSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/catalog_elements';
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
	* Массив добавляемых элементов каталога
	* @var
	*/
	public $add;

	/**
	* Массив обновляемых элементов каталога
	* @var
	*/
	public $update;

	/**
	* Массив удаляемых элементов каталога
	* @var
	*/
	public $delete;


}