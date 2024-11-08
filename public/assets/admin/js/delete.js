// Event listener untuk tombol delete
document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteModalUser');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang ditekan
        var userId = button.getAttribute('idUser'); // Ambil ID user dari data-id
        var deleteForm = document.getElementById('deleteForm');

        // Update action form untuk mengarah ke URL yang sesuai
        deleteForm.action = '/admin/users/' + userId;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteModalLokasi');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang ditekan
        var lokasiId = button.getAttribute('idLokasi'); // Ambil ID user dari data-id
        var deleteForm = document.getElementById('deleteForm');

        // Update action form untuk mengarah ke URL yang sesuai
        deleteForm.action = '/admin/lokasi/' + lokasiId;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteModalWaktu');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang ditekan
        var waktuId = button.getAttribute('idWaktu'); // Ambil ID user dari data-id
        var deleteForm = document.getElementById('deleteForm');

        // Update action form untuk mengarah ke URL yang sesuai
        deleteForm.action = '/admin/waktu/' + waktuId;
    });
});
