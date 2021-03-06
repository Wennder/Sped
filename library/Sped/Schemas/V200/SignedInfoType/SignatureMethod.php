<?php

namespace Sped\Schemas\V200\SignedInfoType;

/**
 * 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name SignatureMethod
 * @package Sped
 */
class SignatureMethod extends \Sped\Components\Xml\Element 
{

    /**
     * 
     * @return string 
     */
    public function getAlgorithm()
    {
        return $this->getAttribute('Algorithm');
    }

    /**
     * 
     * @param type $value 
     */
    public function setAlgorithm($value)
    {
        $this->setAttribute('Algorithm', $value);
        return $this;
    }

}