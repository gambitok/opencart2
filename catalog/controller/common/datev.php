<?php
//Controller Datev
class ControllerCommonDatev extends Controller {
	public function index() {
		$this->load->language('common/datev');

		$data['datev'] = $this->language->get('datev');
		
		return $this->load->view('common/datev', $data);
	}
}