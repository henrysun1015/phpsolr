<?php
/**
 * @Purpose:
 * @CreateDate: 2019/7/12 15:45
 * @Author:shr26207 sunhaoran@offcn.com
 */

namespace PHPSolr\config;
use PHPSolr\component\Singleton;
use PHPSolr\component\SolrException;

class Config
{
	use Singleton;
	private $protocol = 'http';
	private $host = '127.0.0.1';
	private $port = '8983';
	private $auth;
	private $password;
	public $base_uri;
	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/12 16:50
	 * @param $config
	 * @throws SolrException
	 * @Author:shr
	 */
	public function init($config){

		foreach ($config as $key=>$value){
			$name = 'set'.ucfirst($key);
			if(method_exists($this,$name)){
				$this->$name($value);
			}
		}
		$this->create_uri();
		return $this;
	}

	private function create_uri(){
		if(!empty($this->auth) && !empty($this->password)){
			$this->base_uri = $this->protocol.'://'.$this->auth.':'.$this->password.'@'.$this->host.'/solr/';
		}else{
			$this->base_uri = $this->protocol.'://'.$this->host.'/solr/';
		}
	}

	private function setHost($host){
		$this->host = $host;
	}

	private function setPort($port){
		$this->port = $port;
	}

	private function setAuth($auth){
		$this->auth = $auth;
	}

	private function setPassword($pwd){
		$this->password = $pwd;
	}
}

