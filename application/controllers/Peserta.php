<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peserta extends CI_Controller {
	public function index(){
$data = json_decode(file_get_contents('php://input'), true);
$a = 3;
$b = "Webinar Nasional HPII";
$c = $data['nama_peserta'];
$d = $data['email'];
$e = $data['no_hp'];
$f = $data['instansi'];
$g = $data['pekerjaan'];
$h = $data['provinsi'];
    
header('Content-Type: application/json');
    
	$datadb = array('id_agenda'=>$a,
					'nama_agenda'=>$b,
					'nama_peserta'=>$c,
					'email'=>$d,
					'no_hp'=>$e,
					'instansi'=>$f,
					'pekerjaan'=>$g,
					'provinsi'=>$h);
	$this->db->insert('peserta',$datadb);
	
		if($datadb){
			$datadb = "Pendaftaran berhasil disimpan.";
			echo json_encode($datadb, true);
		} else{
			$datadb = "Pendaftaran gagal disimpan.";
			echo json_encode($datadb, false);
			exit();
		}
	}
}