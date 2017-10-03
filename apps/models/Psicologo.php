<?php
namespace Modules\Models;
class Psicologo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=45, nullable=false)
     */
    protected $id_psicologo;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $nombre;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $apellidoP;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $apellidoM;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $especialidad;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $num_celular;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=true)
     */
    protected $image_cedula;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $status;

    /**
     * Method to set the value of field id_psicologo
     *
     * @param string $id_psicologo
     * @return $this
     */
    public function setIdPsicologo($id_psicologo)
    {
        $this->id_psicologo = $id_psicologo;

        return $this;
    }

    /**
     * Method to set the value of field nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Method to set the value of field apellidoP
     *
     * @param string $apellidoP
     * @return $this
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    /**
     * Method to set the value of field apellidoM
     *
     * @param string $apellidoM
     * @return $this
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;

        return $this;
    }

    /**
     * Method to set the value of field especialidad
     *
     * @param string $especialidad
     * @return $this
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Method to set the value of field num_celular
     *
     * @param string $num_celular
     * @return $this
     */
    public function setNumCelular($num_celular)
    {
        $this->num_celular = $num_celular;

        return $this;
    }

    /**
     * Method to set the value of field image_cedula
     *
     * @param string $image_cedula
     * @return $this
     */
    public function setImageCedula($image_cedula)
    {
        $this->image_cedula = $image_cedula;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field id_psicologo
     *
     * @return string
     */
    public function getIdPsicologo()
    {
        return $this->id_psicologo;
    }

    /**
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field apellidoP
     *
     * @return string
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * Returns the value of field apellidoM
     *
     * @return string
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * Returns the value of field especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Returns the value of field num_celular
     *
     * @return string
     */
    public function getNumCelular()
    {
        return $this->num_celular;
    }

    /**
     * Returns the value of field image_cedula
     *
     * @return string
     */
    public function getImageCedula()
    {
        return $this->image_cedula;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ayuda_mexico");
        $this->setSource("psicologo");
        $this->hasMany('id_psicologo', 'Cita', 'psicologo_id_psicologo', ['alias' => 'Cita']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'psicologo';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Psicologo[]|Psicologo|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Psicologo|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
