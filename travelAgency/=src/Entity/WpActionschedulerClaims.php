<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpActionschedulerClaims
 *
 * @ORM\Table(name="wp_actionscheduler_claims", indexes={@ORM\Index(name="date_created_gmt", columns={"date_created_gmt"})})
 * @ORM\Entity
 */
class WpActionschedulerClaims
{
    /**
     * @var int
     *
     * @ORM\Column(name="claim_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claimId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $dateCreatedGmt = '\'0000-00-00 00:00:00\'';


}
