<?php

namespace App\Presenters;

use App\dbHandler;
use App\steamAuth;
use App\TblUser;
use App\TblKey;
use App\TblKeyGroup;
use Doctrine\ORM\EntityManager;
use Nette,
	App\Model;
use Nette\Object;
use Nette\Utils\Strings;
use Nette\Utils\Random;
use Tracy\Debugger;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	/**
	 * @inject
	 * @var \Kdyby\Doctrine\EntityManager
	 */
	public $EntityManager;

	public $dbHandler;
	public $steamAuth;

	/**
	 * HomepagePresenter constructor.
	 * @param \App\dbHandler $dbHandler
	 */
	public function __construct(\App\dbHandler $dbHandler, \App\steamAuth $steamAuth)
	{
		parent::__construct();
		/** @var TYPE_NAME $this */
		$this->dbHandler = $dbHandler;
		$this->steamAuth = $steamAuth;
	}

	/**
	 *
	 */
	public function renderDefault()
	{

		//$this->generateKeys(20,"Sept 2017 Giveaway - Doupe.cz"); // generování cd klíčů
		/*
		$dao = $this->EntityManager->getRepository(TblKey::class);
		$user = $this->EntityManager->getRepository(TblUser::class);
		$group = $this->EntityManager->getRepository(TblKeyGroup::class);
		$a = $dao->findOneBy(array('used_by' => 2));
		$kgn = $group->findOneBy(['id' => $a->keyGroup]);

		$this->template->tbl_key = $dao->findAll();
		$this->template->tbl_user = $user->findAll();
		*/
		$this->template->link = steamAuth::genUrl();

		//Debugger::barDump($this->dbHandler->userAuthorization());
	}


	/**
	 * @param $Number
	 * @param $Name
	 * @return int
	 */
	public function generateKeys($Number,$Name){
		$group = new TblKeyGroup();
		$group->createdBy = 1; // napojit na aktuáně přihlášeného uživatele!
		$group->name = $Name;
		$this->EntityManager->persist($group);
		$this->EntityManager->flush();
		$lastId = $group->getId();

		for($a = 0; $a < $Number; $a++){
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
