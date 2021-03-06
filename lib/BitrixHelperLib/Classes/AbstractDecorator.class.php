<?php


namespace BitrixHelperLib\Classes;


abstract class AbstractDecorator
{
    protected $component;

    public function __construct($component)
    {
        $this->component = $component;
    }

    public function __call($methodName, $args = array())
    {
        if (method_exists($this->component, $methodName))
        {
            return call_user_func_array(array($this->component, $methodName), $args);
        }

        throw new \Exception("Method $methodName is not implemented in " . __CLASS__);
    }
}