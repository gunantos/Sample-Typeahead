function tampilkanwaktu(){
	    var waktu = new Date();
        var sh = waktu.getHours() + ""; 
        var sm = waktu.getMinutes() + "";
        var ss = waktu.getSeconds() + "";
		var tgl = waktu.getDate() + "";
		var blns = waktu.getMonth()+1 + "";
		var thn = waktu.getFullYear() + "";
		var hasil =thn + "-" + (blns.length==1?"0"+blns:blns) + "-" + (tgl.length==1?"0"+tgl:tgl) + " " + (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
   		$("#lbltanggal").html(hasil);
		$("#tanggal").val(hasil);
    }
	
function auto_platno()
{
	var jenis = $('#cari').val;
	  $('#cari').typeahead({
	            source: function (query, result) {
                $.ajax({
					url: 'proses.php',
					data: 'fungsi=getno&cari='+query,          
                    dataType: "json",
                    type: "GET",
                    success: function (data) {
					result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            },
			updater:function (item) {
			$.ajax({
			url: 'proses.php',
			data: { cari: item, fungsi: "getdata" },          
            dataType: "json",
            type: "GET",
			success: function(data){
					$("#text1").val(data.test1);	
					$("#text2").val(data.test2);
					$("#lblText1").html(data.test1);	
					$("#lblText2").html(data.test2);
					$("#lblCari").html($('#cari').val());
					g_noreg(jenis);
					
				}
			});
        	return item;
			}
        });
}

function g_noreg(nobus)
{
	var jenis = $("#cari").val();
	var request = $.ajax({	method: "GET",
							url: 'proses.php',
							data: { cari: jenis, fungsi: "noreg" }, 
							dataType: "json" });
		request.done(function(r) {
			$("#lblnoreg").html(r.result);
			$("#noreg").val(r.result);
		});
		
		request.fail(function( jqXHR, textStatus ) {
				alert( "terjadi Kesalahan: " + textStatus.msg );
		});
}

		
$(document).ready(function(){
	setInterval('tampilkanwaktu()', 1000);
	auto_platno();
	$(document).keypress(function(e) {
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
		simpan();
    }});

$("#submit").click(function(){simpan();});	
});