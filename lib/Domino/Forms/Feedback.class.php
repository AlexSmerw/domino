<?php

namespace Bobrov\Forms;

use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;

class Feedback extends Form
{
    private $iBlockId;
    public function __construct($data, $iBlockId)
    {
        $fields = array(
            'name'  => array('rules' => array('required' => true)),
            'phoneAndMail'  => array('rules' => array('required' => true)),
            'comment'  => array('rules' => array('required' => true)),
        );

        $this->iBlockId = $iBlockId;
        parent::__construct($fields, $data);
    }
    public function process()
    {
        if(!$this->isValid())
        {
            throw new \Exception('Validation error');
        }
        /**
         * Т.к. в форме поле называется Телефон или Email,
         * а пользователю мы должны отправлять подтверждение о получении его сообщения,
         * то сделана проверка на то что он указал email. И если это так, то ему отправим письмо.
         */

        if($this->isMail($this->getDataItem('phoneAndMail'))){
            $this->handleSubmit(
                new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('phoneAndMail')),
                new BitrixEmailCommand(FALSE, 'FEEDBACK'),
                new BitrixEmailCommand(FALSE, 'FEEDBACK_FOR_USER')
            );
        }else{
            $this->handleSubmit(
                new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('phoneAndMail')),
                new BitrixEmailCommand(FALSE, 'FEEDBACK')
            );
        }
    }

    /**
     * Метод проверки входных параметров в поле phoneAndMail
     * Если указана почта - то вернет истинку.
     * @param  string $mail - строка элемента формы phoneAndMail
     * @return bool
     */
    protected function isMail($mail){
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
}