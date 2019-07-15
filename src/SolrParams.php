<?php
/**
 * @Purpose: set solr query params
 */
namespace PHPSolr;
class SolrParams{

	public $params;

	public function setSort($sort){
		$this->params['sort'] = $sort;
	}

	public function setQuery($query){
		$this->params['q'] = $query;
	}

	public function setField($field){
		$this->params['fl'] = $field;
	}

	public function setStart($start){
		$this->params['start'] = $start;
	}

	public function setRows($rows){
		$this->params['start'] = $rows;
	}
	/**
	 * @Purpose:
	 * @CreateDate: 2019/7/15 17:09
	 * @param $stats string|array  ('id') || (['id','add_time'])
	 * @Author:shr
	 */
	public function setStats($stats){
		$this->params['stats']='true';
		$this->params['stats.field'] = $stats;
	}

}