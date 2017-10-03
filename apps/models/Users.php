<?php
namespace Modules\Models;
class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=true)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=true)
     */
    protected $ape_paterno;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=true)
     */
    protected $ape_materno;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=true)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $rol;

    /**
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field ape_paterno
     *
     * @param string $ape_paterno
     * @return $this
     */
    public function setApePaterno($ape_paterno)
    {
        $this->ape_paterno = $ape_paterno;

        return $this;
    }

    /**
     * Method to set the value of field ape_materno
     *
     * @param string $ape_materno
     * @return $this
     */
    public function setApeMaterno($ape_materno)
    {
        $this->ape_materno = $ape_materno;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field rol
     *
     * @param string $rol
     * @return $this
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field ape_paterno
     *
     * @return string
     */
    public function getApePaterno()
    {
        return $this->ape_paterno;
    }

    /**
     * Returns the value of field ape_materno
     *
     * @return string
     */
    public function getApeMaterno()
    {
        return $this->ape_materno;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ayuda_mexico");
        $this->setSource("users");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
