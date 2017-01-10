<?php

namespace App\Presenters;

use App\TblUser;
use App\TblKey;
use Doctrine\ORM\EntityManager;
use Nette,
	App\Model;
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

	public function renderDefault()
	{
		/*
		for($a = 1; $a == 20; $a++){
			$key = new TblKey();
			for($b = 1; $b == 10; $b++){
				$c = Random::generate(4)."-".Random::generate(4)."-".Random::generate(4)."-".Random::generate(4);
				$key->t_key = Strings::upper($c);
				$key->used_by = 0;
				$this->EntityManager->persist($key);
			}
			$this->EntityManager->flush();
			$this->EntityManager-clear();
		}
		*/

		$dao = $this->EntityManager->getRepository(TblKey::class);
		$user = $this->EntityManager->getRepository(TblUser::class);
		$this->template->tbl_key = $dao->findAll();
		$this->template->tbl_user = $user->findAll();
	}

}
