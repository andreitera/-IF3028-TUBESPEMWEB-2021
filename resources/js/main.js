function load() {
    $('#content').load('Lapor/load');
}

$(document).ready(function () {
    load();
});

function add() {
    var data = $('#form_add').serialize();
    $.ajax({
        type: 'POST',
        url: 'Lapor/add',
        data: data,
        cache: false,
        success: function() {
            alert('Berhasil menambah laporan!');
            load();
        }
    });
    $('#form_add').trigger('reset');
}

function upd(id) {
    var isi = prompt('Ubah isi laporan menjadi:');
    
    if(isi.length < 20) {
        alert('Isi minimal 20 karakter.');
    } else {
        var data = 'update_id=' + id + '&update_isi=' + isi;
    
        $.ajax({
            type: 'POST',
            url: 'Lapor/update',
            data: data,
            cache: false,
            success: function() {
                alert('Berhasil mengupdate laporan!');
                load();
            }
        });
    }
}

function del(id) {
    var form_id = '#form_delete' + id;
    var data = $(form_id).serialize();
    $.ajax({
        type: 'POST',
        url: 'Lapor/delete',
        data: data,
        cache: false,
        success: function() {
            alert('Berhasil menghapus laporan!');
            load();
        }
    });
}