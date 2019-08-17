<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;


class NotesSet extends PostMethod implements Method {

  /**
   * Получение имени метода для запроса к API
   * @return mixed
   */
  public function getMethodName() {
      return '/api/v2/notes';
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
   * Array of creating leads
   * @var
   */
  public $add;

  /**
   * Array of updating leads
   * @var
   */
  public $update;
}
