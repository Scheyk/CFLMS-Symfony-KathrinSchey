<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPostmeta
 *
 * @ORM\Table(name="wp_postmeta", indexes={@ORM\Index(name="post_id", columns={"post_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpPostmeta
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
     * @ORM\Column(name="post_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $postId = '0';

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
