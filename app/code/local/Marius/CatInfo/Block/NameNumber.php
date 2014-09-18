<?php

/**
 * Description of NameNumber
 *
 * @author marius
 */
class Marius_CatInfo_Block_NameNumber extends Mage_Core_Block_Template {

    public function getCategoryName() {
        return $this->getCurrentCategory()->getName();
    }

    public function getProductCount() {
        return $this->getCurrentCategory()->getProductCollection()->count();
    }

    /**
     * 
     * @return Mage_Catalog_Model_Category
     */
    protected function getCurrentCategory() {
        return Mage::registry('current_category');
    }

}
