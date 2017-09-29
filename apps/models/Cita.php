<?php
namespace Modules\Models;
class Cita extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=45, nullable=false)
     */
    protected $id_cita;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $fecha;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $psicologo_id_psicologo;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $paciente_id_paciente;

    /**
     * Method to set the value of field id_cita
     *
     * @param string $id_cita
     * @return $this
     */
    public function setIdCita($id_cita)
    {
        $this->id_cita = $id_cita;

        return $this;
    }

    /**
     * Method to set the value of field fecha
     *
     * @param string $fecha
     * @return $this
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Method to set the value of field psicologo_id_psicologo
     *
     * @param string $psicologo_id_psicologo
     * @return $this
     */
    public function setPsicologoIdPsicologo($psicologo_id_psicologo)
    {
        $this->psicologo_id_psicologo = $psicologo_id_psicologo;

        return $this;
    }

    /**
     * Method to set the value of field paciente_id_paciente
     *
     * @param string $paciente_id_paciente
     * @return $this
     */
    public function setPacienteIdPaciente($paciente_id_paciente)
    {
        $this->paciente_id_paciente = $paciente_id_paciente;

        return $this;
    }

    /**
     * Returns the value of field id_cita
     *
     * @return string
     */
    public function getIdCita()
    {
        return $this->id_cita;
    }

    /**
     * Returns the value of field fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Returns the value of field psicologo_id_psicologo
     *
     * @return string
     */
    public function getPsicologoIdPsicologo()
    {
        return $this->psicologo_id_psicologo;
    }

    /**
     * Returns the value of field paciente_id_paciente
     *
     * @return string
     */
    public function getPacienteIdPaciente()
    {
        return $this->paciente_id_paciente;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ayuda_mexico");
        $this->setSource("cita");
        $this->belongsTo('paciente_id_paciente', '\Paciente', 'id_paciente', ['alias' => 'Paciente']);
        $this->belongsTo('psicologo_id_psicologo', '\Psicologo', 'id_psicologo', ['alias' => 'Psicologo']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cita';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cita[]|Cita|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cita|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
