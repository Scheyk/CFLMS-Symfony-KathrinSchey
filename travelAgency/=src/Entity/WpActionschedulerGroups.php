<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpActionschedulerGroups
 *
 * @ORM\Table(name="wp_actionscheduler_groups", indexes={@ORM\Index(name="slug", columns={"slug"})})
 * @ORM\Entity
 */
class WpActionschedulerGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;


}
