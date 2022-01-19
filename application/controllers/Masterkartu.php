<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterkartu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_penerimaankartu','mp'); //load model, simpan ke m
		$this->load->model('M_identifikasi','mi'); //load model, simpan ke m
		$this->load->model('main_model');
		$this->_cek_login();
	}

	function _cek_login()
	{
		if (!isset($this->session->userdata['id_user'])) {
	  redirect(base_url("login"));
	  }
	}

	function index()
	{
		$data = array(
			'd_aktivasikartu' => $this->mp->ambilDataaktivasi()
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('aktivasikartu/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function lantai5()
	{
		$data = array(
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where akses='1' AND status = '1'")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
 function lantai3()
	{
		$data = array(
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where akses='2' AND status = '1'")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	function tambah5()
	{
		$data = array(
				'd_akses' => '1',
				'action' => base_url().'masterkartu/simpan5',
				'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where akses='1' AND status = '1' ORDER BY id DESC")
			);
		$d_header['d_penerimaan'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');

		$d_header['title'] = 'penerimaankartu';

		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/tambah5', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}


	function simpan5(){

		
 		$nofrid = $this->input->post('txt_id');
 //		$departemen = $this->input->post('opt_departemen');
 		$status = "1";
 		$tanggal = date("Y-m-d");
        $jam = date("H:i:s");
        $akses = $this->input->post('id');
        $tgl2 = date('Y-m-d', strtotime('+4 days', strtotime($tanggal)));
        $user = $this->session->userdata('nama_user');
		if($nofrid != "")
		{
		  $row = $this->main_model->manualQuery("Select * From tb_card where fridnum = '".$nofrid."'");
		  if($row){
		  	$this->session->set_flashdata('psn_error','kartu Sudah ada');
		  }
		  else
		  {
		  	$data = array(
			//'id_penerimaan'=> $id,
			'fridnum' => $nofrid,
			'status' => $status,			
			'tgl' => $tanggal,
            'akses' => $akses,
            'tgl_exp' => $tgl2,
            'user' => $user,
            'jam' => $jam,
			);
		   //print_r($data);
		   $hasil = $this->main_model->insertData('tb_card',$data);
		   if($hasil){
			$this->session->set_flashdata('psn_sukses','Data Aktivasi telah disimpan');
		   }
		   else {
			$this->session->set_flashdata('psn_error','Gagal menyimpan data ');
		   }
		  }
		}else
		{
			$this->session->set_flashdata('psn_error','Nomor Kartu Belum di isi ');
		}
		redirect(base_url('masterkartu/tambah5'));
	}

function tambah3()
	{
		$data = array(
				'd_akses' => '2',
				'action' => base_url().'masterkartu/simpan3',
				'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where akses='2' AND status = '1' ORDER BY id DESC")
			);
		$d_header['d_penerimaan'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');

		$d_header['title'] = 'penerimaankartu';

		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/tambah3', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}


	function simpan3(){

		
 		$nofrid = $this->input->post('txt_id');
 //		$departemen = $this->input->post('opt_departemen');
 		$status = "1";
 		$tanggal = date("Y-m-d");
        $jam = date("H:i:s");
        $akses = $this->input->post('id');
        $user = $this->session->userdata('nama_user');
        $tgl2 = date('Y-m-d', strtotime('+4 days', strtotime($tanggal))); //operasi penjumlahan tanggal sebanyak 6 hari
		if($nofrid != "")
		{
		  $row = $this->main_model->manualQuery("Select * From tb_card where fridnum = '".$nofrid."'");
		  if($row){
		  	$this->session->set_flashdata('psn_error','kartu Sudah ada');
		  }
		  else
		  {
		  	$data = array(
			//'id_penerimaan'=> $id,
			'fridnum' => $nofrid,
			'status' => $status,			
			'tgl' => $tanggal,
			'tgl_exp' => $tgl2,
            'akses' => $akses,
            'user' => $user,
            'jam' => $jam,
			);
		   //print_r($data);
		   $hasil = $this->main_model->insertData('tb_card',$data);
		   if($hasil){
			$this->session->set_flashdata('psn_sukses','Data Aktivasi telah disimpan');
		   }
		   else {
			$this->session->set_flashdata('psn_error','Gagal menyimpan data ');
		   }
		  }
		}else
		{
			$this->session->set_flashdata('psn_error','Nomor Kartu Belum di isi ');
		}
		redirect(base_url('masterkartu/tambah3'));
	}
	
	function ready()
	{
		$data = array(
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '1'")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/indexready', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function aktif()
	{
		$data = array(
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '2'")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/indexaktif', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function valid()
	{
		$data = array(
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '3' ORDER BY tgl_aktif ASC")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
        $d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/indexvalid', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function expired()
	{
		$data = array( 'action' => base_url().'masterkartu/do_retur',
			'd_kartu' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '4' ORDER BY id DESC LIMIT 1200")
		);
		$d_header['d_penerimaankartu'] = $this->mp->ambilDatapenerimaanbyStatus('waiting');
		$d_header['d_progress'] = $this->mp->ambilDatapenerimaanbyStatusJoin('on progress');

		$d_header['total_waiting'] = $this->mp->hitungDatapenerimaanbyStatus('waiting');
		$d_header['total_progress'] = $this->mp->hitungDatapenerimaanbyStatus('on progress');
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('masterkartu/indexexpired', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	
	function do_expired(){
		$data = $this->main_model->manualQuery("SELECT * FROM tb_card where status = '3'");
		$no =0;
		foreach ($data as $k) {
			# code...
			$tgl_exp = date($k['tgl_exp']);
			$tgl_now = date("Y-m-d");
			
			$selisih = (strtotime($tgl_exp)-strtotime($tgl_now))/(60*60*24);
			if($selisih < 0){
				$no++;
				$dt['status'] = "4";
				$where['id'] = $k['id'];
				$rest = $this->main_model->updateData('tb_card', $dt, $where);
				if($rest){
					$this->session->set_flashdata('psn_sukses','Data Aktivasi telah disimpan');
				}else{
					$this->session->set_flashdata('psn_error','Data Aktivasi telah disimpan');
				}
			}
			else{
			 $this->session->set_flashdata('psn_sukses','Tidak Kartu yang di update expired');
			}
		}
		redirect(base_url('masterkartu/expired'));
	}
	//simpan identifikasi
	//terus ubah status menjadi on progress
	
function do_retur(){
		$tanggal = date("Y-m-d");
		 $tgl2 = date('Y-m-d', strtotime('+4 days', strtotime($tanggal))); 
		$id = $this->input->post('id');
		$rfid = $this->input->post('rfid');
		$status = "1";

		$data = array('status'=> $status,
			'tgl_exp'=> $tgl2,
		    'tgl_aktif'=> "0000-00-00",
		    'status'=> $status,
		    'pasien'=> " ",
		    'room'=> " ",);
		$where = array('id'=> $id);

		$hasil = $this->main_model->updateData('tb_card',$data,$where);
		if($hasil){
				$data1 = array("keterangan" => "Kartu Retur ",
		   		"tgl" => date("Y-m-d"),
		   	 	"jam" => date("H:i:s"),
		   	    "status" => '1',
		   	    "rfid" => $rfid,
		   	    "user" => $this->session->userdata('nama_user'));
		   	// print_r($data1);
		   	$this->main_model->insertData('tb_logcard',$data1);
			$this->session->set_flashdata('psn_sukses','Retur Kartu telah disimpan');
		}else{
			$this->session->set_flashdata('psn_error','Gagal menyimpan data ');
		}
		redirect(base_url('masterkartu/expired'));

	}

	public function zonk(){
		$data = $this->main_model->manualQuery("SELECT * FROM tb_zonk");
		$tanggal = date("Y-m-d");
		$tgl2 = date('Y-m-d', strtotime('+4 days', strtotime($tanggal))); 
		$rest['tgl_aktif'] = $tanggal;
		$rest['tgl_exp'] = $tgl2;
		$rest['status'] = '3';
		$rest['pasien'] = 'zonk';
		$rest['room'] = 'zonk';
		foreach ($data as $k) {
			$where['fridnum']=$k['norfid'];
			$this->main_model->updateData('tb_card',$rest,$where);
		}
		redirect(base_url('masterkartu/expired'));	
	}

	public function zonk_truncate(){
		$this->db->empty_table('tb_zonk');
		redirect(base_url('masterkartu'));
	}


}
