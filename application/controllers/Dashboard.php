<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_permintaan','mp'); //load model, simpan ke m
        // $this->load->model('M_permintaan','mp'); //load model, simpan ke m
		// $this->load->model('M_identifikasi','md'); //load model, simpan ke m
		// $this->load->model('M_refill','mr');
		$this->load->model('M_screening','sc');

		//$this->load->model('main_model');
		$this->load->helper('date');
		$this->_cek_login();
	}

	private function _cek_login()
	{
		if (!isset($this->session->userdata['id_user'])) {
	  redirect(base_url("login"));
	  }
	}

	function index()
	{
		$data = array(
			//'pppk' => $this->m->Getpppk('order by no desc')->result_array(),
			//'d_permintaan' => $this->mp->ambilDataPermintaan(), //buat ambil join persen dari tb_identifikasi
			//'d_refill' => $this->mr->ambilDataRefill(),

			//'d_antigen2' => $this->sc->ambilDataAntigen2()

			//'d_kartu_use' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '3' ORDER BY id DESC"),
			
			//'d_kartu_retur' => $this->main_model->manualQuery("SELECT * FROM tb_card where status = '4' ORDER BY id DESC"),

			//'total_antigen2' => $this->main_model->manualQuery("select count(antigen2) from screening where datediff(antigen2, now()) = 2")
		);

		//$d_header['d_antigen2'] = $this->main_model->manualQuery("select * from screening where datediff(antigen2, now()) = 2");
		// $antigen2 = $this->main_model->manualQuery("select count(antigen2) from screening where datediff(antigen2, now()) = 2");
		// echo "<pre>";
        // var_dump($antigen2);
		$d_header['total_pcr01'] = $this->sc->ambilDataPcr01();
		$d_header['total_pcr02'] = $this->sc->ambilDataPcr02();
		$d_header['total_pcr03'] = $this->sc->ambilDataPcr03();
		$d_header['total_pcr04'] = $this->sc->ambilDataPcr04();
		$d_header['total_antigen01'] = $this->sc->ambilDataAntigen01();
		$d_header['total_antigen02'] = $this->sc->ambilDataAntigen02();
		$d_header['total_antigen03'] = $this->sc->ambilDataAntigen03();
		$d_header['total_antigen04'] = $this->sc->ambilDataAntigen04();


		$d_header['total_pcr1'] = $this->sc->ambilDataPcr1();
		$d_header['total_pcr2'] = $this->sc->ambilDataPcr2();
		$d_header['total_pcr3'] = $this->sc->ambilDataPcr3();
		$d_header['total_pcr4'] = $this->sc->ambilDataPcr4();
		$d_header['total_antigen1'] = $this->sc->ambilDataAntigen1();
		$d_header['total_antigen2'] = $this->sc->ambilDataAntigen2();
		$d_header['total_antigen3'] = $this->sc->ambilDataAntigen3();
		$d_header['total_antigen4'] = $this->sc->ambilDataAntigen4();
		
		// $d_header['d_progress'] = $this->mp->ambilDataPermintaanbyStatusJoin('on progress');

		// $d_header['total_waiting'] = $this->mp->hitungDataPermintaanbyStatus('3');
		// $d_header['total_progress'] = $this->mp->hitungDataPermintaanbyStatus('2');
		
		// $d_header['total_finished'] = $this->mp->hitungDataPermintaanbyStatus('1'); 

		// $d_header['total_ready3'] = $this->mp->hitungDataPermintaanbyStatusReady3();
		// $d_header['total_ready5'] = $this->mp->hitungDataPermintaanbyStatusReady5();
		// $d_header['total_aktivasi3'] = $this->mp->hitungDataPermintaanbyStatusAktivasi3();
		// $d_header['total_aktivasi5'] = $this->mp->hitungDataPermintaanbyStatusAktivasi5();
		// $d_header['total_use3'] = $this->mp->hitungDataPermintaanbyStatusUse3();
		// $d_header['total_use5'] = $this->mp->hitungDataPermintaanbyStatusUse5();


		$d_header['title'] = 'Dashboard';

		$this->load->view('template/header',$d_header);
		$this->load->view('template/leftside');
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer_js');
		$this->load->view('template/footer');
	}

	// function lihat($kode){
	// 	$did = $this->md->ambilDataIdentifikasibyID($kode);
	// 	$dpk = $this->mp->ambilDataPermintaanbyID($kode);
	// 	$dso = $this->md->ambilDataSolusibyID($kode);

	// 	$data = array(
	// 		'id_identifikasi' => $did->id_identifikasi,
	// 		'dari' => $dpk->dari,
	// 		'tanggal_permintaan' => $dpk->tanggal,
	// 		'departemen' => $dpk->departemen,
	// 		'catatan' => $dpk->catatan,
	// 		'tanggal_identifikasi' => $did->tanggal,
	// 		'identifikasi' => $did->identifikasi,
	// 		'identifikasi_oleh' => $did->oleh,
	// 		'tanggal_solusi' => $dso->tanggal,
	// 		'solusi' => $dso->solusi,
	// 		'solusi_oleh' => $dso->oleh
	// 		);

	// 	$d_header['d_permintaan'] = $this->mp->ambilDataPermintaanbyStatus('waiting');
	// 	$d_header['d_progress'] = $this->mp->ambilDataPermintaanbyStatusJoin('on progress');

	// 	$d_header['total_waiting'] = $this->mp->hitungDataPermintaanbyStatus('waiting');
	// 	$d_header['total_progress'] = $this->mp->hitungDataPermintaanbyStatus('on progress');

	// 	$this->load->view('template/header',$d_header);
	// 	$this->load->view('template/leftside');
	// 	$this->load->view('dashboard/lihat', $data);
	// 	$this->load->view('template/footer_js');
	// 	$this->load->view('template/footer');
	// }

	// function finished()
	// {
	// 	$data = array(
	// 		'd_permintaan' => $this->mp->ambilDataPermintaanbyStatus('finished'),
	// 	);
	// 	$d_header['d_permintaan'] = $this->mp->ambilDataPermintaanbyStatus('waiting');

	// 	$d_header['total_waiting'] = $this->mp->hitungDataPermintaanbyStatus('waiting');
	// 	$d_header['total_progress'] = $this->mp->hitungDataPermintaanbyStatus('on progress');
	// 	$d_header['total_finished'] = $this->mp->hitungDataPermintaanbyStatus('finished');
	// 	$d_header['total_pekerjaan'] = $this->mp->hitungTotalDataPermintaan();

	// 	$this->load->view('template/header',$d_header);
	// 	$this->load->view('template/leftside');
	// 	$this->load->view('dashboard/selesai', $data);
	// 	$this->load->view('template/footer_js');
	// 	$this->load->view('template/footer');
	// }


}
