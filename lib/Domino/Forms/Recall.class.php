<?php

namespace Domino\Forms;

use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;

class Recall extends Form
{
    private $iBlockId;
    public function __construct($data, $iBlockId)
    {
        $fields = array(
            'name'  => array('rules' => array('required' => false)),
            'phone'  => array('rules' => array('required' => false)),
            'email'  => array('rules' => array('required' => true)),
            'company'  => array('rules' => array('required' => false)),
            'message'  => array('rules' => array('required' => false)),
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

        $this->handleSubmit(
            new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('email')),
            new BitrixEmailCommand(FALSE, 'RECALL')
        );
    }
}