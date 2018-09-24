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
	public function donam(){
			$this->load->model("Sanpham_model");
			$rs=$this->Sanpham_model->get_donam();
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/donam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$data['content']="home/donam";
			$data["donam"]=$rs;
			$data['donam']=$this->Sanpham_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);


		// $this->load->model("Sanpham_model");
		// $rs=$this->Sanpham_model->get_donam();
		// $data["donam"]=$rs;
		// $data['content']="home/donam";
		// $this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}

	public function chitietsanpham(){
		$rs=$this->Sanpham_model->get_chitietsanpham();
		$rs1=$this->Sanpham_model->get_sanphamcungdanhmuc();
		$data["chitietsanpham"]=$rs;
		$data["sanphamcungdanhmuc"]=$rs1;
		$data['content']="home/chitietsanpham";
		$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}
	public function donu(){
		$this->load->model("Sanpham_model");
			$rs=$this->Sanpham_model->get_donu();
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/donu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$data['content']="home/donu";
			$data["donu"]=$rs;
			$data['donu']=$this->Sanpham_model->get_search2($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);


		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_donam();
		$data["donam"]=$rs;
		$data['content']="home/donam";
		$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}
	public function shopping_cart()
	{	
		$rs=$this->Sanpham_model->get_sanphamquantam();
		$data["sanphamquantam"]=$rs;
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

 //    public function deleteAll()
	// {
	// 	$this->cart->destroy();
	// 	redirect('Home/shopping_cart');
	// }

	public function updateCart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $item) 
		{
			$this->cart->update(array('rowid' => $item['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		$data['items'] = $this->cart->contents();
		$data['content']="home/shopping_cart";
		$this->load->view("templates/frontend/master",$data);
	}

	public function checkout()
	{
		$data['content']="home/checkout";
		$this->load->view("templates/frontend/master",$data);
	}
}
	