<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;



class AccountsCurrent extends GetMethod implements Method {



    public $with = 'pipelines,groups,note_types,task_types,custom_fields,users';

    /**
     * @return mixed|string
     */
    public function getMethodName() {
        return '/api/v2/account';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data;
    }

} 