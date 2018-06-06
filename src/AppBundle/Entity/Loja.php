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
 * @ORM\Table(name="lojas")
 */
class Loja
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
    private $nomeFantasia;

    /**
     * @ORM\Column(type="string")
     */
    private $cnpj;
}