<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {


/*Read the data from DB */
	Public function getEvents()
	{

	//$sql = "SELECT * FROM tb_jadwal WHERE tb_jadwal.start BETWEEN ? AND ? ORDER BY tb_jadwal.start ASC";
	//return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
	 $sql = "SELECT * FROM vw_calender WHERE vw_calender.start BETWEEN ? AND ? ORDER BY vw_calender.start ASC";
	 //$sql = "select b.nik, a.nama as description, b.start, b.end from tb_screening b , tb_karyawan a WHERE tb_screening.start BETWEEN ? AND ? ORDER BY tb_screening.start ASC";
	 
	 return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
	}

/*Create new events */

	Public function addEvent()
	{

	$sql = "INSERT INTO tb_jadwal (title,tb_jadwal.start,tb_jadwal.end,description, color) VALUES (?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'], $_POST['start'],$_POST['end'], $_POST['description'], $_POST['color']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function updateEvent()
	{

	$sql = "UPDATE tb_screening SET title = ?, description = ?, color = ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'],$_POST['description'], $_POST['color'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	/*Delete event */

	Public function deleteEvent()
	{

	$sql = "DELETE FROM tb_jadwal WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			//$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE tb_screening SET  tb_screening.start = ? ,tb_screening.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}






}
