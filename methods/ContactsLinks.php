<?php
/**
 * Метод устарел
 * @author iamkuper <iamkuper@gmail.com>
 * @since 1.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class ContactsLinks extends GetMethod implements Method {

    public function getMethodName() {
        return '/private/api/v2/json/contacts/links';
    }

    public function run() {
        $data = $this->get();
        return $data['links'];
    }
}