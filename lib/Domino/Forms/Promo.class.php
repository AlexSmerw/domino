<?php

namespace Bobrov\Forms;

use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;

class Promo extends Form
{
    private $iBlockId;
    public function __construct($data, $iBlockId)
    {
        $fields = array(
            'email'  => array('rules' => array('required' => true)),
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
        
        $_SESSION['PROMO'] = 1;

        $item = \BitrixHelperLib\Classes\Block\Getter::instance()->setFilter(array('IBLOCK_ID' => 44, 'NAME' => $this->getDataItem('email')))->getOne();
        
        if (!$item) {
            $this->handleSubmit(
                new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('email')),
                new BitrixEmailCommand(FALSE, 'PROMO_REQUEST')
            );
        }
    }
}