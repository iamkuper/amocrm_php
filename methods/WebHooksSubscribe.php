<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;



class WebHooksSubscribe extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/webhooks/subscribe';
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = array(  
	    	'subscribe' => (
		      	'url' => $this->url,
		      	'events' => $this->events
		  	)
	    );

	    $data = $this->post($request);

    	return $data['_embedded']['items'];
	}

   	
   	 /**
	* URL хука
	* @var
	*/
	public $url;

	/**
	* Список событий
	* @var
	*/
	public $events;



}