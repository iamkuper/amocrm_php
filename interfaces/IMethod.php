<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Interfaces;


interface IMethod {

    /**
     * Получение имени метода для запроса к API
     * @return mixed
     */
    public function getMethodName();

    /**
     * Код метода
     * @return mixed
     */
    public function run();

} 