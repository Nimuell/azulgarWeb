<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\MagicAccessors;

/**
 * @ORM\Entity
 */
class TblUser
{
	use MagicAccessors;
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $e_mail;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $password;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $permissions;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $machine;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $steamAuth;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $nickname;
}
