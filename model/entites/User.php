<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity;
 * @ORM\Table(name="users")
 */
class User extends Entity
{
    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $userName;
    /**
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateInscription;
    /**
     * @ORM\Column(type="string")
     */
    private $level;

// GETTER
    public function userName()
    {
        return $this->userName;
    }

    public function password()
    {
        return $this->password;
    }

    public function email()
    {
        return $this->email;
    }

    public function dateInscription()
    {
        return $this->dateInscription;
    }

    public function level()
    {
        return $this->level;
    }
// SETTER
    public function setUserName(int $UserName)
    {
        $this->userName = $UserName;
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    public function setemail(int $email)
    {
        $this->email = $email;
    }

    public function setdateInscription(int $dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    public function setlevel(int $level)
    {
        $this->level = $level;
    }
}
