const Sweetalert = $('.sweetalert').data('sweetalert');
// console.log(Sweetalert);

if (Sweetalert) {
	Swal.fire({
		title: 'Berhasil',
		text: Sweetalert,
		type: 'success'
	});
}

// tombol hapus
$(document).on('click', '.btn-hapus', function (e) {
	e.preventDefault();
	const form = $(this).attr('action'); // disetiap data ada tombol hapus

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data yang di hapus tidak dapat kembali lagi!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus Ini!'
	}).then((result) => {
		if (result.value) {
			document.location.form = form;
		}
	})

});
