<?php

class ModuleApplication extends \Phalcon\Mvc\Model
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
     * @Column(column="module_id", type="integer", nullable=true)
     */
    protected $module_id;

    /**
     *
     * @var integer
     * @Column(column="application_id", type="integer", nullable=true)
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
     * Returns the value of field module_id
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->module_id;
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
        $this->setSource("module_application");
        $this->belongsTo('application_id', '\Application', 'id', ['alias' => 'Application']);
        $this->belongsTo('module_id', '\Module', 'id', ['alias' => 'Module']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModuleApplication[]|ModuleApplication|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ModuleApplication|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
