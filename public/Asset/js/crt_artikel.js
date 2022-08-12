function thumbnail(id, nama) {
  $("#urlModal").modal("show");
}

var tb_list;
$(document).ready(function () {
  tb_list = $("#tbfoto").DataTable({
    ajax: "/AjaxBlog/getFotoAll",
    select: true,
    columns: [
      { data: "id" },
      { data: "url" },
      // { data: "url" },
      { data: "alt" },
    ],
    columnDefs: [
      {
        targets: 1,
        render: function (data) {
          return '<img src="' + data + '" loading="lazy" class="img-fluid img-thumbnail">';
        },
      },
    ],
  });

  $("#tbfoto tbody").on("click", "td", function () {
    var data = tb_list.row($(this).parents("tr")).data();

    console.log(data);
    $("#inputThumbnail").val(data.url);
    $(".card-img-top").attr("src", data.url);
    $("#urlModal").modal("hide");
  });

  $("#inputThumbnail").on("change", function () {
    console.log(this.value);
    $(".card-img-top").attr("src", this.value);
  });
});
