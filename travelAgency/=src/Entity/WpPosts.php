<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpPosts
 *
 * @ORM\Table(name="wp_posts", indexes={@ORM\Index(name="post_parent", columns={"post_parent"}), @ORM\Index(name="post_name", columns={"post_name"}), @ORM\Index(name="post_author", columns={"post_author"}), @ORM\Index(name="type_status_date", columns={"post_type", "post_status", "post_date", "ID"})})
 * @ORM\Entity
 */
class WpPosts
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="post_author", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $postAuthor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $postDate = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $postDateGmt = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text", length=0, nullable=false)
     */
    private $postContent;

    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="text", length=65535, nullable=false)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_excerpt", type="text", length=65535, nullable=false)
     */
    private $postExcerpt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_status", type="string", length=20, nullable=false, options={"default"="'publish'"})
     */
    private $postStatus = '\'publish\'';

    /**
     * @var string
     *
     * @ORM\Column(name="comment_status", type="string", length=20, nullable=false, options={"default"="'open'"})
     */
    private $commentStatus = '\'open\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ping_status", type="string", length=20, nullable=false, options={"default"="'open'"})
     */
    private $pingStatus = '\'open\'';

    /**
     * @var string
     *
     * @ORM\Column(name="post_password", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $postPassword = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="post_name", type="string", length=200, nullable=false, options={"default"="''"})
     */
    private $postName = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="to_ping", type="text", length=65535, nullable=false)
     */
    private $toPing;

    /**
     * @var string
     *
     * @ORM\Column(name="pinged", type="text", length=65535, nullable=false)
     */
    private $pinged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $postModified = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified_gmt", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $postModifiedGmt = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="post_content_filtered", type="text", length=0, nullable=false)
     */
    private $postContentFiltered;

    /**
     * @var int
     *
     * @ORM\Column(name="post_parent", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $postParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $guid = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="menu_order", type="integer", nullable=false)
     */
    private $menuOrder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=20, nullable=false, options={"default"="'post'"})
     */
    private $postType = '\'post\'';

    /**
     * @var string
     *
     * @ORM\Column(name="post_mime_type", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $postMimeType = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="comment_count", type="bigint", nullable=false)
     */
    private $commentCount = '0';


}
