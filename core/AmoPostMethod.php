<?php
/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */
namespace AmoCRM\Core;

class AmoPostMethod extends AmoMethod {

    /**
     * @param $data
     * @return mixed
     */
    public function post($data)
    {

        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL

        #Устанавливаем необходимые опции для сеанса cURL

        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data,null,'&',PHP_QUERY_RFC1738));
       

        $this->curlOptions($curl);


        $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE); #Получим HTTP-код ответа сервера
        curl_close($curl); #Заверашем сеанс cURL


        //Проверяем ответ CURL
        $this->CheckCurlResponse($code);

        /**
         * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
         * нам придётся перевести ответ в формат, понятный PHP
         */
        $response = json_decode($out, true);

        return $response['response'];
    }

    /**
     * Устанавлтвает url для пост запросов
     */
    public function setUrl() {
        $this->url = 'https://'.$this->domain.'.amocrm.'.$this->ext.$this->getMethodName();
        $this->url .= '?type='.$this->type;
    }
} 