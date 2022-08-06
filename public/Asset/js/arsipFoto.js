var tb_list
$(document).ready(function () {
    tb_list = $('#tbfoto').DataTable({
        "ajax": "/AjaxBlog/getFotoAll",
        select: true,
        columns: [
            { data: 'id' },
            { data: 'url' },
            { data: 'url' },
            { data: 'alt' },
        ],
        columnDefs: [
            {
                targets: 1,
                render: function (data) {
                    return '<img src="' + data + '" class="img-fluid img-thumbnail">'
                }
            }
        ]

    });
});

