<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class LeadsList extends GetMethod implements Method {

    /**
     * Получение имени метода для запроса к API
     * @return mixed
     */
    public function getMethodName() {
        return '/api/v2/leads';
    }

    /**
     * Код метода
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['_embedded']['items'];
    }

    /**
     * Искомый элемент, по текстовому запросу
     * (Осуществляет поиск по таким полям как : почта, телефон и любым иным полям, Не осуществляет поиск по заметкам и задачам
     * @var
     */
    public $query;

    /**
     * Дополнительный фильтр поиска, по ответственному пользователю
     * @var
     */
    public $responsible_user_id;

    /**
     * Фильтр по ID статуса сделки (Как узнать список доступных ID см. здесь)
     * @var
     */
    public $status;
} 