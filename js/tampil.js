$(document).ready(function() {
	selesai();
});

function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 500);
}

function update() {
	$.getJSON("loadtampil.php", function(data) {
		$(document.getElementById("valhuruf")).empty();
		$(document.getElementById("valnomor")).empty();
		$(document.getElementById("valruang")).empty();
		$(document.getElementById("valtujuan")).empty();
		$.each(data.result, function() {
			var hasil = this['huruf']
			var hasil1 = this['nomor']
			var hasil2 = this['ruang']
			var hasil3 = this['tujuan']
			$(document.getElementById("valhuruf")).attr("value", hasil);
			$(document.getElementById("valnomor")).attr("value", hasil1);
			$(document.getElementById("valruang")).attr("value", hasil2);
			$(document.getElementById("valtujuan")).attr("value", hasil3);
		});
	});
}