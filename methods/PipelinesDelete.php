<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class PipelinesDelete extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/pipelines/delete';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	        'request' => array(
                'id' => $this->id
            )
	    );

	    $data = $this->post($request);

	    return $data['response'];
	}

   	
   	  /**
       * Массив/ID удаляемых воронок
       * @var
       */
      public $id;

   


}