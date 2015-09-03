<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function checkout($post){

		// Inserts order into orders table
		$ship_name = $post['ship_first_name']." ".$post['ship_last_name'];
		$ship_address = $post['ship_address_1']." ".$post['ship_address_2']." ".$post['ship_city']." ".$post['ship_state']." ".$post['ship_zipcode'];
		$bill_name = $post['bill_first_name']." ".$post['bill_last_name'];
		$bill_address = $post['bill_address_1']." ".$post['bill_address_2']." ".$post['bill_city']." ".$post['bill_state']." ".$post['bill_zipcode'];

		$query = "INSERT INTO orders (user_id, ship_first_name, ship_last_name, ship_address_1, ship_address_2, ship_city, ship_state, ship_zipcode, bill_first_name, bill_last_name, bill_address_1, bill_address_2, bill_city, bill_state, bill_zipcode, card, card_code, card_month, card_year, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW());"; 
		$values = array($this->session->userdata('id'), $post["ship_first_name"], $post["ship_last_name"], $post["ship_address_1"], $post["ship_address_2"], $post["ship_city"],  $post["ship_state"],  $post["ship_zipcode"],  $post["bill_first_name"],  $post["bill_last_name"],  $post["bill_address_1"],  $post["bill_address_2"],  $post["bill_city"],  $post["bill_state"],  $post["bill_zipcode"],  $post["card"],  $post["card_code"],  $post["card_month"],  $post["card_year"], "Pending");

		$this->db->query($query, $values);
		$order_id = $this->db->insert_id();
		// Inserts order items into merchandise_has_orders
		$query2 = "INSERT INTO merchandise_has_orders (merchandise_id, order_id, qty, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW());";
		$cart = $this->session->userdata('cart');
		foreach($cart as $item){
			$values2 = array($item['item_id'], $order_id, $item['qty']);
			$this->db->query($query2, $values2);
		}

	}
}
// 19
/* End of file login.php */
/* Location: ./application/controllers/login.php */