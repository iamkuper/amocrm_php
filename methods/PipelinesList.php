<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;

class PipelinesList extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/pipelines';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['_embedded']['items'];
    }


}