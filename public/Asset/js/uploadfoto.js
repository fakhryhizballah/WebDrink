function onFileUpload(input, id) {
  id = id || "#ajaxImgUpload";
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(id).attr("src", e.target.result).width(300);
    };
    reader.readAsDataURL(input.files[0]);
    $(".uploadBtn").prop("disabled", false);
  }
}

function thumbnail(id, nama) {
  $("#fotoModal").modal("show");
  $(".uploadBtn").prop("disabled", true);
    "Upload Foto Maps : " + nama;
  $("#fotoModal").on("hidden.bs.modal", function () {
    console.log("close Modal");
    $("#ajaxImgUpload").attr("src", "https://via.placeholder.com/300");
    document.getElementById("finput").value = null;
    $(".uploadBtn").html("Upload");
    // $(".uploadBtn").prop("enabled");
    $(".uploadBtn").prop("disabled", true);
    $("#finput").removeClass('is-invalid');
    document.getElementById("upload_image_form").reset();
    return;
  });
}
$("#upload_image_form").on("submit", function (e) {
  $(".uploadBtn").html("Uploading ...");
  // $(".uploadBtn").prop("Disabled");
  $(".uploadBtn").prop("disabled", true);
  e.preventDefault();
  console.log("thumbnail  " + Math.floor(Math.random() * 10));
  $.ajax({
    method: "POST",
    data: new FormData(this),
    processData: false,
    contentType: false,
    cache: false,
    dataType: "json",
    url: "/AjaxBlog/thumbnail/",
    success: function (res) {
      console.log(res);
      if (res.status == 407) {
        // alert("Gagal Upload");
        console.log(res.data.alt);
        if (res.file) {
          $("#finput").addClass("is-invalid");
          $("#valid-file").html(res.data.file);
        }

        $(".uploadBtn").html("Upload");
        $(".uploadBtn").prop("disabled", false);
      }

      if (res.error == false) {
        $("#ajaxImgUpload").attr("src", "https://via.placeholder.com/300");
        $("#alertMsg").html(res.data);
        $("#alertMessage").show();
        document.getElementById("upload_image_form").reset();
        $("#myToast").toast("show");
        $(".uploadBtn").html("Upload");
        $(".uploadBtn").prop("Enabled");
        tb_list.ajax.reload();
        return;
      }
      else if (res.error == true) {
        $("#alertMsg").html(res.data);
        $("#alertMessage").show();
        setTimeout(function () {
          $("#alertMsg").html("");
          $("#alertMessage").hide();
        }, 4000);
        $(".uploadBtn").html("Upload");
        $(".uploadBtn").prop("Enabled");
        document.getElementById("upload_image_form").reset();
        return;
      }
    },
    error: function (err) {
      console.log(err);
    }
  });
});
