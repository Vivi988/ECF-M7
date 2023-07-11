<?php

class Module extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="libelle", type="string", length=50, nullable=false)
     */
    protected $libelle;

    /**
     *
     * @var integer
     * @Column(column="composant_id", type="integer", nullable=false)
     */
    protected $composant_id;

    /**
     *
     * @var integer
     * @Column(column="application_id", type="integer", nullable=false)
     */
    protected $application_id;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field libelle
     *
     * @param string $libelle
     * @return $this
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Method to set the value of field composant_id
     *
     * @param integer $composant_id
     * @return $this
     */
    public function setComposantId($composant_id)
    {
        $this->composant_id = $composant_id;

        return $this;
    }

    /**
     * Method to set the value of field application_id
     *
     * @param integer $application_id
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->application_id = $application_id;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Returns the value of field composant_id
     *
     * @return integer
     */
    public function getComposantId()
    {
        return $this->composant_id;
    }

    /**
     * Returns the value of field application_id
     *
     * @return integer
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("testos");
        $this->setSource("module");
        $this->hasMany('id', 'Composant', 'module_id', ['alias' => 'Composant']);
        $this->hasMany('id', 'ComposantModule', 'module_id', ['alias' => 'ComposantModule']);
        $this->hasMany('id', 'ModuleApplication', 'module_id', ['alias' => 'ModuleApplication']);
        $this->hasMany('id', 'Projet', 'id_module', ['alias' => 'Projet']);
        $this->belongsTo('application_id', '\Application', 'id', ['alias' => 'Application']);
        $this->belongsTo('composant_id', '\Composant', 'id', ['alias' => 'Composant']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Module[]|Module|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Module|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
