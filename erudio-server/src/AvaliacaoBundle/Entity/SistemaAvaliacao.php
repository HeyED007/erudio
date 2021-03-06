<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *    @author Municipio de Itajaí - Secretaria de Educação - DITEC         *
 *    @updated 30/06/2016                                                  *
 *    Pacote: Erudio                                                       *
 *                                                                         *
 *    Copyright (C) 2016 Prefeitura de Itajaí - Secretaria de Educação     *
 *                       DITEC - Diretoria de Tecnologias educacionais     *
 *                        ditec@itajai.sc.gov.br                           *
 *                                                                         *
 *    Este  programa  é  software livre, você pode redistribuí-lo e/ou     *
 *    modificá-lo sob os termos da Licença Pública Geral GNU, conforme     *
 *    publicada pela Free  Software  Foundation,  tanto  a versão 2 da     *
 *    Licença   como  (a  seu  critério)  qualquer  versão  mais  nova.    *
 *                                                                         *
 *    Este programa  é distribuído na expectativa de ser útil, mas SEM     *
 *    QUALQUER GARANTIA. Sem mesmo a garantia implícita de COMERCIALI-     *
 *    ZAÇÃO  ou  de ADEQUAÇÃO A QUALQUER PROPÓSITO EM PARTICULAR. Con-     *
 *    sulte  a  Licença  Pública  Geral  GNU para obter mais detalhes.     *
 *                                                                         *
 *    Você  deve  ter  recebido uma cópia da Licença Pública Geral GNU     *
 *    junto  com  este  programa. Se não, escreva para a Free Software     *
 *    Foundation,  Inc.,  59  Temple  Place,  Suite  330,  Boston,  MA     *
 *    02111-1307, USA.                                                     *
 *                                                                         *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

namespace AvaliacaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use CoreBundle\ORM\AbstractEntity;

/**
* @ORM\Entity(readOnly = true)
* @ORM\Table(name = "edu_sistema_avaliacao")
*/
class SistemaAvaliacao extends AbstractEntity {
    
    const TIPO_QUANTITATIVO = 'QUANTITATIVO';
    const TIPO_QUALITATIVO = 'QUALITATIVO';
    
    /** 
    * @JMS\Groups({"LIST"})
    * @ORM\Column(nullable = false) 
    */
    private $nome;
    
    /** 
    * @JMS\Groups({"LIST"})
    * @ORM\Column(name = "nome_identificacao", nullable = false) 
    */
    private $nomeIdentificacao;
    
    /** 
    * @JMS\Groups({"LIST"})
    * @ORM\Column(nullable = false) 
    */
    private $tipo;
    
    /** 
    * @JMS\Groups({"LIST"})
    *  @ORM\ManyToOne(targetEntity = "Regime") 
    */
    private $regime;
    
    /** 
    * @JMS\Groups({"LIST"})
    * @ORM\Column(name = "quantidade_medias", type = "integer", nullable = false) 
    */
    private $quantidadeMedias;
    
    /** 
    * @JMS\Groups({"LIST"})
    * @ORM\Column(type = "boolean", nullable = false) 
    */
    private $exame;
    
    function getNome() {
        return $this->nome;
    }
    
    function getTipo() {
        return $this->tipo;
    }
    
    function getNomeIdentificacao() {
        return $this->nomeIdentificacao;
    }

    function getExame() {
        return $this->exame;
    }
    
    function getQuantidadeMedias() {
        return $this->quantidadeMedias;
    }
    
    function getRegime() {
        return $this->regime;
    }
    
}
