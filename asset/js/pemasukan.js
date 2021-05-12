$(document).ready(function () {
    $("#table_list_pemasukan").DataTable({
        "responsive": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"],
        "order": [[3, 'desc']],
      }).buttons().container().appendTo('#table_list_pemasukan_wrapper .col-md-6:eq(0)');
});