<?php

namespace Bobrov\Forms;

use BitrixHelperLib\Classes\Block;
use Bobrov\Forms;
use BitrixHelperLib\Classes\Forms\Commands\ElementAddCommand;
use BitrixHelperLib\Classes\Forms\Form;
use BitrixHelperLib\Classes\Forms\Commands\BitrixEmailCommand;

class Job extends Form
{
    private $iBlockId;
    public function __construct($data, $iBlockId)
    {
        /*Создаем псевдо поле формы, для того что бы можно было получать путь к файлу резюме из почтового шаблона*/
        $data['fileurl'] = '';
        $fields = array(
            'name'  => array('rules' => array('required' => true)),
            'phone'  => array('rules' => array('required' => true)),
            'email'  => array('rules' => array('required' => true)),
            'comment'  => array('rules' => array('required' => true)),
            'resume'  => array('rules' => array('required' => true)),
            'job'  => array('rules' => array('required' => true)),
            'fileurl'  => array('rules' => array('required' => false)),
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

        /*Добавляем сначала значение формы в элемт ИБ*/
        $this->handleSubmit(new ElementAddCommand(TRUE, $this->iBlockId, $this->getDataItem('phone')));
        /* Из добавленного ИБ получаем путь к файлу резюме, и подставляем его в псевдо поле формы. */
        $this->setDataItem('fileurl',$this->getFileUrl($this->iBlockId, $this->getDataItem('phone')));
        $this->handleSubmit(new BitrixEmailCommand(FALSE,'JOB'));

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
        $url = $result->getImageUrl('RESUME');
        return $url;
    }

}