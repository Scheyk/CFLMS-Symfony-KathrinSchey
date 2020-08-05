<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpOptions
 *
 * @ORM\Table(name="wp_options", uniqueConstraints={@ORM\UniqueConstraint(name="option_name", columns={"option_name"})}, indexes={@ORM\Index(name="autoload", columns={"autoload"})})
 * @ORM\Entity
 */
class WpOptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="option_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="option_name", type="string", length=191, nullable=false, options={"default"="''"})
     */
    private $optionName = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="option_value", type="text", length=0, nullable=false)
     */
    private $optionValue;

    /**
     * @var string
     *
     * @ORM\Column(name="autoload", type="string", length=20, nullable=false, options={"default"="'yes'"})
     */
    private $autoload = '\'yes\'';


}
