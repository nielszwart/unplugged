<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="account")
 * @ORM\Entity()
 */
class Account
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_confirmed;

    /**
     * @ORM\Column(type="string")
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $last_name_preposition;

    /**
     * @ORM\Column(type="string")
     */
    private $last_name;

    /**
     * @ORM\Column(type="date")
     */
    private $date_of_birth;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $city_of_birth;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone_number;

    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    public function __construct(){
        $this->date_created = new \DateTime();
    }

    /**
     * $param array $values
     */
    public function edit($values)
    {
        if (isset($values['first_name'])) {
            $this->setFirstName($values['first_name']);
        }
        if (isset($values['last_name_preposition'])) {
            $this->setLastNamePreposition($values['last_name_preposition']);
        }
        if (isset($values['last_name'])) {
            $this->setLastName($values['last_name']);
        }
        if (isset($values['date_of_birth'])) {
            $this->setDateOfBirth(new \DateTime($values['date_of_birth']));
        }
        if (isset($values['gender'])) {
            $this->setGender($values['gender']);
        }
        if (isset($values['city_of_birth'])) {
            $this->setCityOfBirth($values['city_of_birth']);
        }
        if (isset($values['phone_number'])) {
            $this->setPhoneNumber($values['phone_number']);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        if (!is_null($this->date_created)) {
            return $this->date_created->format('Y-m-d H:i:s');
        }
        return $this->date_created;
    }

    /**
     * @param mixed $date_created
     */
    public function setDateCreated($date_created)
    {
        $this->date_created = $date_created;
    }

    /**
     * @return mixed
     */
    public function getDateConfirmed()
    {
        if (!is_null($this->date_confirmed)) {
            return $this->date_confirmed->format('Y-m-d H:i:s');
        }
        return $this->date_confirmed;
    }

    /**
     * @param mixed $date_confirmed
     */
    public function setDateConfirmed($date_confirmed)
    {
        $this->date_confirmed = $date_confirmed;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastNamePreposition()
    {
        return $this->last_name_preposition;
    }

    /**
     * @param mixed $last_name_preposition
     */
    public function setLastNamePreposition($last_name_preposition)
    {
        $this->last_name_preposition = $last_name_preposition;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        if (!is_null($this->date_of_birth)) {
            return $this->date_of_birth->format('Y-m-d');
        }
        return $this->date_of_birth;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
    }

    /**
     * @return mixed
     */
    public function getCityOfBirth()
    {
        return $this->city_of_birth;
    }

    /**
     * @param mixed $city_of_birth
     */
    public function setCityOfBirth($city_of_birth)
    {
        $this->city_of_birth = $city_of_birth;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function getFullName()
    {
        $full_name = $this->getFirstName();
        $full_name .= !empty($this->getLastNamePreposition()) ? " " . $this->getLastNamePreposition() : "";
        $full_name .= " " . $this->getLastName();
        return $full_name;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }
}