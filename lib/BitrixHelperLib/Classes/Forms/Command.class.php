<?php


namespace BitrixHelperLib\Classes\Forms;

abstract class Command
{
    protected $isCritical;

    abstract public function execute(Form $form);

    public function __construct($isCritical)
    {
        $this->isCritical = $isCritical;
    }

    protected function getErrorMessage($message)
    {
        return array(get_class($this) => $message);
    }
}