<?php

	class Sanpham_model extends CI_Model {
		var $table="sanpham";
		var $primarykey="id_sp";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_sanpham() {
			$rs = $this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_sanphamtrangchu() {
			$rs = $this->db->get("sanpham",8,20);
			return $rs->result_array();
		}
		public function get_sanpham1() {
			$rs1 = $this->db->get("sanpham",8,108);
			return $rs1->result_array();
		}
		public function get_sanphamhangdau() {
			$sanphamhangdau = $this->db->get("sanpham",8,127);
			return $sanphamhangdau->result_array();
		}
		public function get_chitietsanpham($id_sp) {
			$this->db->where('id_sp', $id_sp);
			$rs=$this->db->get("sanpham");
			return $rs->row_array();
		}
		public function getListImage($id_sp){
			$this->db->where('id_sp', $id_sp);
			return $this->db->get('list_image')->row_array();			
		}
		// public function get_chitietsanpham() {
		// 	$this->db->join('list_image','sanpham.id_sp=list_image.id_sp','inner');
		// 	$rs=$this->db->get("sanpham");
		// 	return $rs->result_array();

		// }
		public function get_sanphamcungdanhmuc() {
			$this->db->where("loai_sp=7");
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_donam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("gioitinh","nam");
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		// public function get_do_nam_duoi_100k() {
		// 	$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
		// 	// $this->db->where("gioitinh","nam");
		// 	$this->db->or_where("gia < 100");
		// 	$rs=$this->db->get("sanpham");
		// 	return $rs->result_array();
		// }
		// public function get_do_nam_tu_100k_300k() {
		// 	$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
		// 	// $this->db->where("gioitinh","nam");
		// 	$this->db->or_where("gia < 300");
		// 	$rs=$this->db->get("sanpham");
		// 	return $rs->result_array();
		// }
		public function get_donu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("gioitinh","nu");
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_sanphamquantam() {
			$rs=$this->db->get("sanpham",8,33);
			return $rs->result_array();
		}
		public function get_aothunnam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=1" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_aosominam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=5" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanjean_nam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=3" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quankaki_nam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=2" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanjogger_nam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=4" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanshort_nam() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=6" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_aokieu_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=18" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_dam_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=19" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_chan_vay() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=20" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_somi_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=25" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanjean_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=22" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanshort_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=21" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function get_quanthun_nu() {
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=23" );
			$rs=$this->db->get("sanpham");
			return $rs->result_array();
		}
		public function count_rows($search){
			$this->db->where("id_sp like '%$search%'");
			return $this->db->count_all_results('sanpham'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("gioitinh","nam");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search2($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("gioitinh","nu");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search3($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=1");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search4($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=5");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search5($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=3");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search6($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=2");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search7($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=4");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search8($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=6");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search9($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=18");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search10($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=19");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search11($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=20");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search12($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("id_cha=25");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search13($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=22");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search14($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=21");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function get_search15($search,$cur_page,$per_page){
			$this->db->join('loai_sp', 'sanpham.loai_sp=loai_sp.id', 'inner');
			$this->db->where("loai_sp=23");
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_sp){
			$this->db->where("id_sp=$id_sp");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_sp) {
			$this->load->database();
			$this->db->where("id_sp=$id_sp");
			// $this->db->where('id_sp',$id_sp);
			$rs = $this->db->get("sanpham");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_sp) {
			$this->db->where('id_sp', $id_sp);
			return $this->db->delete('sanpham');
		}
	}