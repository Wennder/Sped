<?php
namespace Sped\Schemas\V200\TRetConsReciNFe;

/**
 * Código da Mensagem (v2.0) <br />
 * alterado para tamanho variavel 1-4. (NT2011/004)
 * @name CMsg
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CMsg extends \Sped\Components\Xml\Element  {
    const NAME = 'cMsg';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}