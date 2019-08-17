<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */
namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class WidgetsSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/widgets/set';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	        'request' => array(
                'widgets' => array(
                    'install' => $this->install,
                    'uninstall' => $this->uninstall
                )
            )
	    );

	    $data = $this->post($request);

	    return $data['response']['widgets'];
	}

   	
   	 /**
	* Массив добавляемых списков
	* @var
	*/
	public $install;

	/**
	* Массив обновляемых списков
	* @var
	*/
	public $uninstall;



}