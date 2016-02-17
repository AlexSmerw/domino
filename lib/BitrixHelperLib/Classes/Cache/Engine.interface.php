<?php


namespace BitrixHelperLib\Classes\Cache;

interface Engine
{
    public function valid($cacheId, $ttl);
    public function get($cacheId);
    public function clear();
    public function clearByTag($tag);
    public function save($cacheId, $data);
}