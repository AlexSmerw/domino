<?php
namespace Domino;

class Registry extends \BitrixHelperLib\Classes\Registry
{
    static protected $flagColorMap = array(
        'Новинка' => 'green',
        'Под заказ' => 'yellow',
        'Купоны' => 'red',
        'Эксклюзив' => 'orange'
    );

    static protected $flagLeftMap = array(
        'Купоны' => true,
        'Эксклюзив' => true
    );

    static protected $collections;
    static protected $productsCollectionMap;

    static function getItemsFlagsIds($iblockId = IBLOCK_CATALOG)
    {
        $flagsIds = array();

        $flagsDb = \CIBlockPropertyEnum::GetList(array('id' => 'asc'), array('IBLOCK_ID' => $iblockId, 'CODE' => 'FLAGS'));
        while ($flags = $flagsDb->GetNext()) {
            $flagsIds[$flags['XML_ID']] = $flags['ID'];
        }

        return $flagsIds;
    }

    static function getBrandById($id)
    {
        static $result;
        if (!isset($result)) {
            $result = \BitrixHelperLib\Classes\Block\Getter::instance()
                ->setFilter(array('IBLOCK_ID' => IBLOCK_BRAND, 'ACTIVE' => 'Y'))
                ->setClassName('\Bobrov\Entities\Brand')
                ->setHydrateById(true)
                ->setSelectFields(array('ID', 'NAME', 'CODE', 'DETAIL_PAGE_URL', 'PREVIEW_PICTURE'))
                ->get();
        }
        return $result[$id];
    }

    static function getProducerById($id)
    {
        static $result;
        if (!isset($result)) {
            $result = \BitrixHelperLib\Classes\Block\Getter::instance()
                ->setFilter(array('IBLOCK_ID' => IBLOCK_PRODUCERS, 'ACTIVE' => 'Y'))
                ->setClassName('\Bobrov\Entities\Producer')
                ->setHydrateById(true)
                ->get();
        }
        return $result[$id];
    }

    static function getProducerIdsByBrandId($brandId) {
        static $result;
        if(!isset($result)) {
            $rs = \CIBlockElement::GetList(array('SORT' => 'ASC', 'NAME' => 'ASC'), array('IBLOCK_ID' => IBLOCK_BRAND, 'ACTIVE' => 'Y'), false, false, array('ID', 'PROPERTY_PRODUCER'));
            while($ar = $rs->Fetch()) {
                $result[$ar['PROPERTY_PRODUCER_VALUE']][] = $ar['ID'];
            }
        }
        return $result[$brandId];
    }

    static function getBrandsByProducerId($id) {
        $brandsId = self::getProducerIdsByBrandId($id);
        $brands = array();
        if($brandsId) {
            foreach($brandsId as $brandId) {
                $brand = self::getBrandById($brandId);
                if($brand) {
                    $brands[] = $brand;
                }
            }
        }
        return $brands;
    }

    static function getScopeById($id)
    {
        static $result;
        if (!isset($result)) {
            $result = \BitrixHelperLib\Classes\Block\Getter::instance()
                ->setFilter(array('IBLOCK_ID' => IBLOCK_SCOPE, 'ACTIVE' => 'Y'))
                ->setHydrateById(true)
                ->setClassName('Domino\Entities\Scope')
                ->get();
        }
        return $result[$id];
    }

    static function getAllCountryNames()
    {
        static $result;
        if (!isset($result)) {
            $result = array();
            $rs = \CIBlockElement::GetList(
                array('SORT' => 'ASC', 'NAME' => 'ASC'),
                array('IBLOCK_ID' => IBLOCK_COUNTRIES, 'ACTIVE' => 'Y'), false, false, array('ID', 'NAME'));
            while ($ar = $rs->Fetch()) {
                $result[$ar['ID']] = $ar['NAME'];
            }
        }
        return $result;
    }

    static function getFlagColorByName($name)
    {
        return isset(self::$flagColorMap[$name]) ? self::$flagColorMap[$name] : reset(self::$flagColorMap);
    }

    static function isFlagLeftByName($name)
    {
        return isset(self::$flagLeftMap[$name]);
    }

    static function getCollectionById($id)
    {
        self::setCollections();
        return self::$collections[$id];
    }

    static function setCollections()
    {
        if (isset(self::$collections)) return;

        self::$collections = \BitrixHelperLib\Classes\Block\Getter::instance()
            ->setOrder(array('SORT' => 'ASC', 'NAME' => 'ASC'))
            ->setFilter(array('IBLOCK_ID' => IBLOCK_COLLECTION, 'ACTIVE' => 'Y'))
            ->setClassName('\Bobrov\Entities\Collection')
            ->setHydrateById(true)
            ->get();
    }

    static function getCollectionIdByProductId($id = null)
    {
        self::setProductCollectionMap();
        return self::$productsCollectionMap[$id];
    }

    static function setProductCollectionMap()
    {
        if (isset(self::$productsCollectionMap)) return;

        self::$productsCollectionMap = array();
        $rs = \CIBlockElement::GetList(array(), array('IBLOCK_ID' => IBLOCK_CATALOG, 'ACTIVE' => 'Y'), false, false, array('ID', 'PROPERTY_COLLECTION'));
        while ($ar = $rs->Fetch()) {
            self::$productsCollectionMap[$ar['ID']] = $ar['PROPERTY_COLLECTION_VALUE'];
        }
    }

    static function getCollectionsByProductIds($ids)
    {
        $collectionIds = self::getCollectionIdsByProductIds($ids);
        $collections = self::getCollectionsByIds($collectionIds);

        return $collections;
    }

    static function getCollectionIdsByProductIds($ids)
    {
        self::setProductCollectionMap();

        $result = array_intersect_key(self::$productsCollectionMap, array_flip($ids));

        return $result;
    }

    static function getCollectionsByIds($ids) {
        self::setCollections();

        $result = array_intersect_key(self::$collections, array_flip($ids));

        return $result;
    }

    /**
     * @return \Bobrov\Entities\ProductSection
     */
    static function getCatalogSectionById($id) {
        static $sections;
        if (!isset($sections)) {
            $sections = \BitrixHelperLib\Classes\Section\Getter::instance()
                ->setOrder(array('SORT' => 'ASC', 'NAME' => 'ASC'))
                ->setFilter(array('IBLOCK_ID' => IBLOCK_CATALOG, 'ACTIVE' => 'Y'))
                ->setHydrateById(true)
                ->setSelectFields(array('ID', 'NAME', 'CODE', 'IBLOCK_SECTION_ID'))
                ->setClassName('\Bobrov\Entities\ProductSection')
                ->get();
        }

        return $sections[$id];
    }

    static function getFilterFeatures($id) {
        static $cache;
        if(!isset($cache)) {
            $cache = \BitrixHelperLib\Classes\Block\Getter::instance()
                ->setOrder(array('SORT' => 'ASC', 'NAME' => 'ASC'))
                ->setFilter(array('IBLOCK_ID' => IBLOCK_FEATURES, 'ACTIVE' => 'Y'))
                ->setSelectFields(array('ID', 'NAME'))
                ->get();
        }

        $result = array();

        if(is_array($id)) {
            $ids = array_flip($id);
            foreach($cache as $item) {
                if(isset($ids[$item->ID])) {
                    $result[] = $item;
                }
            }
        }

        return $result;
    }
}