<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Screening extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_screening','sc');
	//	$this->load->helper('date');
		$this->_cek_login();
	}

	private function _cek_login()
	{
		if (!isset($this->session->userdata['id_user'])) {
	  redirect(base_url("login"));
	  }
	}

	 //Hari ini

	function pcr01()
	{
		$d_header['title'] = 'Dashboard Pcr 1 Hari ini';

		$d_header['list_pcr01'] = $this->sc->ambilListDataPcr01();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr1/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function pcr02()
	{
		$d_header['title'] = 'Dashboard Pcr 1 Hari ini';

		$d_header['list_pcr02'] = $this->sc->ambilListDataPcr02();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr2/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	function pcr03()
	{
		$d_header['title'] = 'Dashboard Pcr 3 Hari ini';

		$d_header['list_pcr03'] = $this->sc->ambilListDataPcr03();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr3/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	function pcr04()
	{
		$d_header['title'] = 'Dashboard Pcr 4 Hari ini';

		$d_header['list_pcr04'] = $this->sc->ambilListDataPcr04();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr4/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function antigen01()
	{
		$d_header['title'] = 'Dashboard Antigen 1 Hari ini';

		$d_header['list_antigen01'] = $this->sc->ambilListDataAntigen01();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		//$this->load->view('screening/index', $data);
		$this->load->view('screening/antigen1/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function antigen02()
	{
		$d_header['title'] = 'Dashboard Antigen 1 Hari ini';

		$d_header['list_antigen02'] = $this->sc->ambilListDataAntigen02();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/antigen2/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');

		
	}

	function antigen03()
	{
		$d_header['title'] = 'Dashboard Antigen 1 Hari ini';

		$d_header['list_antigen03'] = $this->sc->ambilListDataAntigen03();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		//$this->load->view('screening/index', $data);
		$this->load->view('screening/antigen3/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function antigen04()
	{
		$d_header['title'] = 'Dashboard Antigen 1 Hari ini';

		$d_header['list_antigen04'] = $this->sc->ambilListDataAntigen04();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/antigen4/index01');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');

		
	}

	//Besok

	function pcr1()
	{
		$d_header['title'] = 'Dashboard Pcr 1 Besok';

		$d_header['list_pcr1'] = $this->sc->ambilListDataPcr1();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr1/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function pcr2()
	{
		$d_header['title'] = 'Dashboard Pcr 2 Besok';

		$d_header['list_pcr2'] = $this->sc->ambilListDataPcr2();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr2/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	function pcr3()
	{
		$d_header['title'] = 'Dashboard Pcr 3 Besok';

		$d_header['list_pcr3'] = $this->sc->ambilListDataPcr3();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr3/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	function pcr4()
	{
		$d_header['title'] = 'Dashboard Pcr 4 Besok';

		$d_header['list_pcr4'] = $this->sc->ambilListDataPcr4();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/pcr4/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function antigen1()
	{
		$d_header['title'] = 'Dashboard Antigen 1 Besok';

		$d_header['list_antigen1'] = $this->sc->ambilListDataAntigen1();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		//$this->load->view('screening/index', $data);
		$this->load->view('screening/antigen1/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	function antigen2()
	{
		$d_header['title'] = 'Dashboard Antigen 2 Besok';

		$d_header['list_antigen2'] = $this->sc->ambilListDataAntigen2();
		
		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('screening/antigen2/index');
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}
	


	   function updatehadir_antigen01($id){

		$hasil = $this->sc->updateDataHadir($id);

		// echo "<pre>";
    	// var_dump($hasil);

		if($hasil){
		  $this->session->set_flashdata('psn_sukses','Data telah diubah');
		}
		else {
		  $this->session->set_flashdata('psn_error','Gagal mengubah data ');
		}
		redirect(base_url('index.php/screening/antigen01'));
	   }

	   function updatehadir_antigen02($id){
		$hasil = $this->sc->updateDataHadir($id);

		// echo "<pre>";
    	// var_dump($hasil);

		if($hasil){
		  $this->session->set_flashdata('psn_sukses','Data telah diubah');
		}
		else {
		  $this->session->set_flashdata('psn_error','Gagal mengubah data ');
		}
		redirect(base_url('index.php/screening/antigen02'));
	   }

}
