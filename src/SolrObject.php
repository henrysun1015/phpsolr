<?php

namespace PHPSolr;
use PHPSolr\config\Config;

class SolrObject{

	private $base_uri;
	private $core;
	private $action = 'select';

	public function __construct(Config $config){
		echo 'My First composer'.PHP_EOL;
	}

	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/12 16:16
	 * @param $core
	 * @Author:shr
	 */
	public function setCole($core){

	}



	public function exec(){
		echo 'Send data To solr';
	}
}