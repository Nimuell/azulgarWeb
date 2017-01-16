<?php
/**
 * Created by PhpStorm.
 * User: ferstm
 * Date: 16. 1. 2017
 * Time: 15:42
 */

namespace App;

use	App\Model;
use App\TblUser;
use App\TblKey;
use App\TblKeyGroup;
use Doctrine\ORM\EntityManager;
use Nette;
use Tracy\Debugger;

class dbHandler
{
	/**
	 * @inject
	 * @var \Kdyby\Doctrine\EntityManager
	 */
	public $EntityManager;

	/**
	 * @return mixed|null|object
	 */
	public function userAuthorization(){
		$usrAuth = $this->EntityManager->getRepository(TblUser::class)->findOneBy(['steamAuth' => '6196FEF67F3F39D590F4335BAD8585D3']);
		return $usrAuth;
	}


}
