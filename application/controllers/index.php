<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
	public function main_page(){
		$this->load->view('main');
	}

	public function load_header(){
		$this->load->view('partials/header');
	}

	public function admin_page(){
		$this->load->view('admin');
	}

	public function cart()
	{
		// $item = $this->item->get_item_info(25);
		// $buy1 = array('item_id'=>$item['id'], 'name'=>$item['name'], 'price'=>$item['price'], 'qty'=>2);
		// if(!$this->session->userdata('cart')){
		// 	$test = array($buy1);
		// 	$this->session->set_userdata('cart',$test);
		// }
		// $cart = $this->session->userdata('cart');
		// $item = $this->item->get_item_info(26);
		// $buy2 = array('item_id'=>$item['id'], 'name'=>$item['name'], 'price'=>$item['price'], 'qty'=>4);
		// array_push($cart, $buy2);
		// $this->session->set_userdata('cart',$cart);
		$cart = $this->session->userdata('cart');
		// foreach($cart as $item){
		// 	echo "<p>item: ".$item['item_id']." with quantity: ".$item['qty']."</p>";
		// }
		$this->load->view('shopping_cart', array('cart'=>$cart));
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */