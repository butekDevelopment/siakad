<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_judul extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Commonfunction','','fn');
				
		if(!isset($this->session->userdata['codeUser']))		
			redirect("login","refresh");
	}
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	
	var $mainTable="mahasiswa";
	var $mainPk="NIM";
	var $viewLink="Daftar_judul";
	var $breadcrumbTitle="Daftar_judul";
	var $viewPage="mahasiswa/daftar_judul/v_daftarjudul";
	var $addPage="mahasiswa/daftar_judul/v_daftarjudul";
	
	
	//query
	var $ordQuery=" ORDER BY id ";
	var $tableQuery="
						mahasiswa a 
						inner join dp1 b on a.id_dp1=b.id_dp1
						inner join rumpun c on a.id_rumpun=c.id_rumpun
						inner join login_mhs d on a.id_mhs=d.id_mhs
						inner join dokumen_tugas_akhir e on a.id_dokumen=e.id_dokumen";
						
						
	var $fieldQuery="a.NIM as id,
					 a.nama_mahasiswa,
					 a.program_studi,
					 b.nm_dosen,
					 a.dospem_2,
					 c.nm_rumpun,
					 a.judul_TA,
					 a.deskripsi,
					 d.id_mhs,
					 e.berkas_dokumen,
					 a.status,
					 a.status_mahasiswa,
					 a.keterangan
					 "; //leave blank to show all field
						
	var $primaryKey="id";
	var $updateKey="a.NIM";
	
	//auto generate id
	var $defaultId="";
	var $prefix="";
	var $suffix="";	
	
	//view
	var $viewFormTitle="Form Pendaftaran Pengajuan judul";
	var $viewFormTableHeader=array(
									"NIM",
									"Nama",
									"Program Studi",
									"Dosen Pembimbing 1",
									"Dosen Pembimbing 2",
									"Rumpun Mata Kuliah",
									"Judul Tugas Akhir",
									"Deskripsi",
									"ID Mahasiswa",
									"Referensi",
									"Status",
									"Status Mahasiswa",
									"Keterangan"
									);
	
	//save
	var $saveFormTitle="Tambah judul";
	var $saveFormTableHeader=array(
									"NIM",
									"Nama",
									"Program Studi",
									"Dosen Pembimbing 1",
									"Dosen Pembimbing 2",
									"Rumpun Mata Kuliah",
									"Judul Tugas Akhir",
									"Deskripsi",
									"ID Mahasiswa",
									"Referensi",
									"Status",
									"Status Mahasiswa",
									"Keterangan"
									);
	
	//update
	var $editFormTitle="Edit Judul";
	
	/*	
		========================================================== General Function =========================================================
	*/
	
	public function index()
	{
		//init modal
		$this->load->database();
		$this->load->model('Mmain');
		
			
		
		//init view
		
		$renderTemp=$this->Mmain->qRead($this->tableQuery.$this->ordQuery,$this->fieldQuery,"");
		
		$output['render']=$renderTemp;
		//init view
		$output['pageTitle']=$this->viewFormTitle;
		$output['breadcrumbTitle']=$this->breadcrumbTitle;
		$output['breadcrumbLink']=$this->viewLink;
		$output['saveLink']=$this->viewLink."/add";
		$output['deleteLink']=$this->viewLink."/delete";
		$output['primaryKey']=$this->primaryKey;
		$output['tableHeader']=$this->viewFormTableHeader;
		$output['cborumpun']=$this->fn->createCbofromDb("rumpun","id_rumpun as id,nm_rumpun as nm","","");
		$output['cbodp1']=$this->fn->createCbofromDb("dp1","id_dp1 as id,nm_dosen as nm","","");
		$output['cbodokumen']=$this->fn->createCbofromDb("dokumen_tugas_akhir","id_dokumen as id,berkas_dokumen as nm","","");
		//render view
		$this->fn->getheader();
		$this->load->view($this->viewPage,$output);
		$this->fn->getfooter();
	}
	

	
	public function add($isEdit="")
	{
		//init modal
		$this->load->database();
		$this->load->model('Mmain');
		
		
		//init view
		$output['pageTitle']=$this->saveFormTitle;
		$output['breadcrumbTitle']=$this->breadcrumbTitle;
		$output['breadcrumbLink']=$this->viewLink;
		$output['saveLink']=$this->viewLink."/save";
		$output['tableHeader']=$this->saveFormTableHeader;
		$output['formLabel']=$this->saveFormTableHeader;
		
		$imgTemp="";
		$codeTemp="";
		if(!empty($isEdit))
		{
			
			$output['pageTitle']=$this->editFormTitle;
			$output['saveLink']=$this->viewLink."/update";
			$pid=$isEdit;
			//$this->fieldQuery="code_user,nm_user,pwd_user,ava_user,id_acc";
			$render=$this->Mmain->qRead($this->tableQuery,$this->fieldQuery,$this->mainPk." = '".$pid."'");
			foreach($render->result() as $row)
			{
				foreach($row as $col)
				{
					$txtVal[]= $col;
				}
			}
			
				$cbodp1=$this->fn->createCbofromDb("dp1","id_dp1 as id,nm_dosen as nm","",$txtVal[3]);
				$cborumpun=$this->fn->createCbofromDb("rumpun","id_rumpun as id,nm_rumpun as nm","",$txtVal[5]);
				$cbodokumen=$this->fn->createCbofromDb("dokumen_tugas_akhir","id_dokumen as id,berkas_dokumen as nm","",$txtVal[9]);
				//$cboloc=$this->fn->createCbofromDb("tb_loc","id_loc as id,nm_loc as nm","",$txtVal[6]);
				$cbostat=$this->fn->createCbo(array(0),array("Belum diverifikasi"),$txtVal[11]);
					
				
		}
		else
		{	
				for($i=0;$i<count($this->saveFormTableHeader);$i++)
				{
					$txtVal[]="";
				}	
				
				//generate id
				$newId=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				$txtVal[0]=$newId;
				
				$cbodp1=$this->fn->createCbofromDb("dp1","id_dp1 as id,nm_dosen as nm","","");
				$cborumpun=$this->fn->createCbofromDb("rumpun","id_rumpun as id,nm_rumpun as nm","","");
				$cbodokumen=$this->fn->createCbofromDb("dokumen_tugas_akhir","id_dokumen as id,berkas_dokumen as nm","","");
				$cbostat=$this->fn->createCbo(array(0),array("Belum diverifikasi"),"");
				//$cbostat=$this->fn->createCbo(array(1,0),array("Active","Inactive"),"");
				$txtVal[0]=$this->session->userdata("codeUser");
				$txtVal[8]=$this->session->userdata("name");
				
		}
		$output['formTxt']=array(
								$codeTemp."<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[0]."' readonly>",
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[1]."' required>",
								"<input type='text' class='form-control' id='txtpass' name=txt[] value='".$txtVal[2]."' required>",
								$cbodp1,							
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[4]."' required>",
								$cborumpun,
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[6]."' required>",
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[7]."' required>",
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[8]."' readonly>",
								$cbodokumen,
								$cbostat,
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[11]."' readonly>",
								"<input type='text' class='form-control' id='txtid1' name=txt[] value='".$txtVal[12]."' readonly>"
								);
		
		$output['datamhs']=Array(
									0,
									$txtVal[1],
									$txtVal[2],
									$cbodp1,
									$txtVal[4],
									$cborumpun,
									$txtVal[6],
									$txtVal[7],
									$cbodokumen
									);
									
		//load view
		$this->fn->getheader();
		$this->load->view($this->addPage,$output);
		$this->fn->getfooter();
	}	
	
	public function save()
	{
		//retrieve values
		$savValTemp=$this->input->post('txt');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
	
		//echo implode("<br>",$savEmp);
		$this->Mmain->qIns($this->mainTable,$savValTemp);
		
		//redirect to form
		redirect("mahasiswa/C_judul",'refresh');		
	}
	
	//delete record
	public function delete($valId)
	{		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		$this->Mmain->qDel($this->mainTable,$this->mainPk,$valId);
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
	//update record
	public function update()
	{
		//retrieve values
		$savValTemp=$this->input->post('txt');
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');
		
							
		//echo implode("<br>",$savEmp);
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savheader,$savEmp);
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}
	
}

?>