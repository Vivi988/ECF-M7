<?php

class ChefDeProjet extends \Phalcon\Mvc\Model
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
     * @Column(column="boost_production", type="integer", nullable=false)
     */
    protected $boost_production;

    /**
     *
     * @var integer
     * @Column(column="collaborateur_id", type="integer", nullable=false)
     */
    protected $collaborateur_id;

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
     * Method to set the value of field boost_production
     *
     * @param integer $boost_production
     * @return $this
     */
    public function setBoostProduction($boost_production)
    {
        $this->boost_production = $boost_production;

        return $this;
    }

    /**
     * Method to set the value of field collaborateur_id
     *
     * @param integer $collaborateur_id
     * @return $this
     */
    public function setCollaborateurId($collaborateur_id)
    {
        $this->collaborateur_id = $collaborateur_id;

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
     * Returns the value of field boost_production
     *
     * @return integer
     */
    public function getBoostProduction()
    {
        return $this->boost_production;
    }

    /**
     * Returns the value of field collaborateur_id
     *
     * @return integer
     */
    public function getCollaborateurId()
    {
        return $this->collaborateur_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("testos");
        $this->setSource("chef_de_projet");
        $this->hasMany('id', 'Equipe', 'id_chef_de_projet', ['alias' => 'Equipe']);
        $this->hasMany('id', 'Projet', 'id_chef_de_projet', ['alias' => 'Projet']);
        $this->belongsTo('collaborateur_id', '\Collaborateur', 'id', ['alias' => 'Collaborateur']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ChefDeProjet[]|ChefDeProjet|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ChefDeProjet|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
