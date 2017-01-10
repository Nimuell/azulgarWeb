<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\MagicAccessors;

/**
 * @ORM\Entity
 */
class TblKey
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
	protected $t_key;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $used_by;
}
