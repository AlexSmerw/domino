<?php

namespace BitrixHelperLib\Classes;

class MultilangDummy extends Block\Object
{
    use \BitrixHelperLib\Traits\MultilangFields;

    public function getLangTitle()
    {
        return coalesce($this->getLangPropText('TITLE'), $this->name);
    }
}
