<?php
/**
 * @Purpose:
 * @CreateDate: 2019/7/12 15:33
 * @Author:shr26207 sunhaoran@offcn.com
 */

require_once "../vendor/autoload.php";

use PHPSolr\SolrObject;
use PHPSolr\config\Config;
try{
	$config = Config::getInstance()->init(['host'=>'127.0.0.1','port'=>8983]);
	var_dump($config );
	$obj = new SolrObject($config);
	$obj->exec();
}catch (\PHPSolr\component\SolrException $e){
	var_dump($e->getMessage());
}catch (\Exception $e){
	var_dump($e->getMessage());
}

