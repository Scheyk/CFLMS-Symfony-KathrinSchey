<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpTermRelationships
 *
 * @ORM\Table(name="wp_term_relationships", indexes={@ORM\Index(name="term_taxonomy_id", columns={"term_taxonomy_id"})})
 * @ORM\Entity
 */
class WpTermRelationships
{
    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objectId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $termTaxonomyId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="term_order", type="integer", nullable=false)
     */
    private $termOrder = '0';


}
