function onProvinsiChange(id) {
	var s_kotakab = document.getElementById("s_kotakab");
	s_kotakab.options.length = 0;
	s_kotakab.options.add(new Option("- Pilih provinsi terlebih dahulu -", ""));

	var s_kecamatan = document.getElementById("s_kecamatan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));

	var s_kelurahan = document.getElementById("s_kelurahan");
	s_kelurahan.options.length = 0;
	s_kelurahan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));

	if (id != ""){
		$.get('provinsi/getChild/' + id, function( data ) {
			s_kotakab.options.length = 0;
			if (data.length == 0){
				s_kotakab.options.add(new Option("- Tidak ada kota / kabupaten untuk provinsi ini -", ""));
			}else{
				s_kotakab.options.add(new Option("- Pilih kota / kabupaten -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kotakab.options.add(new Option(option.nama_kotakab, option.id));
			}
		});
	}
}
function onEdProvinsiChange(id) {
	var s_kotakab = document.getElementById("edit_s_kotakab");
	s_kotakab.options.length = 0;
	s_kotakab.options.add(new Option("- Pilih provinsi terlebih dahulu -", ""));

	var s_kecamatan = document.getElementById("edit_s_kecamatan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
	    
	var s_kelurahan = document.getElementById("edit_s_kelurahan");
	s_kelurahan.options.length = 0;
	s_kelurahan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));

	if (id != ""){
		$.get('provinsi/getChild/' + id, function( data ) {
			s_kotakab.options.length = 0;
			if (data.length == 0){
				s_kotakab.options.add(new Option("- Tidak ada kota / kabupaten untuk provinsi ini -", ""));
			}else{
				s_kotakab.options.add(new Option("- Pilih kota / kabupaten -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kotakab.options.add(new Option(option.nama_kotakab, option.id));
			}
		});
	}
}
function onKotakabChange(id) {
	var s_kecamatan = document.getElementById("s_kecamatan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
	if (id != ""){
		$.get('kotakab/getChild/' + id, function( data ) {
			s_kecamatan.options.length = 0;
			if (data.length == 0){
				s_kecamatan.options.add(new Option("- Tidak ada kecamatan untuk kota / kabupaten ini -", ""));
			}else{
				s_kecamatan.options.add(new Option("- Pilih kecamatan -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kecamatan.options.add(new Option(option.nama_kecamatan, option.id));
			}
		});
	}
}
function onEdKotakabChange(id) {
	var s_kecamatan = document.getElementById("edit_s_kecamatan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kota / kabupaten terlebih dahulu -", ""));
	if (id != ""){
		$.get('kotakab/getChild/' + id, function( data ) {
			s_kecamatan.options.length = 0;
			if (data.length == 0){
				s_kecamatan.options.add(new Option("- Tidak ada kecamatan untuk kota / kabupaten ini -", ""));
			}else{
				s_kecamatan.options.add(new Option("- Pilih kecamatan -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kecamatan.options.add(new Option(option.nama_kecamatan, option.id));
			}
		});
	}
}
function onKecamatanChange(id) {
	var s_kecamatan = document.getElementById("s_kelurahan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));
	if (id != ""){
		$.get('kecamatan/getChild/' + id, function( data ) {
			s_kecamatan.options.length = 0;
			if (data.length == 0){
				s_kecamatan.options.add(new Option("- Tidak ada kelurahan untuk kecamatan ini -", ""));
			}else{
				s_kecamatan.options.add(new Option("- Pilih kelurahan -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kecamatan.options.add(new Option(option.nama_kelurahan, option.id));
			}
		});
	}
}
function onEdKecamatanChange(id) {
	var s_kecamatan = document.getElementById("edit_s_kelurahan");
	s_kecamatan.options.length = 0;
	s_kecamatan.options.add(new Option("- Pilih kecamatan terlebih dahulu -", ""));
	if (id != ""){
		$.get('kecamatan/getChild/' + id, function( data ) {
			s_kecamatan.options.length = 0;
			if (data.length == 0){
				s_kecamatan.options.add(new Option("- Tidak ada kelurahan untuk kecamatan ini -", ""));
			}else{
				s_kecamatan.options.add(new Option("- Pilih kelurahan -", ""));
			}

			for (index = 0; index < data.length; ++index) {
				option = data[index];
				s_kecamatan.options.add(new Option(option.nama_kelurahan, option.id));
			}
		});
	}
}