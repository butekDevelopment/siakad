<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  validasistudytracer extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Commonfunction','','fn');
		
		$this->load->library('FPDF','','fnpdf');
				
		//if(!isset($this->session->userdata['name']))		
			//redirect("login","refresh");
	}
	/*	
		====================================================== Variable Declaration =========================================================
	*/
	
	var $mainTable="tracer_study";
	var $mainPk="id_Tracer";
	var $viewLink="validasistudytracer";
	var $breadcrumbTitle="Validasi";
	var $viewPage="modul5/v_validasi";
	var $addPage="modul5/v_validasi";
	
	//query
	var $ordQuery=" ORDER BY id ";
	var $tableQuery="tracer_study a
					inner join mahasiswa b ON a.mahasiswa_NIM=b.NIM";
	var $fieldQuery="a.id_Tracer as id,
					 a.mahasiswa_NIM,
					 a.Time_Stamp,
					 a.Jenis_Kelamin,
					 a.Angkatan,
					 a.Alamat_Sekarang,
					 a.No_Telepon,
					 a.Status_Alumni,
					 a.Masa_Tunggu,
					 a.Tingkat_Studi,
					 a.Jenis_Usaha,
					 a.Jabatan,
					 a.Perusahaan,
					 a.Gaji,
					 a.Kesesuaian_Bidang,
					 a.Saran_dan_Masukan
					 ";  //leave blank to show all field
						
	var $primaryKey="id";
	var $updateKey="a.id_Tracer";
	
	//auto generate id
	var $defaultId="STD001";
	var $prefix="STD";
	var $suffix="001";	
	
	//view (hapus)
	var $viewFormTitle="Validasi";
	var $viewFormTableHeader=array(
									"Id Tracer",
									"Mahasiswa NIM",
									"Timestamp",
									"Jenis Kelamin",
									"Angkatan",
									"Alamat",
									"No. Telepon",
									"Status Alumni",
									"Masa Tunggu",
									"Tingkat Studi",
									"Jenis Usaha",
									"Jabatan",
									"Perusahaan",
									"Gaji",
									"Kesesuaian Bidang",
									"Saran & Masukan"
									 );
	
	//save (complete)
	var $saveFormTitle="Validasi";
	var $saveFormTableHeader=array(
									"Id Tracer",
									"Mahasiswa NIM",
									"Timestamp",
									"Jenis Kelamin",
									"Angkatan",
									"Alamat",
									"No. Telepon",
									"Status Alumni",
									"Masa Tunggu",
									"Tingkat Studi",
									"Jenis Usaha",
									"Jabatan",
									"Perusahaan",
									"Gaji",
									"Kesesuaian Bidang",
									"Saran & Masukan"
									 );
	
	//update
	var $editFormTitle="Edit Validasi";
	
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
		$output['detLink']=$this->viewLink."/det";
	
		$output['saveLink']=$this->viewLink."/add";
		$output['printLink']=$this->viewLink."/printing";
		$output['deleteLink']=$this->viewLink."/delete";
		$output['primaryKey']=$this->primaryKey;
		$output['tableHeader']=$this->viewFormTableHeader;
		$output['noadd']=1;
		$output['nodel']=1;
		$output['noedit']=1;
		
		//render view
		//$this->fn->getheader();
		$this->load->view($this->viewPage,$output);
		//$this->fn->getfooter();
	}
	

	//Edit
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
			$this->fieldQuery="	a.id_Tracer as id,
								a.mahasiswa_NIM,
								a.Time_Stamp,
								a.Jenis_Kelamin
								a.Angkatan,
								a.Alamat_Sekarang,
								a.No_Telepon,
								a.Status_Alumni
								a.Masa_Tunggu,
								a.Tingkat_Studi,
								a.Jenis_Usaha
								a.Jabatan,
								a.Perusahaan,
								a.Gaji,
								a.Kesesuaian_Bidang,
								a.Saran_dan_Masukan
								";
			$render=$this->Mmain->qRead($this->tableQuery,$this->fieldQuery,$this->mainPk." = '".$pid."'");
			foreach($render->result() as $row)
			{
				foreach($row as $col)
				{
					$txtVal[]= $col;
				}
			}
			
				$cbojkel=$this->fn->createCbo(array(1,2),array("Perempuan","Laki-laki"),"");
				$cbosesuai=$this->fn->createCbo(array(1,2),array("Sesuai","Tidak Sesuai"),"");
				$cboalumni=$this->fn->createCbo(array(1,2,3),array("Melanjutkan Study","Bekerja","Tidak Melanjutkan Study dan Tidak Bekerja"),"");
				$cbousaha=$this->fn->createCbo(array(1,2,3,4,5),array("PNS","BUMN","Swasta","Wiraswasta","Lainnya"),"");
				//$cbosex=$this->fn->createCbo(array(1,0),array("Male","Female"),$txtVal[8]);
		}
		else //Tambah
		{	
				for($i=0;$i<count($this->saveFormTableHeader);$i++)
				{
					$txtVal[]="";
				}	
				
				//generate id
				$newId=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
				//$txtVal[7]=$this->Mmain->autoId("tb_user","id_user","US","US01","01");	
				//$txtVal[0]=$newId;
				
				$cbojkel=$this->fn->createCbo(array(1,2),array("Perempuan","Laki-laki"),"");
				$cbosesuai=$this->fn->createCbo(array(1,2),array("Sesuai","Tidak Sesuai"),"");
				$cboalumni=$this->fn->createCbo(array(1,2,3),array("Melanjutkan Study","Bekerja","Tidak Melanjutkan Study dan Tidak Bekerja"),"");
				$cbousaha=$this->fn->createCbo(array(1,2,3,4,5),array("PNS","BUMN","Swasta","Wiraswasta","Lainnya"),"");
				//$cbostat=$this->fn->createCbo(array(1,0),array("Active","Inactive"),"");
		}
		$output['formTxt']=array(
								$codeTemp."<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[0]."' readonly>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[1]."'>",
								"<input type='text' class='form-control dtp' data-date-format='yyyy-mm-dd' id='txtid0' name=txt[] value='".$txtVal[2]."'>",
								$cbojkel,
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[4]."'>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[5]."'>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[6]."'>",
								$cboalumni,
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[8]."'>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[9]."'>",
								$cbousaha,
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[11]."'>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[12]."'>",
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[13]."'>",
								$cbosesuai,
								"<input type='text' class='form-control' id='txtid0' name=txt[] value='".$txtVal[15]."'>"
								
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
		
		
		//$savValTemp[0]=$this->Mmain->autoId($this->mainTable,$this->mainPk,$this->prefix,$this->defaultId,$this->suffix);	
		
		//echo implode("<br>",$savEmp);
		$this->Mmain->qIns($this->mainTable,$savValTemp);
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
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
		$this->Mmain->qUpd($this->mainTable,$this->mainPk,$savValTemp[0],$savValTemp);
		
		//redirect to form
		redirect($this->viewLink,'refresh');		
	}



	public function printing($id)
	{
		
		
		//save to database
		$this->load->database();
		$this->load->model('Mmain');		
		
	$this->fieldQuery="a.id_Tracer as id,
					 a.mahasiswa_NIM,
					 a.Time_Stamp,
					 a.Jenis_Kelamin,
					 a.Angkatan,
					 a.Alamat_Sekarang,
					 a.No_Telepon,
					 a.Status_Alumni,
					 a.Masa_Tunggu,
					 a.Tingkat_Studi,
					 a.Jenis_Usaha,
					 a.Jabatan,
					 a.Perusahaan,
					 a.Gaji,
					 a.Kesesuaian_Bidang,
					 a.Saran_dan_Masukan
					 ";
		$renderTemp=$this->Mmain->qRead($this->tableQuery." WHERE a.id_Tracer='".$id."' ".$this->ordQuery,$this->fieldQuery,"");
		if($renderTemp->num_rows()>0)
		{
			$mkiri=50;
			$mkiri2=40;
			$mtabkiri=100;
			$heightkiri=5;
			
		$row=$renderTemp->row();
		
		$pdf = $this->fnpdf;
		$pdf->AddPage("L","A4");
		
		//header
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(0,7,'FORM STUDY TRACER',0,1,'C');
		$pdf->Ln();
		
		//sub header
		
		$pdf->SetFont('Arial','',11);
		$pdf->Cell($mkiri,$heightkiri,'ID TRACER  ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->id,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'NIM MAHASISWA ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->mahasiswa_NIM,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'TIME STAMP  ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Time_Stamp,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'JENIS KELAMIN  ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Jenis_Kelamin,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'JENIS ANGKATAN ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Angkatan,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'ALAMAT ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Alamat_Sekarang,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'No. Telepon ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->No_Telepon,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'STATUS ALUMNI ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Status_Alumni,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'MASA TUNGGU ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Masa_Tunggu,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'Tingkat Studi ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Tingkat_Studi,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'JENIS USAHA ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Jenis_Usaha,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'JABATAN ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Jabatan,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'PERUSAHAAN ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Perusahaan,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'GAJI ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Gaji,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'KESESUAIAN BIDANG ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Kesesuaian_Bidang,0,1);
		
		$pdf->Ln();
		$pdf->Cell($mkiri2,$heightkiri,'SARAN DAN MASUKAN ',0);
		$pdf->Cell($mtabkiri,$heightkiri," : ".$row->Saran_dan_Masukan,0,1);
		
		$pdf->Ln();
		
		
		$pdf->Output("I");
			
		}
		//$pdf=$this->fnpdf;
		
	}

	
}

?>