<?php
/**
 * Метод устарел
 * @author iamkuper <iamkuper@gmail.com>
 * @since 1.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoGetMethod as GetMethod;
use AmoCRM\Interfaces\IMethod as Method;


class CatalogsList extends AmoGetMethod implements IMethod {

    /**
     * @return string
     */
    public function getMethodName() {
        return '/private/api/v2/json/catalog_elements/list';
    }

    /**
     * @return mixed
     */
    public function run() {
        $data = $this->get();
        return $data['catalog_elements'];
    }

    /**
     * Искомый элемент, по текстовому запросу
     * (Осуществляет поиск по таким полям как : почта, телефон и любым иным полям, Не осуществляет поиск по заметкам и задачам
     * @var
     */
    public $term;

    /**
     * Дополнительный фильтр поиска, по ответственному пользователю
     * @var
     */
    public $catalog_id;


}