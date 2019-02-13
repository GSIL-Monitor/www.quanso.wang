<?php

class xg_mod extends app_models
{
	public $default_from = 'xg';

	public function get_list($type)
	{
		$this->where('type', $type);
		$this->pager();
		$this->order_by('addtime');
		$data = $this->get();
		return $data;
	}

	public function read_num()
	{
		$this->where('type', $GLOBALS['userinfo']['type']);
		$this->where('FIND_IN_SET(\'' . $GLOBALS['userinfo']['uid'] . '\' ,rid' . substr($GLOBALS['userinfo']['uid'], -1) . ')=0');
		$data = $this->find_count();
		return $data;
	}

	public function read($xgid)
	{
		$this->where('messageid', (int) $xgid);
		$this->where('type', $GLOBALS['userinfo']['type']);
		$this->where('FIND_IN_SET(\'' . $GLOBALS['userinfo']['uid'] . '\' ,rid' . substr($GLOBALS['userinfo']['uid'], -1) . ')=0');
		$this->set('rid' . substr($GLOBALS['userinfo']['uid'], -1), 'CONCAT(rid' . substr($GLOBALS['userinfo']['uid'], -1) . ', ",",' . $GLOBALS['userinfo']['uid'] . ')', false);
		$data = $this->update();
	}

	public function get_xg_content($xgid)
	{
		$this->where('messageid', (int) $xgid);
		$this->where('type', $GLOBALS['userinfo']['type']);
		$data = $this->find_one();
		return $data;
	}
}


?>
