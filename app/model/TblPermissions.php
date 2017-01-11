<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\MagicAccessors;

/**
 * @ORM\Entity
 */
class TblPermissions
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
	 * @ORM\Column(type="integer")
	 */
	protected $user;
	// může pouze do uživatelské sekce webu

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $moderator;
	// může upravovat, vytvářet a mazat obsah na webu

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $keyMaster;
	// může generovat, spravovat, přidělovat a mazat cd klíče a měmit jejich přiřazení k uživatelům

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $accountant;
	// spravuje uživateslké účty

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $admin;
	// má přístup k jádru celého webu, může měnit configy a core soubory

}
