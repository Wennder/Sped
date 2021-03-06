<?php

namespace Sped\Schemas\V200\TNFe;

/**
 * Informações da Nota Fiscal eletrônica
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name InfNFe
 * @package Sped
 */
class InfNFe extends \Sped\Components\Xml\Element 
{

    const IDE = 'ide';

    const EMIT = 'emit';

    const AVULSA = 'avulsa';

    const DEST = 'dest';

    const RETIRADA = 'retirada';

    const ENTREGA = 'entrega';

    const DET = 'det';

    const TOTAL = 'total';

    const TRANSP = 'transp';

    const COBR = 'cobr';

    const INFADIC = 'infAdic';

    const EXPORTA = 'exporta';

    const COMPRA = 'compra';

    const CANA = 'cana';

    /**
     * Retorna identificação da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function getIde()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide');
        return $this->getElementsByTagName(self::IDE)->item(0);
    }

    /**
     * Adiciona identificação da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide 
     */
    public function addIde()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide(self::IDE, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define identificação da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setIde(\Sped\Schemas\V200\TNFe\InfNFe\Ide $paramIde)
    {
        $this->removeElementsByTagName(self::IDE);
        $this->appendChild($paramIde, false);
        return $this;
    }

    /**
     * Retorna Identificação do emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function getEmit()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Emit');
        return $this->getElementsByTagName(self::EMIT)->item(0);
    }

    /**
     * Adiciona Identificação do emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Emit 
     */
    public function addEmit()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Emit(self::EMIT, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do emitente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEmit(\Sped\Schemas\V200\TNFe\InfNFe\Emit $paramEmit)
    {
        $this->removeElementsByTagName(self::EMIT);
        $this->appendChild($paramEmit, false);
        return $this;
    }

    /**
     * Retorna Emissão de avulsa, informar os dados do Fisco emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function getAvulsa()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Avulsa');
        return $this->getElementsByTagName(self::AVULSA)->item(0);
    }

    /**
     * Adiciona Emissão de avulsa, informar os dados do Fisco emitente
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Avulsa 
     */
    public function addAvulsa()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Avulsa(self::AVULSA, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Emissão de avulsa, informar os dados do Fisco emitente
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setAvulsa(\Sped\Schemas\V200\TNFe\InfNFe\Avulsa $paramAvulsa)
    {
        $this->removeElementsByTagName(self::AVULSA);
        $this->appendChild($paramAvulsa, false);
        return $this;
    }

    /**
     * Retorna Identificação do Destinatário  
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function getDest()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Dest');
        return $this->getElementsByTagName(self::DEST)->item(0);
    }

    /**
     * Adiciona Identificação do Destinatário  
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Dest 
     */
    public function addDest()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Dest(self::DEST, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Destinatário  
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setDest(\Sped\Schemas\V200\TNFe\InfNFe\Dest $paramDest)
    {
        $this->removeElementsByTagName(self::DEST);
        $this->appendChild($paramDest, false);
        return $this;
    }

    /**
     * Retorna Identificação do Local de Retirada (informar apenas quando for diferente do endereço do remetente)
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function getRetirada()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal');
        return $this->getElementsByTagName(self::RETIRADA)->item(0);
    }

    /**
     * Adiciona Identificação do Local de Retirada (informar apenas quando for diferente do endereço do remetente)
     * @param string $value 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function addRetirada($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal(self::RETIRADA, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Local de Retirada (informar apenas quando for diferente do endereço do remetente)
     * @param \Sped\Schemas\V200\TLocal $paramRetirada 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setRetirada(\Sped\Schemas\V200\TLocal $paramRetirada)
    {
        $this->removeElementsByTagName(self::RETIRADA);
        $this->appendChild($paramRetirada, false);
        return $this;
    }

    /**
     * Retorna Identificação do Local de Entrega (informar apenas quando for diferente do endereço do destinatário)
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function getEntrega()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TLocal');
        return $this->getElementsByTagName(self::ENTREGA)->item(0);
    }

    /**
     * Adiciona Identificação do Local de Entrega (informar apenas quando for diferente do endereço do destinatário)
     * @param string $value 
     * @return \Sped\Schemas\V200\TLocal 
     */
    public function addEntrega($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TLocal(self::ENTREGA, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Local de Entrega (informar apenas quando for diferente do endereço do destinatário)
     * @param \Sped\Schemas\V200\TLocal $paramEntrega 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setEntrega(\Sped\Schemas\V200\TLocal $paramEntrega)
    {
        $this->removeElementsByTagName(self::ENTREGA);
        $this->appendChild($paramEntrega, false);
        return $this;
    }

    /**
     * Retorna Dados dos detalhes da NF-e
     * @param int $index 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function getDet($index)
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det');
        return $this->getElementsByTagName(self::DET)->item($index);
    }

    /**
     * Adiciona Dados dos detalhes da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det 
     */
    public function addDet()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det(self::DET, NULL, 'http://www.portalfiscal.inf.br/nfe'), false);
    }

    /**
     * Define Dados dos detalhes da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det $paramDet 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setDet(\Sped\Schemas\V200\TNFe\InfNFe\Det $paramDet)
    {
        $this->removeElementsByTagName(self::DET);
        $this->appendChild($paramDet, false);
        return $this;
    }

    /**
     * Retorna Dados dos totais da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function getTotal()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Total');
        return $this->getElementsByTagName(self::TOTAL)->item(0);
    }

    /**
     * Adiciona Dados dos totais da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Total 
     */
    public function addTotal()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Total(self::TOTAL, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados dos totais da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTotal(\Sped\Schemas\V200\TNFe\InfNFe\Total $paramTotal)
    {
        $this->removeElementsByTagName(self::TOTAL);
        $this->appendChild($paramTotal, false);
        return $this;
    }

    /**
     * Retorna Dados dos transportes da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function getTransp()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Transp');
        return $this->getElementsByTagName(self::TRANSP)->item(0);
    }

    /**
     * Adiciona Dados dos transportes da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Transp 
     */
    public function addTransp()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Transp(self::TRANSP, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados dos transportes da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setTransp(\Sped\Schemas\V200\TNFe\InfNFe\Transp $paramTransp)
    {
        $this->removeElementsByTagName(self::TRANSP);
        $this->appendChild($paramTransp, false);
        return $this;
    }

    /**
     * Retorna Dados da cobrança da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function getCobr()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cobr');
        return $this->getElementsByTagName(self::COBR)->item(0);
    }

    /**
     * Adiciona Dados da cobrança da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cobr 
     */
    public function addCobr()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cobr(self::COBR, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados da cobrança da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cobr $paramCobr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCobr(\Sped\Schemas\V200\TNFe\InfNFe\Cobr $paramCobr)
    {
        $this->removeElementsByTagName(self::COBR);
        $this->appendChild($paramCobr, false);
        return $this;
    }

    /**
     * Retorna Informações adicionais da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function getInfAdic()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\InfAdic');
        return $this->getElementsByTagName(self::INFADIC)->item(0);
    }

    /**
     * Adiciona Informações adicionais da NF-e
     * @return \Sped\Schemas\V200\TNFe\InfNFe\InfAdic 
     */
    public function addInfAdic()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\InfAdic(self::INFADIC, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informações adicionais da NF-e
     * @param \Sped\Schemas\V200\TNFe\InfNFe\InfAdic $paramInfAdic 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setInfAdic(\Sped\Schemas\V200\TNFe\InfNFe\InfAdic $paramInfAdic)
    {
        $this->removeElementsByTagName(self::INFADIC);
        $this->appendChild($paramInfAdic, false);
        return $this;
    }

    /**
     * Retorna Informações de exportação
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function getExporta()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Exporta');
        return $this->getElementsByTagName(self::EXPORTA)->item(0);
    }

    /**
     * Adiciona Informações de exportação
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Exporta 
     */
    public function addExporta()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Exporta(self::EXPORTA, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informações de exportação
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Exporta $paramExporta 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setExporta(\Sped\Schemas\V200\TNFe\InfNFe\Exporta $paramExporta)
    {
        $this->removeElementsByTagName(self::EXPORTA);
        $this->appendChild($paramExporta, false);
        return $this;
    }

    /**
     * Retorna Informações de compras  (Nota de Empenho, Pedido e Contrato)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function getCompra()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Compra');
        return $this->getElementsByTagName(self::COMPRA)->item(0);
    }

    /**
     * Adiciona Informações de compras  (Nota de Empenho, Pedido e Contrato)
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Compra 
     */
    public function addCompra()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Compra(self::COMPRA, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informações de compras  (Nota de Empenho, Pedido e Contrato)
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Compra $paramCompra 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCompra(\Sped\Schemas\V200\TNFe\InfNFe\Compra $paramCompra)
    {
        $this->removeElementsByTagName(self::COMPRA);
        $this->appendChild($paramCompra, false);
        return $this;
    }

    /**
     * Retorna Informações de registro aquisições de cana // v2.0
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function getCana()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Cana');
        return $this->getElementsByTagName(self::CANA)->item(0);
    }

    /**
     * Adiciona Informações de registro aquisições de cana // v2.0
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Cana 
     */
    public function addCana()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Cana(self::CANA, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Informações de registro aquisições de cana // v2.0
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Cana $paramCana 
     * @return \Sped\Schemas\V200\TNFe\InfNFe 
     */
    public function setCana(\Sped\Schemas\V200\TNFe\InfNFe\Cana $paramCana)
    {
        $this->removeElementsByTagName(self::CANA);
        $this->appendChild($paramCana, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao()
    {
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param type $value 
     */
    public function setVersao($value)
    {
        $this->setAttribute('versao', $value);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getId()
    {
        return $this->getAttribute('Id');
    }

    /**
     * 
     * @param type $value 
     */
    public function setId($value)
    {
        $this->setAttribute('Id', $value);
        return $this;
    }

}