<?php


namespace BitrixHelperLib\Classes\Search;


class SearchException extends \Exception
{
    protected $data;

    public function __construct($data = array())
    {
        $this->data = $data;
    }
}