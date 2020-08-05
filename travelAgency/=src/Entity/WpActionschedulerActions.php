<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpActionschedulerActions
 *
 * @ORM\Table(name="wp_actionscheduler_actions", indexes={@ORM\Index(name="scheduled_date_gmt", columns={"scheduled_date_gmt"}), @ORM\Index(name="last_attempt_gmt", columns={"last_attempt_gmt"}), @ORM\Index(name="hook", columns={"hook"}), @ORM\Index(name="args", columns={"args"}), @ORM\Index(name="claim_id", columns={"claim_id"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class WpActionschedulerActions
{
    /**
     * @var int
     *
     * @ORM\Column(name="action_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actionId;

    /**
     * @var string
     *
     * @ORM\Column(name="hook", type="string", length=191, nullable=false)
     */
    private $hook;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduled_date_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $scheduledDateGmt = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduled_date_local", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $scheduledDateLocal = '\'0000-00-00 00:00:00\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="args", type="string", length=191, nullable=true, options={"default"="NULL"})
     */
    private $args = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="schedule", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $schedule = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $groupId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="attempts", type="integer", nullable=false)
     */
    private $attempts = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_attempt_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $lastAttemptGmt = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_attempt_local", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $lastAttemptLocal = '\'0000-00-00 00:00:00\'';

    /**
     * @var int
     *
     * @ORM\Column(name="claim_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $claimId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="extended_args", type="string", length=8000, nullable=true, options={"default"="NULL"})
     */
    private $extendedArgs = 'NULL';


}
