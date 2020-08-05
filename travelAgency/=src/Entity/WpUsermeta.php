<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpUsermeta
 *
 * @ORM\Table(name="wp_usermeta", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpUsermeta
{
    /**
     * @var int
     *
     * @ORM\Column(name="umeta_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $umetaId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userId = '0';

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
