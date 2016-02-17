<?
namespace Domino\Entities;

class Action extends \BitrixHelperLib\Classes\Block\Object
{
    /**
     * метод получате список Товаров для конкретной акции
     * @return \BitrixHelperLib\Classes\Block\Object[]
     */
    public function getProducts(){
            $arFilter = array(
                'IBLOCK_ID' => IBLOCK_PRODUCTS,
                'ACTIVE' => 'Y',
                'ID' => $this->getPropText('PRODUCTS')
            );
            $products = \BitrixHelperLib\Classes\Block\Getter::instance()
                ->setFilter($arFilter)
                ->setHydrateById(true)
                ->get();
            return $products;
    }

}
