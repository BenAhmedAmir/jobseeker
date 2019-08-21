<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

/**
 * CurriculumV
 *
 * @ORM\Table(name="curriculum_v")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CurriculumVRepository")
 */
class CurriculumV
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */

    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable =true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="AdressUrl", type="string", length=255, nullable= true)
     */
    private $adressUrl;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CurriculumV
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return CurriculumV
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CurriculumV
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adressUrl
     *
     * @param string $adressUrl
     *
     * @return CurriculumV
     */
    public function setAdressUrl($adressUrl)
    {
        $this->adressUrl = $adressUrl;

        return $this;
    }

    /**
     * Get adressUrl
     *
     * @return string
     */
    public function getAdressUrl()
    {
        return $this->adressUrl;
    }
}

