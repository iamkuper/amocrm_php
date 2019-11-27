<?php

namespace AmoCRM; 


/**
 * @author iamkuper <iamkuper@gmail.com>
 * @since 2.0
 */
class API {

    // Defaults Statuses
    const STATUS_SUCCESS = 142;
    const STATUS_FAIL    = 143;

    // Users
    const USER_ROBOT = 0;

    // ENUMS
    const ENUM_WORK = 'WORK';
    const ENUM_MOBILE = 'MOB';
    

    // Field Types
    const FIELD_TEXT = 1;
    const FIELD_NUMERIC = 2;
    const FIELD_CHECKBOX = 3;
    const FIELD_SELECT = 4;
    const FIELD_MULTISELECT = 5;
    const FIELD_DATE = 6;
    const FIELD_URL = 7;
    const FIELD_MULTITEXT = 8;
    const FIELD_TEXTAREA = 9;
    const FIELD_RADIOBUTTON = 10;
    const FIELD_STREETADDRESS = 11;
    const FIELD_SMART_ADDRESS = 13;
    const FIELD_BIRTHDAY = 14;
    const FIELD_LEGAL_ENTITY = 15;
    const FIELD_ITEMS = 16;
    const FIELD_ORG_LEGAL_NAME = 17;


    // Types
    const TYPE_CONTACT  = 1;
    const TYPE_LEAD  = 2;
    const TYPE_COMPANY = 3;
    const TYPE_TASK = 4;
    const TYPE_CUSTOMER = 12;

    // Defaults Task Types
    const TASK_CALL  = 1;
    const TASK_MEET  = 2;
    const TASK_EMAIL = 3;

    // Defaults Notes Types
    const NOTES_COMMON  = 4;
    const NOTES_TASK_RESULT  = 13;
    const NOTES_SYSTEM  = 25;
    const NOTES_SMS_IN  = 102;
    const NOTES_SMS_OUT  = 103;

    /**
     * @var
     */
    public $domain;

    /**
     * @var
     */
    public $ext = 'ru'; // .amocrm.ru && .amocrm.com



    /**
     * @var bool
     */
    public $isAuth = false;

    /**
     * @param $login
     * @param $hash
     * @param $domain
     * @throws Exception
     */
    public function __construct($login, $hash, $domain, $ext = 'ru')
    {

        $this->domain = $domain;
        $this->ext = $ext;

        $auth = $this->Auth(array(
            'USER_LOGIN' => $login,
            'USER_HASH'  => $hash
        ));

        if(!isset($auth['auth'])) {
            throw new Exception('u dont auth');
        };

        $this->isAuth = true;

    }

    /**
     * @param $name
     * @param $params
     * @return mixed
     */
    public function __call($name, $params) {
        $className = '/AmoCRM/Methods/'.$name;
        $params['domain'] = $this->domain;
        $params['ext'] = $this->ext;
        $object = new $className($params);
        return $object->run();
    }
}