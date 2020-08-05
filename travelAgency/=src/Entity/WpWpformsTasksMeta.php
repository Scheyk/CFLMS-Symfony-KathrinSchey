<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWpformsTasksMeta
 *
 * @ORM\Table(name="wp_wpforms_tasks_meta")
 * @ORM\Entity
 */
class WpWpformsTasksMeta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;


}
