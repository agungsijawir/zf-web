<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Form
 * @copyright  Copyright (c) 2005-2007 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * Zend_Form Display Group Interface
 * 
 * @category   Zend
 * @package    Zend_Form
 * @copyright  Copyright (c) 2005-2007 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: $
 */
interface Zend_Form_DisplayGroup_Interface
{
    /**
     * Allow configuration via array options
     * 
     * @param  array $options 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setOptions(array $options);

    /**
     * Allow configuration via Zend_Config objects
     * 
     * @param  Zend_Config $config 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setConfig(Zend_Config $config);

    /**
     * Retrieve metadata attributes
     * 
     * @return array
     */
    public function getAttribs();

    /**
     * Set translation object
     * 
     * @param  Zend_Translate|Zend_Translate_Adapter|null $translator 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setTranslator($translator = null);

    /**
     * Get translation object
     * 
     * @return null|Zend_Translate_Adapter
     */
    public function getTranslator();

    /**
     * Set view object
     * 
     * @param  Zend_View_Interface $view 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setView();

    /**
     * Retrieve view instance
     * 
     * @return Zend_View_Interface
     */
    public function getView();

    /**
     * Retrieve name
     * 
     * @return string
     */
    public function getName();

    /**
     * Retrieve legend
     * 
     * @return string
     */
    public function getLegend();

    /**
     * Retrieve description
     * 
     * @return string
     */
    public function getDescription();

    /**
     * Retrieve form order
     * 
     * @return int
     */
    public function getOrder();

    /**
     * Get all validation error codes, or error codes by individual elements or 
     * sub forms
     * 
     * @param  string|null $name 
     * @return array
     */
    public function getErrors();

    /**
     * Get all validation error messages, or by individual elements or sub 
     * forms 
     * 
     * @param  string $name 
     * @return array
     */
    public function getMessages();

    /**
     * Set decorators
     * 
     * @param  array $decorators 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setDecorators(array $decorators);

    /**
     * Get decorators
     * 
     * @return array
     */
    public function getDecorators();

    /**
     * Render form
     * 
     * @param  Zend_View_Interface|null $view 
     * @return string
     */
    public function render(Zend_View_Interface $view = null);

    /**
     * Add element to group
     * 
     * @param  Zend_Form_Element_Interface|string $element 
     * @param  string $name 
     * @param  array|Zend_Config|null $options 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function addElement($element, $name = null, $options = null);

    /**
     * Add multiple elements at once
     * 
     * @param  array $elements 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function addElements(array $elements);

    /**
     * Add multiple elements at once (overwrite)
     * 
     * @param  array $elements 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function setElements(array $elements);

    /**
     * Retrieve a single element
     * 
     * @param  string $name 
     * @return Zend_Form_Element_Interface
     */
    public function getElement($name);

    /**
     * Retrieve all elements
     * 
     * @return array
     */
    public function getElements();

    /**
     * Remove a single element
     * 
     * @param  string $name 
     * @return bool
     */
    public function removeElement($name);

    /**
     * Clear all elements
     * 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function clearElements();

    /**
     * Add prefix path for plugin loaders
     * 
     * @param  string $prefix 
     * @param  string $path 
     * @return Zend_Form_DisplayGroup_Interface
     */
    public function addPrefixPath($prefix, $path);

    /**
     * Iteration: current item
     * 
     * @return mixed
     */
    public function current();

    /**
     * Iteration: current key
     * 
     * @return string|int
     */
    public function key();

    /**
     * Iteration: move pointer to next item
     * 
     * @return void
     */
    public function next();

    /**
     * Iteration: move pointer to first item
     * 
     * @return void
     */
    public function rewind();

    /**
     * Iteration: item is valid
     * 
     * @return bool
     */
    public function valid();
}
