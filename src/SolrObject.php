<?php

namespace PHPSolr;
use PHPSolr\component\SolrException;
use PHPSolr\config\Config;

class SolrObject{


	private $base_uri;
	private $core;
	private $action;

	public function __construct(Config $config){
		$this->base_uri = $config->base_uri;
	}

	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/15 18:07
	 * @param $core
	 * @return $this
	 * @Author:shr26207
	 */
	public function setCole($core){
		$this->core=$core;
		return $this;
	}

	public function setAction($type=SolrParams::QUERY_SELECT){
		$this->action = $type;
	}

	public function exec(){
		echo 'Send data To solr';
	}

	public function buildParams(SolrParams $params){

	}
	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/15 18:20
	 * @throws SolrException
	 * @Author:shr26207
	 */
	private function buildUrl(){
		if(empty($this->core)){
			throw new SolrException('core can not be empty');
		}
		if(empty($this->action)){
			$this->setAction();
		}
		$this->base_uri .= '/'.$this->core.'/'.$this->action;
	}
}