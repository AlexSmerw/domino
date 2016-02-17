<?php

namespace BitrixHelperLib\Classes\Forms\Commands;

use BitrixHelperLib\Classes\Forms\Command;
use BitrixHelperLib\Classes\Forms\Form;

class BitrixEmailCommand extends Command
{
    private $emailEvent;
    private $fieldsUppercase;
    private $siteId;
    /**
     * @var Form
     */
    private $form;

    public function __construct($isCritical, $emailEvent, $fieldsUppercase = TRUE, $siteId = SITE_ID)
    {
        parent::__construct($isCritical);

        $this->emailEvent = $emailEvent;
        $this->fieldsUppercase = $fieldsUppercase;
        $this->siteId = $siteId;
    }

    public function execute(Form $form)
    {
        $sendData = $form->getData();

        if($this->fieldsUppercase)
        {
            $submitArray  = array_change_key_case($sendData, CASE_UPPER);
        }

        $result = \CEvent::Send($this->emailEvent, $this->siteId, $submitArray);
        if(!$result && $this->isCritical)
        {
            throw new \Exception('CEvent::Send false');
        }
        elseif(!$result && !$this->isCritical)
        {
            $form->setErrors(array($this->getErrorMessage('ошибка отправки почты (CEvent::Send)')));
        }
    }
}