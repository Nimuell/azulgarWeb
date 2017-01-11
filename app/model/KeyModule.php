<?php

namespace App;

use App\Presenters\BasePresenter;
use Doctrine\ORM\EntityManager;

class KeyModule extends BasePresenter
{
	private $Number;
	private $Name;
	/**
	 * @inject
	 * @var \Kdyby\Doctrine\EntityManager
	 */
	public $EntityManager;

	/**
	 * @param $Number
	 * @param $Name
	 * @return int
	 */
	public function generateKeys($Number,$Name){
		$group = new TblKeyGroup();
		$group->createdBy = 1; // napojit na aktuáně přihlášeného uživatele!
		$group->name = $this->Name;
		$this->EntityManager->persist($group);
		$this->EntityManager->flush();
		$lastId = $group->getId();

		for($a = 0; $a < $this->Number; $a++){
			$key = new TblKey();
			$c = Random::generate(4)."-".Random::generate(4)."-".Random::generate(4)."-".Random::generate(4);
			$key->t_key = Strings::upper($c);
			$key->keyGroup = $lastId;
			$key->used_by = 0;
			$this->EntityManager->persist($key);
		}
		$this->EntityManager->flush();
		return 1;
	}
}
