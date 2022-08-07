$(document).ready(function () {
    tb_list = $('#tbArtikel').DataTable({
        "ajax": "/AjaxBlog/getArtikelAll",
        select: true,
        columns: [
            // { data: 'id' },
            { data: 'thumbnail' },
            { data: 'judul' },
            { data: 'des' },
            { data: 'fullname' },
            { data: 'status' },
            { data: 'id_blog' },
        ],
        columnDefs: [
            {
                targets: 0,
                render: function (data) {
                    return '<img src="' + data + '" class="img-fluid img-thumbnail">'
                }
            },
            {
                targets: [4],
                render: function (data) {
                    // console.log("data", data)
                    if (data == 1) {
                        return '<div class="form-check form-switch">' +
                            '<input class="form-check-input" id=' + data + ' type="checkbox"  checked>' +
                            '</div>'

                    } else {
                        return '<div class="form-check form-switch"><input class="form-check-input" id=' + data + ' type="checkbox"  >' + '</div>'
                    }
                }
            },
            {
                targets: [5],
                render: function (data) {
                    return '<button type="button" class="btn btn-outline-info btn-sm" id=' + data + ' >Edit</button>'
                }
            },
        ]

    });
    $('#tbArtikel tbody').on('change', 'input', function () {
        var data = tb_list.row($(this).parents('tr')).data();
        var id = $(this).attr('id');
        var cek = $(this).is(':checked');
        var status;
        if (cek) {
            status = 1;
        } else {
            status = 0;
        }
        $.ajax({
            url: '/AjaxBlog/editStatus',
            type: 'POST',
            data: {
                id_blog: data.id_blog,
                status: status
            },
            success: function (data) {
                console.log(data)
            }
        })
    });
    $('#tbArtikel tbody').on('click', 'button', function () {
        var data = tb_list.row($(this).parents('tr')).data();
        var id = $(this).attr('id');
        $.ajax({
            url: '/AjaxBlog/getArtikel',
            type: 'POST',
            data: {
                id_blog: id,
            },
            success: function (data) {
                $("#editArtikel").modal("show");
                $("#judulModalLabel").html("Edit Arikel : " + data.data.judul);
                $(".card-img-top").attr("src", data.data.thumbnail);
                $(".card-title").html("Penulis : " + data.data.judul);
                $(".card-text").html(data.data.fullname);
                $("#inputThumbnail").val(data.data.thumbnail);
                $("#inputLokasi").val(data.data.kota);
                $("#inputTanggal").val(data.data.tanggal);
                $("#inputJudul").val(data.data.judul);
                $("#inputDeskripsi").val(data.data.des);
                $("#inputKonten").val(data.data.konten);
                $("#hidden").val(data.data.id);
                console.log(data.data)
            }
        })
    });
    $('#upload_artikel').on('submit', function (e) {
        e.preventDefault();
        console.log('submit');
        // var formData = new FormData(this);
        // console.log(formData);
        $.ajax({
            url: '/AjaxBlog/update_artikel',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                document.getElementById("upload_artikel").reset();
                $("#editArtikel").modal("hide");
                tb_list.ajax.reload();
            }
        });
    });
});
