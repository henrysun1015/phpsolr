<?php
/**
 * @Purpose:
 * @CreateDate: 2019/7/12 16:00
 * @Author:shr26207 sunhaoran@offcn.com
 */

namespace PHPSolr\component;

trait Singleton
{
	private static $instance;

	static function getInstance(...$args)
	{
		if(!isset(self::$instance)){
			self::$instance = new static(...$args);
		}
		return self::$instance;
	}
}