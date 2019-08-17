<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;

class ContactsSet extends PostMethod implements Method {

  /**
   * Получение имени метода для запроса к API
   * @return mixed
   */
  public function getMethodName() {
      return '/api/v2/contacts';
  }


  public function run() {
    $request = array(  
      'add' => $this->add,
      'update' => $this->update
    );

    $data = $this->post($request);

    return $data['_embedded']['items'];
  }

  /**
   * Массив добавляемых контактов
   * @var
   */
  public $add;

  /**
   * Массив обновляемых контактов
   * @var
   */
  public $update;
}
