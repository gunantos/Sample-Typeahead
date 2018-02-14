<?php
$fungsi = (isset($_GET['fungsi']) and $_GET['fungsi'] != '') ? $_GET['fungsi'] : '';
$id = (isset($_GET['cari']) and $_GET['cari'] != '') ? $_GET['cari'] : '000';

$ids = ($fungsi == 'berangkat') ? 'br' : ($fungsi == 'datang') ? 'dt' : 'nn';
switch ($fungsi){
	case "noreg":
	$hasil['status'] = 'true';
	$hasil['msg']= "berhasil ambil noreg";
	$hasil['result'] ='ID-'. $id .''. $ids;
	break;
	
	case "getdata":
	$data = array('test1'=>$id + 2, 'test2'=>4+ $id);;
	$hasil = $data;
	break;
	
	case "getno":
		$hasil = array('1101','1102','1111','1112','1121','11122','1131','1132','1141','1142');
	break;
	
	default:
	$hasil['status'] = 'false';
	$hasil['msg']= "ini halaman pengambilan data";
	$hasil['result'] ='';
	break;
}

echo json_encode($hasil);
