<?php
/**
 * @Purpose:
 * @CreateDate: 2019/7/12 15:45
 * @Author:shr26207 sunhaoran@offcn.com
 */

namespace PHPSolr\config;
use PHPSolr\component\Singleton;

class Config
{
	use Singleton;
	private $host = '127.0.0.1';
	private $port = '8983';
	private $auth;
	private $password;

	public function setConfig($config){
		return $this;
	}

	public function setHost($host){

	}

	public function setPort(){

	}
}

