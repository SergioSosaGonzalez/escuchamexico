<?php
namespace Modules\Models;
class Paciente extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=45, nullable=false)
     */
    protected $id_paciente;

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
     * @Column(type="string", nullable=true)
     */
    protected $fecha_nac;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $num_celular;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $estado;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    protected $sexo;

    /**
     * Method to set the value of field id_paciente
     *
     * @param string $id_paciente
     * @return $this
     */
    public function setIdPaciente($id_paciente)
    {
        $this->id_paciente = $id_paciente;

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
     * Method to set the value of field fecha_nac
     *
     * @param string $fecha_nac
     * @return $this
     */
    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;

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
     * Method to set the value of field estado
     *
     * @param string $estado
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Method to set the value of field sexo
     *
     * @param string $sexo
     * @return $this
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Returns the value of field id_paciente
     *
     * @return string
     */
    public function getIdPaciente()
    {
        return $this->id_paciente;
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
     * Returns the value of field fecha_nac
     *
     * @return string
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
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
     * Returns the value of field estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Returns the value of field sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ayuda_mexico");
        $this->setSource("paciente");
        $this->hasMany('id_paciente', 'Cita', 'paciente_id_paciente', ['alias' => 'Cita']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'paciente';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Paciente[]|Paciente|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Paciente|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
