<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermmeta
 *
 * @ORM\Table(name="wp_termmeta", indexes={@ORM\Index(name="term_id", columns={"term_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpTermmeta
{
    /**
     * @var int
     *
     * @ORM\Column(name="meta_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;

    /**
     * @var int
     *
     * @ORM\Column(name="term_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $termId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $metaKey = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_value", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $metaValue = 'NULL';


}
