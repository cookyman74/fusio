<?php

namespace Fusio\Entity;

/**
 * @Entity
 * @Table(name="fusio_view")
 */
class View
{
	const TYPE_SQL_QUERY       = 'sql-query';
	const TYPE_JSON_RESPONSE   = 'json-response';
	const TYPE_STATIC_RESPONSE = 'static-response';

	/**
	 * @Id 
	 * @GeneratedValue 
	 * @Column(type="integer")
	 * @var integer
	 */
	protected $id;

	/**
	 * @ManyToOne(targetEntity="Fusio\Entity\Model")
	 */
	protected $model;

	/**
	 * @Column(type="string")
	 * @var string
	 */
	protected $type;

	/**
	 * @Column(type="string")
	 * @var string
	 */
	protected $name;

	/**
	 * @Column(type="string")
	 * @var string
	 */
	protected $param;

	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getId()
	{
		return $this->id;
	}

	public function setType($type)
	{
		$this->type = $type;
	}
	
	public function getType()
	{
		return $this->type;
	}

	public function setParam($param)
	{
		$this->param = $param;
	}
	
	public function getParam()
	{
		return $this->param;
	}

	public function getModel()
	{
		return $this->model;
	}
}