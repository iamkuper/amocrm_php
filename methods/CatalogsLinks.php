<?php
/**
 * Метод устарел
 * @author iamkuper <iamkuper@gmail.com>
 * @since 1.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class CatalogsLinks extends AmoGetMethod implements Method {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/links/list';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['links'];
    }

    /**
     * Искомый элемент, по текстовому запросу
     * (Осуществляет поиск по таким полям как : почта, телефон и любым иным полям, Не осуществляет поиск по заметкам и задачам
     * @var
     */
    public $links;



}