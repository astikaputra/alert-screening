<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_screening extends CI_Model {

  public function cek_session(){
		if($this->session->userdata('username')=="")
    	{
     	?><script type="text/javascript" language="javascript">
        	alert("Session Anda habis atau belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
        </script>
        <?php
        	echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
          
     	}  
          
	}

  
 // $besok = '1';

  function ambilDataPcr01(){
  
		$this->db->where('datediff(start, now()) = 0 and title = "PCR I"');
    $query = $this->db->get('tb_screening');
    $total_pcr01 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr01;
    }
    else
    {
      return false;
    }
  }
  function ambilDataPcr02(){
		$this->db->where('datediff(start, now()) = 0 and title = "PCR II"');
    $query = $this->db->get('tb_screening');
    $total_pcr02 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr02;
    }
    else
    {
      return false;
    }
  }

  function ambilDataPcr03(){
		$this->db->where('datediff(start, now()) = 0 and title = "PCR III"');
    $query = $this->db->get('tb_screening');
    $total_pcr03 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr03;
    }
    else
    {
      return false;
    }
  }

  function ambilDataPcr04(){
		$this->db->where('datediff(start, now()) = 0 and title = "PCR IV"');
    $query = $this->db->get('tb_screening');
    $total_pcr04 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr04;
    }
    else
    {
      return false;
    }
  }

  function ambilDataAntigen01(){
		$this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN I"');
    $query = $this->db->get('tb_screening');
    $total_antigen01 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen01;
    }
    else
    {
      return false;
    }
  }

  function ambilListDataAntigen01(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title,tb_screening.status as status');
   //$this->db->select('*') ;
   $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN I"');
  
    $query = $this->db->get();
  
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
   }
  
    //select b.nik, a.nama, a.no_hp, a.unit, b.title from tb_screening b , tb_karyawan a WHERE b.nik = a.nik and datediff(b.sampel_date, now()) = 0 and b.title = "PCR I";
  }

	function ambilDataAntigen02(){
		$this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN II"');
    $query = $this->db->get('tb_screening');
    $total_antigen02 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen02;
    }
    else
    {
      return false;
    }
  }

  function ambilListDataAntigen02(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN II"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilDataAntigen03(){
		$this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN III"');
    $query = $this->db->get('tb_screening');
    $total_antigen03 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen03;
    }
    else
    {
      return false;
    }
  }

  function ambilListDataAntigen03(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN III"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilDataAntigen04(){
		$this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN IV"');
    $query = $this->db->get('tb_screening');
    $total_antigen04 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen04;
    }
    else
    {
      return false;
    }
  }

  function ambilListDataAntigen04(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 0 and title = "ANTIGEN IV"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }


  //tb_screening hari H + 1
  function ambilDataPcr1(){
		$this->db->where('datediff(start, now()) = 1 and title = "PCR I"');
    $query = $this->db->get('tb_screening');
    $total_pcr1 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr1;
    }
    else
    {
      return false;
    }
  }
  function ambilDataPcr2(){
		$this->db->where('datediff(start, now()) = 1 and title = "PCR II"');
    $query = $this->db->get('tb_screening');
    $total_pcr2 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr2;
    }
    else
    {
      return false;
    }
  }

  function ambilDataPcr3(){
		$this->db->where('datediff(start, now()) = 1 and title = "PCR III"');
    $query = $this->db->get('tb_screening');
    $total_pcr3 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr3;
    }
    else
    {
      return false;
    }
  }

  function ambilDataPcr4(){
		$this->db->where('datediff(start, now()) = 1 and title = "PCR IV"');
    $query = $this->db->get('tb_screening');
    $total_pcr4 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_pcr4;
    }
    else
    {
      return false;
    }
  }

  function ambilDataAntigen1(){
		$this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN I"');
    $query = $this->db->get('tb_screening');
    $total_antigen1 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen1;
    }
    else
    {
      return false;
    }
  }

	function ambilDataAntigen2(){
		$this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN II"');
    $query = $this->db->get('tb_screening');
    $total_antigen2 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen2;
    }
    else
    {
      return false;
    }
  }

  function ambilDataAntigen3(){
		$this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN III"');
    $query = $this->db->get('tb_screening');
    $total_antigen1 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen3;
    }
    else
    {
      return false;
    }
  }

	function ambilDataAntigen4(){
		$this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN IV"');
    $query = $this->db->get('tb_screening');
    $total_antigen2 = $query->num_rows();

    if($query->num_rows()>0)
    {
      return $total_antigen4;
    }
    else
    {
      return false;
    }
  }

//AMbil Data list Hari ini

function ambilListDataPcr01(){
  $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
  $this->db->from('tb_screening');
  $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
  $this->db->where('datediff(start, now()) = 0 and title = "PCR I"');
 
   $query = $this->db->get();
 
   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return false;
  }
}

function ambilListDataPcr02(){
  $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
  $this->db->from('tb_screening');
  $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
  $this->db->where('datediff(start, now()) = 0 and title = "PCR II"');
 
   $query = $this->db->get();
 
   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return false;
  }
}

function ambilListDataPcr03(){
  $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
  $this->db->from('tb_screening');
  $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
  $this->db->where('datediff(start, now()) = 0 and title = "PCR III"');
 
   $query = $this->db->get();
 
   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return false;
  }
}
function ambilListDataPcr04(){
  $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
  $this->db->from('tb_screening');
  $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
  $this->db->where('datediff(start, now()) = 0 and title = "PCR IV"');
 
   $query = $this->db->get();
 
   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return false;
  }
}


//Ambil data list Besok

  function ambilListDataPcr1(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "PCR I"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilListDataPcr2(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "PCR II"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilListDataPcr3(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "PCR III"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }
  function ambilListDataPcr4(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "PCR IV"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilListDataAntigen1(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN I"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }



  function ambilListDataAntigen2(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN II"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilListDataAntigen3(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN III"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function ambilListDataAntigen4(){
    $this->db->select ('tb_screening.id as id, tb_karyawan.nik as nik, tb_karyawan.nama as nama, tb_karyawan.no_hp, tb_karyawan.unit as unit, tb_screening.title as title, tb_screening.status as status');
    $this->db->from('tb_screening');
    $this->db->join('tb_karyawan', 'tb_screening.nik = tb_karyawan.nik');
    $this->db->where('datediff(start, now()) = 1 and title = "ANTIGEN IV"');
   
     $query = $this->db->get();
   
     if($query->num_rows()>0)
     {
       return $query->result();
     }
     else
     {
       return false;
    }
  }

  function updateDataHadir($id){

    $status = "1";
    $color = "#00a65a"; //warna hijau
    $data = array(
      'status' => $status,
      'color' => $color
    );
    //print_r($id);
     $this->db->where('id', $id);
     $this->db->update('tb_screening', $data);

    

    if($this->db->affected_rows() > 0){
      return true;
    }else {
      return false;
    }
  }


}
