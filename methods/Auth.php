<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;

class Auth extends PostMethod implements Method {

    /**
     * @var
     */
    protected $USER_LOGIN;

    /**
     * @var
     */
    protected $USER_HASH;

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/auth.php';
    }

    /**
     * @return mixed
     */
    public function run() {
        return $this->post(array(
            'USER_LOGIN'    => $this->USER_LOGIN,
            'USER_HASH'     => $this->USER_HASH
        ));
    }
}