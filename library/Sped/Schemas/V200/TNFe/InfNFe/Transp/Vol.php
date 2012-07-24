<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Transp;

/**
 * Dados dos volumes
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name Vol
 * @package Sped
 */
class Vol extends \Sped\Components\Xml\Element  {

    const QVOL = 'qVol';

    const ESP = 'esp';

    const MARCA = 'marca';

    const NVOL = 'nVol';

    const PESOL = 'pesoL';

    const PESOB = 'pesoB';

    const LACRES = 'lacres';

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol 
     */
    public function getQVol($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol');
        return $this->getElementsByTagName(self::QVOL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol 
     */
    public function addQVol($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol(self::QVOL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol $paramQVol 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setQVol(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\QVol $paramQVol){
        $this->removeElementsByTagName(self::QVOL);
        $this->appendChild($paramQVol, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp 
     */
    public function getEsp($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp');
        return $this->getElementsByTagName(self::ESP)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp 
     */
    public function addEsp($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp(self::ESP, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp $paramEsp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setEsp(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Esp $paramEsp){
        $this->removeElementsByTagName(self::ESP);
        $this->appendChild($paramEsp, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca 
     */
    public function getMarca($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca');
        return $this->getElementsByTagName(self::MARCA)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca 
     */
    public function addMarca($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca(self::MARCA, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca $paramMarca 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setMarca(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Marca $paramMarca){
        $this->removeElementsByTagName(self::MARCA);
        $this->appendChild($paramMarca, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol 
     */
    public function getNVol($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol');
        return $this->getElementsByTagName(self::NVOL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol 
     */
    public function addNVol($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol(self::NVOL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol $paramNVol 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setNVol(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\NVol $paramNVol){
        $this->removeElementsByTagName(self::NVOL);
        $this->appendChild($paramNVol, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function getPesoL($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1203');
        return $this->getElementsByTagName(self::PESOL)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function addPesoL($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1203(self::PESOL, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1203 $paramPesoL 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setPesoL(\Sped\Schemas\V200\TDec_1203 $paramPesoL){
        $this->removeElementsByTagName(self::PESOL);
        $this->appendChild($paramPesoL, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function getPesoB($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1203');
        return $this->getElementsByTagName(self::PESOB)->item($index);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TDec_1203 
     */
    public function addPesoB($value = NULL){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1203(self::PESOB, $value, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TDec_1203 $paramPesoB 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setPesoB(\Sped\Schemas\V200\TDec_1203 $paramPesoB){
        $this->removeElementsByTagName(self::PESOB);
        $this->appendChild($paramPesoB, false);
        return $this;
    }

    /**
     * 
     * @param type $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     */
    public function getLacres($index){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres');
        return $this->getElementsByTagName(self::LACRES)->item($index);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres 
     */
    public function addLacres(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres(self::LACRES, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres $paramLacres 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol 
     */
    public function setLacres(\Sped\Schemas\V200\TNFe\InfNFe\Transp\Vol\Lacres $paramLacres){
        $this->removeElementsByTagName(self::LACRES);
        $this->appendChild($paramLacres, false);
        return $this;
    }

}