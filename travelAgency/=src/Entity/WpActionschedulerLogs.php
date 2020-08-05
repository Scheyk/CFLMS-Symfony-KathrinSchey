<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpActionschedulerLogs
 *
 * @ORM\Table(name="wp_actionscheduler_logs", indexes={@ORM\Index(name="action_id", columns={"action_id"}), @ORM\Index(name="log_date_gmt", columns={"log_date_gmt"})})
 * @ORM\Entity
 */
class WpActionschedulerLogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="log_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logId;

    /**
     * @var int
     *
     * @ORM\Column(name="action_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $actionId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="log_date_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $logDateGmt = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="log_date_local", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $logDateLocal = '\'0000-00-00 00:00:00\'';


}
