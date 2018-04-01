<?php
class Pages extends CI_Controller{

	public function blog(){

        $this->load->view('template/header');
        $this->load->view('pages/blog');
        $this->load->view('template/footer');
	}
	public function view_auction(){

        $this->load->view('template/header');
        $this->load->view('category/view_auction_asset');
        $this->load->view('template/footer');
	}

}
?>