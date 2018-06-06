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
 * @ORM\Table(name="enderecos")
 */
class Endereco
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $logradouro;

    /**
     * @ORM\Column(type="string")
     */
    private $numero;

    /**
     * @ORM\Column(type="text")
     */
    private $complemento;

    /**
     * @ORM\Column(type="text")
     */
    private $bairro;

    /**
     * @ORM\Column(type="text")
     */
    private $cidade;

    /**
     * @ORM\Column(type="string")
     */
    private $uf;

    /**
     * @ORM\Column(type="string")
     */
    private $cep;
}