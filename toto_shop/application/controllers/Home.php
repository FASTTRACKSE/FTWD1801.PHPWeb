<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sanpham_model");
		$this->load->model("Hinhanh_model");
		$this->load->model("Tintuc_model");
		$this->load->library("cart");
		$this->load->helper(array('url', 'form'));
		$this->load->model("Home_model");
	}
	public function index() {
		$rs=$this->Sanpham_model->get_sanpham();
		$rs2=$this->Hinhanh_model->get_hinhanh();
		$rs1=$this->Sanpham_model->get_sanpham1();
		$sanphamhangdau=$this->Sanpham_model->get_sanphamhangdau();
		$tintuc=$this->Tintuc_model->get_tintuc();
		$data["sanpham"]=$rs;
		$data["hinhanh"]=$rs2;
		$data["sanpham1"]=$rs1;
		$data["sanphamhangdau"]=$sanphamhangdau;
		$data["tintuc"]=$tintuc;
		$data['content']="home/index";
		$this->load->view("templates/frontend/master",$data);
	}
	public function shopping_cart()
	{	
		$data['items'] = $this->cart->contents();
		$data['content']="home/shopping_cart";
		$this->load->view("templates/frontend/master",$data);
	}

	public function insert($id_sp){
        //Show thong tin chi tiet gio hang
        $product = $this->Home_model->getShopIdBy($id_sp);
		$data = array(
        'id'      => $product->id_sp,
        'qty'     => 1,
        'price'   => $product->gia,
        'name'    => $product->tensp,
        'img' => $product->hinhanh
 		);
			// echo "<pre>";
			// var_dump($this->cart->insert($data));
			// echo "<pre>";
		 if($this->cart->insert($data)){
             redirect('Home/shopping_cart');
        }else{
            redirect('Home/index');
        }
	}

	public function delete($rowid)
    {	
    	$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect('Home/shopping_cart');
    }

    public function deleteAll()
	{
		$this->cart->destroy();
		redirect('Home/shopping_cart');
	}

	public function updateCart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $item) 
		{
			$this->cart->update(array('rowid' => $item['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		$this->load->view('home/shopping_cart');
	}
}
	