<?php

namespace Bobrov\Forms;

use BitrixHelperLib\Classes\Block;
use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;

class Feedbacken extends Form
{
    private $iBlockId;
    public function __construct($data, $iBlockId)
    {
        $fields = array(
            'nameEn'  => array('rules' => array('required' => true)),
            'phoneEn'  => array('rules' => array('required' => true)),
            'company'  => array('rules' => array('required' => true)),
            'emailEn'  => array('rules' => array('required' => true)),
            'messageEn'  => array('rules' => array('required' => true)),
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

        $this->handleSubmit(new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('phoneEn')));
        $this->setDataItem('fileurl',$this->getFileUrl($this->iBlockId, $this->getDataItem('phoneEn')));
        $this->handleSubmit(new BitrixEmailCommand(FALSE, 'FEEDBACKEN'));
    }
    
     /**
     * Метод позволяет получить путь файла резюме в сайте
     * @param $blockId
     * @param $elementName
     * @return string
     */
    protected function getFileUrl($blockId, $elementName){
        $result = Block\Getter::instance()
            ->setFilter(array(
                'IBLOCK_ID' => $blockId,
                'NAME' => $elementName,
                'ACTIVE' => 'Y'
            ))
            ->getOne();
        if($result->hasImage('BROWSE')){
            $url = $result->getImageUrl('BROWSE');
        }else{
            $url = '';
        }


        return $url;
    }
}