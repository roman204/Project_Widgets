<?php

/**
 * Created by PhpStorm.
 * User: rhutterer
 * Date: 23.09.14
 * Time: 11:16
 */
class Project_Widgets_Block_Adminhtml_Wysiwyg extends Mage_Adminhtml_Block_Widget_Form_Renderer_Fieldset_Element
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $editor = new Varien_Data_Form_Element_Editor($element->getData());
        $editor->setConfig(Mage::getSingleton('cms/wysiwyg_config')->getConfig());
        $editor->setId($element->getId());
        $editor->setForm($element->getForm());
        $editor->setWysiwyg(true);
        $editor->setForceLoad(true);
        return parent::render($editor);
    }
}