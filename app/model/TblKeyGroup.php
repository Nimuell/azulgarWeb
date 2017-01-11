<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\MagicAccessors;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class TblKeyGroup
{
	use MagicAccessors;
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $name;

	/**
	 * @ORM\Column(name="created", type="datetime")
	 * @ORM\GeneratedValue
	 */
	protected $created;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $createdBy;


	/**
	 * Triggered on insert

	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->created = new \DateTime("now");
	}

	/**
	 * Triggered on update

	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->updated = new \DateTime("now");
	}

	/**
	 * Triggered on update

	 * @ORM\PreRemove
	 */
	public function onPreRemove()
	{
		$this->deleted = new \DateTime("now");
	}
}
