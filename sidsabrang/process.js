function search(){
	$("#loading").show(); // Tampilkan loadingnya

	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "search.php", // Isi dengan url/path file php yang dituju
        data: {NIKAJU : $("#NIKAJU").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya

            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#NAMAAJU").val(response.NAMAAJU); // set textbox dengan id nama
				$("#JKAJU").val(response.JKAJU); // set textbox dengan id jenis kelamin
				$("#STATUSAJU").val(response.STATUSAJU); // set textbox dengan id telepon
				$("#PEKERJAANAJU").val(response.PEKERJAANAJU); // set textbox dengan id alamat
			}else{ // Jika isi dari array status adalah failed
				alert("Data Tidak Ditemukan");
			}
		},
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.responseText);
        }
    });
}

$(document).ready(function(){
	$("#loading").hide(); // Sembunyikan loadingnya

    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });

    $("#NIKAJU").keyup(function(event){ // Ketika user menekan tombol di keyboard
		if(event.keyCode == 13){ // Jika user menekan tombol ENTER
			search(); // Panggil function search
		}
	});
});
