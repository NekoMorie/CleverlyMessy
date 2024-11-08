// Event listener untuk tombol delete
document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Tombol yang ditekan
        var lokasiId = button.getAttribute('data-id'); // Ambil ID user dari data-id
        var deleteForm = document.getElementById('deleteForm');

        // Update action form untuk mengarah ke URL yang sesuai
        deleteForm.action = '/admin/lokasi/' + lokasiId;
    });
});
