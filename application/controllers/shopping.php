<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('billing_model');
        $this->load->library('cart');
	}

	public function index()
	{	
                //Get all data from database
		$data['products'] = $this->billing_model->get_all();
                //send all product data to "shopping_view", which fetch from database.		
		$this->load->view('index', $data);
	}
	

	 function add()
	{
              // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

                 // This function add items into cart.
		$this->cart->insert($insert_data);
	      
                // This will show insert data in cart.
		redirect('shopping');
	     }
	
		function remove($rowid) {
                    // Check rowid value.
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
                    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
                 // This will show cancle data in cart.
		redirect('shopping');
	}
	
	    function update_cart(){
                
                // Recieve post values,calcute them and update
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('shopping');        
	}	
        function billing_view(){
                // Load "billing_view".
        $this->load->view('header_guest');	
		$this->load->view('billing_view');
		$this->load->view('footer');
        }
        
    public function save_order()
	{
            $order = array(
			'NAMA_PEMBELI' 		=> $this->input->post('name'),
			'ALAMAT_PEMBELI' 	=> $this->input->post('address'),
			'NO_HP' 	=> $this->input->post('phone'),
			'TOTAL'	=> 0,
			'STATUS' => 0,
			'TANGGAL' => date('Y-m-d')
		);		
                 // And store user imformation in database.
		$ord_id = $this->billing_model->order($order);

		$total=0;
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'ID_TRANSAKSI' 		=> $ord_id,
					'ID_BARANG' 	=> $item['id'],
					'QUANTITY' 		=> $item['qty']
				);		
				$total+=$item['price'];
                            // Insert product imformation with order detail, store in cart also store in database. 
		         $cust_id = $this->billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		$data = array('TOTAL' => $total);
		$this->billing_model->update_total($data,$ord_id);
		$this->cart->destroy();
                // After storing all imformation in database load "billing_success".
                $this->load->view('billing_success');
	}
}