
// var options =
// {
//   aspectRatio: 1 / 1,
//   viewMode: 1,
//   crop: function (e) {
//     cropData = $('.js-trimmingAreaImg').cropper("getData");
//     // $("#upload-image-x").val(Math.floor(cropData.x));
//     // $("#upload-image-y").val(Math.floor(cropData.y));
//     // $("#upload-image-w").val(Math.floor(cropData.width));
//     // $("#upload-image-h").val(Math.floor(cropData.height));
//   },
//   zoomable: true,
//   minCropBoxWidth: 162,
//   minCropBoxHeight: 162
// }

// $('.js-trimmingAreaImg').cropper({ aspectRatio: 4 / 4 });
$('#image-file').change(function () {
  // ファイルの取得
  var file = $(this).prop('files')[0];

  // modal表示
  $('#myModal').modal();

  // 画像表示
  var reader = new FileReader();
  reader.onload = function () {
    $('.js-trimmingAreaImg').attr('src', reader.result);
    $('.js-trimmingAreaImg').cropper({ aspectRatio: 4 / 4 });
    // ワイド画面 ⇒ 16 / 9
  }

  reader.readAsDataURL(file);
});

$('.js-trimmingBtn').one('click', function () {
  var img_file = $('.js-trimmingAreaImg').attr('src');
  var data = $('.js-trimmingAreaImg').cropper('getData');
  var image = {
    width: Math.round(data.width),
    height: Math.round(data.height),
    x: Math.round(data.x),
    y: Math.round(data.y),
  };

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: "POST",
    url: "/cropper",
    data: { img_file, image },
    success: function (res) {
      console.log(res);
    }
  });
});