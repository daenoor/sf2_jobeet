<?php

namespace Daenoor\JobeetBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Category
 * @package Daenoor\JobeetBundle\Entity
 *
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
     */
    protected $jobs;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Affiliate", mappedBy="category")
     */
    protected $affiliates;

    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
    }
} 
