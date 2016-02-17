<?php

namespace Bobrov\Forms;

use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;

class Pricelist extends Form
{
    private $iBlockId;

    public function __construct($data, $iBlockId)
    {
        $fields = array(
            'name' => array('rules' => array('required' => true)),
            'company' => array('rules' => array('required' => true)),
            'phone' => array('rules' => array('required' => true)),
            'email' => array('rules' => array('required' => true)),
            'goods' => array('rules' => array('required' => false)),
            'comment' => array('rules' => array('required' => false)),
        );

        $data['goods'] = $this->getGoodsStrings($data['goods']);

        $this->iBlockId = $iBlockId;
        parent::__construct($fields, $data);
    }

    public function process()
    {
        if (!$this->isValid()) {
            throw new \Exception('Validation error');
        }

        $this->handleSubmit(
            new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('name')),
            new BitrixEmailCommand(FALSE, 'PRICELIST')
        );
    }

    protected function getGoodsStrings($goodsData) {
        if($goodsData) {
            $result = array();
            $rs = \CIBlockSection::GetList(
                array('SORT' => 'ASC'),
                array('ID' => $goodsData, 'ACTIVE' => 'Y', 'IBLOCK_ID' => IBLOCK_CATALOG),
                false,
                array('NAME'),
                false);
            while($ar = $rs->Fetch()) {
                $result[] = $ar['NAME'];
            }
            $goodsData = $result;
        }

        return $goodsData;
    }
}