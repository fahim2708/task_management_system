$(document).ready(function () {
  display_data();

  function display_data() {
    $.ajax({
      url: "data.php",
      type: "POST",
      data: { res: 1 },
      success: function (data) {
        $("#result").html(data);
      },
    });
  }

  $("#upload").on("click", function () {
    $(this).attr("disabled", "disabled");
    var file = $("#file");
    var file_length = file[0].files.length;
    var file_data = file.prop("files")[0];

    var formData = new FormData();
    formData.append("file", file_data);
    $.ajax({
      url: "upload.php",
      type: "POST",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data == "success") {
          $("#msg").empty();
          $(
            "<center class='text-success'>Successfully uploaded!</center>"
          ).appendTo($("#msg"));
          $("#file").val("");
          display_data();
        } else if (data == "error1") {
          $("#msg").empty();
          $(
            "<center class='text-danger'>Please upload file first!</center>"
          ).appendTo($("#msg"));
          $("#file").val("");
        } else if (data == "error2") {
          $("#msg").empty();
          $("<center class='text-danger'>File too large to upload!").appendTo(
            $("#msg")
          );
          $("#file").val("");
        }

        $("#upload").removeAttr("disabled");
      },
    });
  });
});
