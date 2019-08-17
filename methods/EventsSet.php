<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class EventsSet extends PostMethod implements Method {

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
	      'add' => $this->add
	    );

	    $data = $this->post($request);

	    return $data['_embedded']['items'];
	}

   	
   	 /**
	* Массив добавляемых уведомлений
	* @var
	*/
	public $add;




}