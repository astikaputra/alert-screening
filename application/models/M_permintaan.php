<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_permintaan extends CI_Model {

	function idPermintaan(){
		$q = $this->db->query("select MAX(RIGHT(id_permintaan,5)) as kd_max from tb_permintaan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        return "PK-".$kd;
	}

	function ambilDataDepartemen(){
    $this->db->order_by('nama_departemen','asc');
    $query = $this->db->get('tb_departemen');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

	function ambilDataPermintaan(){
    $query = $this->db->get('tb_permintaan');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }

  public function manualQuery($q)
  {
      $res = $this->db->query($q);
      return $data = $res->result_array();
  }

  function ambilDataAntigen2(){
    $query = $this->db->query("select * from screening where datediff(antigen2, now()) = 2");
   // return $data;
   echo "<pre>";
   var_dump($query);
    //  if($query->num_rows()>0)
    // {
    //   return $query->result();
    // }
    // else
    // {
    //   return false;
    // }
  }



	function ambilDataPermintaanbyStatus($status){
		$this->db->where('status', $status);
		//$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_permintaan');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }



	function ambilDataPermintaanbyStatusJoin($status){
 		$this->db->select('*');
		//$this->db->select('tb_permintaan.id_permintaan, tb_permintaan.catatan, tb_status, tb_identifikasi.persen');
		$this->db->where('tb_permintaan.status',$status);
		$this->db->from('tb_permintaan');
		$this->db->join('tb_identifikasi', 'tb_permintaan.id_permintaan = tb_identifikasi.id_identifikasi');

		//$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('');
    //if($query->num_rows()>0)
    //{
      return $query->result();
    //}
    //else
    //{
    //  return false;
  //  }
  }

	function hitungTotalDataPermintaan(){
		//$this->db->where('status', $status);
		//$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_permintaan');
		$total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }
	function hitungDataPermintaanbyStatus($status){
		$this->db->where('status', $status);
		//$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
		$total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }

      function hitungDataPermintaanbyStatusReady3(){
    $this->db->where('akses', 2);
     $this->db->where('status', 1);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }

   function hitungDataPermintaanbyStatusReady5(){
    $this->db->where('akses', 1);
     $this->db->where('status', 1);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }

   function hitungDataPermintaanbyStatusAktivasi3(){
    $this->db->where('akses', 2);
     $this->db->where('status', 2);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }

    function hitungDataPermintaanbyStatusAktivasi5(){
    $this->db->where('akses', 1);
     $this->db->where('status', 2);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }

    function hitungDataPermintaanbyStatusUse3(){
    $this->db->where('akses', 2);
     $this->db->where('status', 3);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }


     function hitungDataPermintaanbyStatusUse5(){
    $this->db->where('akses', 1);
     $this->db->where('status', 3);
    //$this->db->order_by('id_permintaan','asc');
    $query = $this->db->get('tb_card');
    $total=$query->num_rows();
    if($query->num_rows()>0)
    {
      return $total;
    }
    else
    {
      return false;
    }
  }


	function insertData($table, $data){
		return $this->db->insert($table, $data);
	}

	function ambilDataPermintaanbyID($id){
     $this->db->where('id_permintaan', $id);
     $query = $this->db->get('tb_permintaan');
     if($query->num_rows()>0)
     {
       return $query->row();
     }
     else
     {
       return false;
     }
  }

	function simpanDataPermintaan(){
		$id = $this->input->post('txt_id');
 		$dari = $this->input->post('txt_dari');
 		$departemen = $this->input->post('opt_departemen');
 		$catatan = $this->input->post('txt_catatan');
 		$tanggal = $this->input->post('txt_tgl');

		$data = array(
			'id_permintaan'=> $id,
			'dari' => $dari,
			'departemen' => $departemen,
			'catatan' => $catatan,
			'tanggal' => $tanggal,
			);

		$this->db->insert('tb_permintaan', $data);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else {
      return false;
    }
	}

	function updateDataPermintaan(){
		$id = $this->input->post('txt_id');
 		$dari = $this->input->post('txt_dari');
 		$departemen = $this->input->post('opt_departemen');
 		$catatan = $this->input->post('txt_catatan');
 		$tanggal = $this->input->post('txt_tgl');

 		$data = array(
 			'dari' => $dari,
 			'departemen' => $departemen,
 			'catatan' => $catatan,
 			'tanggal' => $tanggal
 			);

    $this->db->where('id_permintaan', $id);
    $this->db->update('tb_permintaan', $data);
    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }

	function hapusDataPermintaan($id){
		$this->db->where('id_permintaan', $id);
		$this->db->delete('tb_permintaan');
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}
	}

}
