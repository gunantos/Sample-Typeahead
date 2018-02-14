 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>test</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
   </head>

<body class="bg-dark" style="padding-top:80px;padding-right:80px; padding-left:80px;" id="page-top">
<div id="msg" class="msg"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
	
  <div class="card"><div class="card-body">
     <div class="row"> 
   <div class="col-6">
  <div id="form">
	Tujuan Masuk <div class="form-group">
  <select class="form-control" id="fungsi" name="fungsi" onchange="g_noreg(cari.value);">
    <option value='berangkat'>Berangkat</option>
    <option value='datang'>Kedatangan</option>
  </select>
</div>
	Cari <input type="text" name="_cari" id="cari" class="form-control typeahead" autocomplete="off" required />

Noreg		<input class="form-control" type="text" name="_noreg" value="" id="noreg" disabled>
	Tanggal <input class="form-control" type="text" name="_tanggal" value="" id="tanggal" disabled>
		Test 1 <input class="form-control" type="text" value="" id="text1" name="_text1" disabled>
	Test 2<input class="form-control" type="text" value="" id="text2" name="_text2" disabled>
	<button id="submit" id="btnsimpan" class="btn btn-success">SIMPAN</button>

	
  </div>
 
</div>
 <div id="itemprint">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
           <div class="page" id="print">
                <div class="row">
                  <div class="col s12">
                    <div style="border: 2px solid #000; border-radius: 5px; width: 245px;">
						<div style="text-align: center; margin-top: 5px; margin-left: 5px; font-size: 12px;">
						
						<div id='lbltanggal'></div>

						</div>
						
                    <div id="qrcode" class="text-center" style="margin-top: 10px;"></div>
                      <div style="margin-top: 10px; margin-left: 20px; font-size: 17px;">
					  <table>
					  <thead>
					  <tr class="borderless"><td width='24%'>ID</td><td width='1$'>:</td><td width='75%'><div id='lblnoreg'></div></td></tr>
					  <tr class="borderless"><td width='24%'>Cari</td><td width='1%'>:</td><td width='75%'><div id='lblCari'></div></td></tr>
					  <tr class="borderless"><td width='24%'>Text1</td><td width='1%'>:</td><td width='75%'><div id='lblText1'></div></td></tr>
					  <tr class="borderless"><td width='24%'>Text2</td><td width='1%'>:</td><td width='75%'> <div id='lblText2'></div></td></tr>
					  </thead></table>  
                      </div>
                    </div>            
					</div>
                  
                </div>  
              </div>   
          </div>
        </div><!--/span-->
		</div>
		
		</div></div>
	</div></div>
		</div>
<script src="js/jquery.min.js"></script>
<script src="js/typeahead.js"></script>
<script src="js/script.js"></script>
</body></html>