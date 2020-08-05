<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpLinks
 *
 * @ORM\Table(name="wp_links", indexes={@ORM\Index(name="link_visible", columns={"link_visible"})})
 * @ORM\Entity
 */
class WpLinks
{
    /**
     * @var int
     *
     * @ORM\Column(name="link_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

    /**
     * @var string
     *
     * @ORM\Column(name="link_url", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkUrl = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_name", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkName = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_image", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkImage = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_target", type="string", length=25, nullable=false, options={"default"="''"})
     */
    private $linkTarget = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_description", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkDescription = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_visible", type="string", length=20, nullable=false, options={"default"="'Y'"})
     */
    private $linkVisible = '\'Y\'';

    /**
     * @var int
     *
     * @ORM\Column(name="link_owner", type="bigint", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $linkOwner = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="link_rating", type="integer", nullable=false)
     */
    private $linkRating = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="link_updated", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $linkUpdated = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_rel", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkRel = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="link_notes", type="text", length=16777215, nullable=false)
     */
    private $linkNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rss", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $linkRss = '\'\'';


}
