<?php
/**
 * @Purpose:
 * @CreateDate: 2019/7/12 15:33
 * @Author:shr26207 sunhaoran@offcn.com
 */

require_once "../vendor/autoload.php";

use PHPSolr\SolrObject;
use PHPSolr\config\Config;
$config = Config::getInstance()->setConfig(['host'=>1]);
$obj = new SolrObject($config);
$obj->exec();
