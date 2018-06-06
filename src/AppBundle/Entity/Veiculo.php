<?php
/**
 * Created by PhpStorm.
 * User: wisleyaguiar
 * Date: 06/06/18
 * Time: 11:46
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="veiculos")
 */
class Veiculo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $tipoVeiculo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $zerokm;

    /**
     * @ORM\Column(type="string")
     */
    private $placa;

    /**
     * @ORM\Column(type="string")
     */
    private $tipoMotor;

    /**
     * @ORM\Column(type="integer")
     */
    private $anoFabricacao;

    /**
     * @ORM\Column(type="integer")
     */
    private $anoModelo;

    /**
     * @ORM\Column(type="integer")
     */
    private $km;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $preco;

    /**
     * @ORM\Column(type="text")
     */
    private $observacao;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dataCadastro;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dataAlteracao;
}