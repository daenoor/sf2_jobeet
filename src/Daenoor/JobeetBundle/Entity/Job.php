<?php

namespace Daenoor\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Job
 * @package Daenoor\JobeetBundle\Entity
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Job
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $company;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $logo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $position;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $location;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(type="text", name="how_to_apply")
     */
    protected $howToApply;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $token;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", name="is_public")
     */
    protected $isPublic = true;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", name="is_activated")
     */
    protected $isActivated = false;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="expires_at")
     */
    protected $expiresAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="updated_at", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="jobs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;
} 
