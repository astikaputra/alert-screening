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
  
		$this->db->where('datediff(pcr1, now()) = 0');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr2, now()) = 0');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr3, now()) = 0');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr4, now()) = 0');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(antigen1, now()) = 0');
    $query = $this->db->get('screening');
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

	function ambilDataAntigen02(){
		$this->db->where('datediff(antigen2, now()) = 0');
    $query = $this->db->get('screening');
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


  //Screening hari H + 1
  function ambilDataPcr1(){
		$this->db->where('datediff(pcr1, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr2, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr3, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr4, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(antigen1, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(antigen2, now()) = 1');
    $query = $this->db->get('screening');
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

//AMbil Data list Hari ini

function ambilListDataPcr01(){
  $this->db->where('datediff(pcr1, now()) = 3');
  $query = $this->db->get('screening');
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
  $this->db->where('datediff(pcr2, now()) = 3');
  $query = $this->db->get('screening');
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
  $this->db->where('datediff(pcr3, now()) = 3');
  $query = $this->db->get('screening');
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
  $this->db->where('datediff(pcr4, now()) = 3');
  $query = $this->db->get('screening');
  if($query->num_rows()>0)
  {
    return $query->result();
  }
  else
  {
    return false;
  }
}

function ambilListDataAntigen01(){
  $this->db->where('datediff(antigen1, now()) = 3');
  $query = $this->db->get('screening');
  if($query->num_rows()>0)
  {
    return $query->result();
  }
  else
  {
    return false;
  }
}



function ambilListDataAntigen02(){
  $this->db->where('datediff(antigen2, now()) = 3');
  $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr1, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr2, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr3, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(pcr4, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(antigen1, now()) = 1');
    $query = $this->db->get('screening');
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
		$this->db->where('datediff(antigen2, now()) = 1');
    $query = $this->db->get('screening');
    if($query->num_rows()>0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }


}
