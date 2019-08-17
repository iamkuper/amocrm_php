<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class TransactionsSet extends PostMethod implements Method {

  /**
   * Получение имени метода для запроса к API
   * @return mixed
   */
  public function getMethodName() {
      return '/api/v2/transactions';
  }


  public function run() {
    $request = array(  
      'add' => $this->add,
      'update' => $this->update,
      'delete' => $this->delete
    );

    $data = $this->post($request);

    return $data['_embedded']['items'];
  }

  /**
   * Массив добавляемых транзакций
   * @var
   */
  public $add;

  /**
   * Массив комментируемых транзакций
   * @var
   */
  public $update;

  /**
   * Массив удаляемых транзакций
   * @var
   */
  public $delete;
}
