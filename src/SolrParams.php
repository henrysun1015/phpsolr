<?php
/**
 * @Purpose: set solr query params
 */
namespace PHPSolr;
class SolrParams{

	public static $params;
	public static $query_type;

	public static function setSort($sort){
		self::$params['sort'] = $sort;
	}

	public static function setQuery($query){
		self::$params['q'] = $query;
	}

	public static function setField($field){
		self::$params['fl'] = $field;
	}

	public static function setStart($start){
		self::$params['start'] = $start;
	}

	public static function setDefType($defType){
		self::$params['defType'] = $defType;
	}

	public static function setRows($rows){
		self::$params['rows'] = $rows;
	}

	public static function setBatch($params){
		foreach ($params as $pm=>$val){
			self::$params[$pm] = $val;
		}
	}

	public static function setJsonFacet($json_fact){
		if(is_array($json_fact)){
			self::$params['json.facet'] = json_encode($json_fact);
		}else{
			self::$params['json.facet'] = $json_fact;
		}
	}
	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/15 17:09
	 * @param $stats string|array  ('id') || (['id','add_time'])
	 * @Author:shr
	 */
	public static function setStats($stats){
		self::$params['stats']='true';
		self::$params['stats.field'] = $stats;
	}

	const QUERY_SELECT = 'select';
	const QUERY_UPDATE = 'update';

}