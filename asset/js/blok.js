$(document).ready(function () {
    $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };
    var t = $("#table_list_blok").dataTable({
        // ganti bahasa datatable jadi bahasa indonesia
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
        },
        initComplete: function () {
            var api = this.api();
            $('#mytable_filter input')
                .off('.DT')
                .on('keyup.DT', function (e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: { "url": "http://localhost/sip/blok/json", "type": "POST" },
        columns: [
            {
                "data": "id",
                "orderable": false
            },
            { "data": "block_kavling" },
            { "data": "nama_asset" },
            { "data": "harga_jual" },
            { "data": "luas_tanah" },
            { "data": "keterangan" },
            { "data": "aksi", "orderable":false },
            // dibikin off karena untuk search nya, kalau gadikasih ini gabisa cari dari nim dan nama dan judul soale satu kolom banyak data
            // { "data": "penulis", "visible": false, "searchable": true },
            // { "data": "nim", "visible": false, "searchable": true },
            // { "data": "judul", "visible": false, "searchable": true },
        ],
        // order menurut urutan kolom
        order: [[2, 'desc']],
        rowCallback: function (row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });

});