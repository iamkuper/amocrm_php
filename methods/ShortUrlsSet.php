<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;



class ShortUrlsSet extends PostMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/url_shortener/?USER_LOGIN='.$this->USER_LOGIN.'&USER_HASH='.$this->USER_HASH;
    }

    /**
     * @return mixed
     */
     public function run() {
	    $request = $this->urls;

	    $data = $this->post($request);

	    return $data['_embedded']['items'];
	}

   	
   	 /**
	* Массив добавляемых списков
	* @var
	*/
	public $USER_LOGIN;

	/**
	* Массив обновляемых списков
	* @var
	*/
	public $USER_HASH;

	/**
	* Массив удаляемых списков
	* @var
	*/
	public $urls;


}