<?php

class ComposantModule extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(column="composant_id", type="integer", nullable=true)
     */
    protected $composant_id;

    /**
     *
     * @var integer
     * @Column(column="module_id", type="integer", nullable=true)
     */
    protected $module_id;

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
     * Method to set the value of field module_id
     *
     * @param integer $module_id
     * @return $this
     */
    public function setModuleId($module_id)
    {
        $this->module_id = $module_id;

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
     * Returns the value of field composant_id
     *
     * @return integer
     */
    public function getComposantId()
    {
        return $this->composant_id;
    }

    /**
     * Returns the value of field module_id
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("testos");
        $this->setSource("composant_module");
        $this->belongsTo('composant_id', '\Composant', 'id', ['alias' => 'Composant']);
        $this->belongsTo('module_id', '\Module', 'id', ['alias' => 'Module']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ComposantModule[]|ComposantModule|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ComposantModule|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
