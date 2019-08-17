<?php
/**
 * Метод устарел 
 * @author v.v.mamaev <v.v.mamaev@yandex.ru>
 * @since 1.0
 */

namespace AmoCRM\Methods;

use AmoCRM\Core\AmoPostMethod as PostMethod;
use AmoCRM\Interfaces\IMethod as Method;

class LinksSet extends PostMethod implements Method {

  /**
   * Получение имени метода для запроса к API
   * @return mixed
   */
  public function getMethodName() {
      return '/private/api/v2/json/links/set';
  }

  /**
   * Код метода
   * @return mixed
   * response:
   *  Array (
   *   [leads] => Array (
   *     [add] => Array (
   *       [0] => Array (
   *         [id] => 30385385
   *         [request_id] => 0
   *       )
   *     )
   *   )
   *   [server_time] => 1423379385
   * )
   */
  public function run() {
    $request = array(
      'request' => array(
        'links' => array(
          'link' => $this->link,
          'unlink' => $this->unlink
        )
      )
    );
    return $this->post($request);
  }

  /**
   * Array of creating leads
   * @var
   */
  public $link;

  /**
   * Array of updating leads
   * @var
   */
  public $unlink;
}
