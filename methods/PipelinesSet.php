<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class PipelinesSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/pipelines/set';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	        'request' => array(
                'pipelines' => array(
                    'add' => $this->add,
                    'update' => $this->update
                )
            )
	    );

	    $data = $this->post($request);

	    return $data['response'];
	}

   	
   	  /**
       * Массив добавляемых контактов
       * @var
       */
      public $add;

      /**
       * Массив обновляемых контактов
       * @var
       */
      public $update;


}