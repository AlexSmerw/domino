<?php


namespace BitrixHelperLib\Classes\Block;

class Image extends File
{
    private $thumbFunc = 'cp_get_thumb_url';

    public function getImageUrl()
    {
        return $this->fetchSrc();
    }

    public function getThumbUrl($options)
    {
        return call_user_func($this->thumbFunc, $this->fetchSrc(), $options);
    }

    public function getWidth()
    {
        return $this->data['WIDTH'];
    }

    public function getHeight()
    {
        return $this->data['HEIGHT'];
    }
}
