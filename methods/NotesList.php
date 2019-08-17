<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;

class NotesList extends GetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/api/v2/notes';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['_embedded']['items'];
    }

    /**
     * contact or lead
     * Получение данных только для контакта или сделки
     * @var
     * Обязательный параметр
     */
    public $type;

    /**
     * Уникальный идентификатор контакта или сделки
     * @var
     */
    public $element_id;
}