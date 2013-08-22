<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity
 */
class Account
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=32, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registered", type="datetime", nullable=false)
     */
    private $registered;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", nullable=true)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_leader", type="boolean", nullable=false)
     */
    private $isLeader;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Acme\DemoBundle\Entity\Photo
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Photo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="photoLike_id", referencedColumnName="id")
     * })
     */
    private $photolike;

    /**
     * @var \Acme\DemoBundle\Entity\Mygroup
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Mygroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Acme\DemoBundle\Entity\PhotoComments
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\PhotoComments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="photoCommentLike_id", referencedColumnName="id")
     * })
     */
    private $photocommentlike;

    /**
     * @var \Acme\DemoBundle\Entity\Account
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="following_id", referencedColumnName="id")
     * })
     */
    private $following;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\DemoBundle\Entity\Role", inversedBy="account")
     * @ORM\JoinTable(name="account_role",
     *   joinColumns={
     *     @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     *   }
     * )
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Acme\DemoBundle\Entity\CalendarEvents", inversedBy="account")
     * @ORM\JoinTable(name="account_calendarevent",
     *   joinColumns={
     *     @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="calendarevent_id", referencedColumnName="id")
     *   }
     * )
     */
    private $calendarevent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->calendarevent = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set username
     *
     * @param string $username
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Account
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return Account
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    
        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Account
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    
        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set registered
     *
     * @param \DateTime $registered
     * @return Account
     */
    public function setRegistered($registered)
    {
        $this->registered = $registered;
    
        return $this;
    }

    /**
     * Get registered
     *
     * @return \DateTime 
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Account
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return Account
     */
    public function setAbout($about)
    {
        $this->about = $about;
    
        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Account
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Account
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set isLeader
     *
     * @param boolean $isLeader
     * @return Account
     */
    public function setIsLeader($isLeader)
    {
        $this->isLeader = $isLeader;
    
        return $this;
    }

    /**
     * Get isLeader
     *
     * @return boolean 
     */
    public function getIsLeader()
    {
        return $this->isLeader;
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
     * Set photolike
     *
     * @param \Acme\DemoBundle\Entity\Photo $photolike
     * @return Account
     */
    public function setPhotolike(\Acme\DemoBundle\Entity\Photo $photolike = null)
    {
        $this->photolike = $photolike;
    
        return $this;
    }

    /**
     * Get photolike
     *
     * @return \Acme\DemoBundle\Entity\Photo 
     */
    public function getPhotolike()
    {
        return $this->photolike;
    }

    /**
     * Set group
     *
     * @param \Acme\DemoBundle\Entity\Mygroup $group
     * @return Account
     */
    public function setGroup(\Acme\DemoBundle\Entity\Mygroup $group = null)
    {
        $this->group = $group;
    
        return $this;
    }

    /**
     * Get group
     *
     * @return \Acme\DemoBundle\Entity\Mygroup 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set photocommentlike
     *
     * @param \Acme\DemoBundle\Entity\PhotoComments $photocommentlike
     * @return Account
     */
    public function setPhotocommentlike(\Acme\DemoBundle\Entity\PhotoComments $photocommentlike = null)
    {
        $this->photocommentlike = $photocommentlike;
    
        return $this;
    }

    /**
     * Get photocommentlike
     *
     * @return \Acme\DemoBundle\Entity\PhotoComments 
     */
    public function getPhotocommentlike()
    {
        return $this->photocommentlike;
    }

    /**
     * Set following
     *
     * @param \Acme\DemoBundle\Entity\Account $following
     * @return Account
     */
    public function setFollowing(\Acme\DemoBundle\Entity\Account $following = null)
    {
        $this->following = $following;
    
        return $this;
    }

    /**
     * Get following
     *
     * @return \Acme\DemoBundle\Entity\Account 
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * Add role
     *
     * @param \Acme\DemoBundle\Entity\Role $role
     * @return Account
     */
    public function addRole(\Acme\DemoBundle\Entity\Role $role)
    {
        $this->role[] = $role;
    
        return $this;
    }

    /**
     * Remove role
     *
     * @param \Acme\DemoBundle\Entity\Role $role
     */
    public function removeRole(\Acme\DemoBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add calendarevent
     *
     * @param \Acme\DemoBundle\Entity\CalendarEvents $calendarevent
     * @return Account
     */
    public function addCalendarevent(\Acme\DemoBundle\Entity\CalendarEvents $calendarevent)
    {
        $this->calendarevent[] = $calendarevent;
    
        return $this;
    }

    /**
     * Remove calendarevent
     *
     * @param \Acme\DemoBundle\Entity\CalendarEvents $calendarevent
     */
    public function removeCalendarevent(\Acme\DemoBundle\Entity\CalendarEvents $calendarevent)
    {
        $this->calendarevent->removeElement($calendarevent);
    }

    /**
     * Get calendarevent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCalendarevent()
    {
        return $this->calendarevent;
    }
}