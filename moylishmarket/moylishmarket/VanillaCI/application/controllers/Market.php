<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Market extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Market_Model');
    }
    public function index() {
		$data['customer_info']=$this->Market_Model->get_all_games();
        $this->load->view('db_test',$data);
    }
}
?>
