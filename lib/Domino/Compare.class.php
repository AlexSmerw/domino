<?php
namespace Domino;

class Compare
{
    const COOKIE_NAME = 'compare';
    protected $productIds;

    /**
     * @return self
     */
    static function getInstance()
    {
        static $result;
        if (!isset($result)) {
            $result = new self();
        }
        return $result;
    }

    protected function __construct()
    {
        $this->load();
    }

    function addProductId($productId)
    {
        if (!in_array($this->productIds, $productId)) {
            $this->productIds[] = $productId;
        }
    }

    function delProductId($productId)
    {
        if (($i = array_search($productId, $this->productIds)) !== false) {
            unset($this->productIds[$i]);
            $this->productIds = array_values($this->productIds);
        }
    }

    function delSectionId($sectionId)
    {
        $rs = \CIBlockElement::GetList(array(), array('ID' => $this->productIds, 'SECTION_ID' => $sectionId), false, false, array('ID'));
        while($ar = $rs->Fetch()) {
            $this->delProductId($ar['ID']);
        }
    }

    function getProductIds()
    {
        return $this->productIds;
    }

    function truncate()
    {
        $this->productIds = array();
    }

    protected function load()
    {
        $this->productIds = array();

        if (!empty($_COOKIE[self::COOKIE_NAME]) && ($userProductIds = json_decode($_COOKIE[self::COOKIE_NAME], true)) && is_array($userProductIds)) {

            foreach ($userProductIds as $id) {
                if ($id = intval($id)) {
                    $this->productIds[$id] = true;
                }
            }

            $this->productIds = array_keys($this->productIds);
        }
    }

    function save()
    {
        $this->productIds = $this->getFilteredProductIds($this->productIds);
        setcookie(self::COOKIE_NAME, json_encode($this->productIds), time() + 365 * 24 * 60 * 60, '/');
    }

    function getFilteredProductIds($productsId)
    {
        if (!$productsId) return array();

        $existProductIds = array();
        $rs = \CIBlockElement::GetList(array(), array('IBLOCK_ID' => IBLOCK_CATALOG, 'ACTIVE' => 'Y', 'ID' => $productsId), false, false, array('ID'));
        while ($ar = $rs->Fetch()) {
            $existProductIds[$ar['ID']] = true;
        }
        foreach ($productsId as $i => $id) {
            if (!isset($existProductIds[$id])) {
                unset($productsId[$i]);
            }
        }

        return $productsId;
    }
}