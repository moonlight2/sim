<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvents
 *
 * @ORM\Table(name="calendar_events")
 * @ORM\Entity
 */
class CalendarEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=false)
     */
    private $end;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_shown", type="boolean", nullable=false)
     */
    private $isShown;

    /**
     * @var boolean
     *
     * @ORM\Column(name="all_day", type="boolean", nullable=false)
     */
    private $allDay;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_shared", type="boolean", nullable=false)
     */
    private $isShared;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\DemoBundle\Entity\Account", mappedBy="calendarevent")
     */
    private $account;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->account = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set title
     *
     * @param string $title
     * @return CalendarEvents
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
     * Set text
     *
     * @param string $text
     * @return CalendarEvents
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return CalendarEvents
     */
    public function setStart($start)
    {
        $this->start = $start;
    
        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return CalendarEvents
     */
    public function setEnd($end)
    {
        $this->end = $end;
    
        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set isShown
     *
     * @param boolean $isShown
     * @return CalendarEvents
     */
    public function setIsShown($isShown)
    {
        $this->isShown = $isShown;
    
        return $this;
    }

    /**
     * Get isShown
     *
     * @return boolean 
     */
    public function getIsShown()
    {
        return $this->isShown;
    }

    /**
     * Set allDay
     *
     * @param boolean $allDay
     * @return CalendarEvents
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;
    
        return $this;
    }

    /**
     * Get allDay
     *
     * @return boolean 
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return CalendarEvents
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set isShared
     *
     * @param boolean $isShared
     * @return CalendarEvents
     */
    public function setIsShared($isShared)
    {
        $this->isShared = $isShared;
    
        return $this;
    }

    /**
     * Get isShared
     *
     * @return boolean 
     */
    public function getIsShared()
    {
        return $this->isShared;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add account
     *
     * @param \Acme\DemoBundle\Entity\Account $account
     * @return CalendarEvents
     */
    public function addAccount(\Acme\DemoBundle\Entity\Account $account)
    {
        $this->account[] = $account;
    
        return $this;
    }

    /**
     * Remove account
     *
     * @param \Acme\DemoBundle\Entity\Account $account
     */
    public function removeAccount(\Acme\DemoBundle\Entity\Account $account)
    {
        $this->account->removeElement($account);
    }

    /**
     * Get account
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccount()
    {
        return $this->account;
    }
}