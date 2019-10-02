
// $(function () {
//   $('#image_file').change(function (e) {
//     //ファイルオブジェクトを取得する
//     var file = e.target.files[0];
//     var reader = new FileReader();

//     //画像でない場合は処理終了
//     if (file.type.indexOf("image") < 0) {
//       alert("画像ファイルを指定してください。");
//       return false;
//     }

//     //アップロードした画像を設定する
//     reader.onload = (function (file) {
//       return function (e) {
//         $("#img1").attr("src", e.target.result);
//         $("#img1").attr("title", file.name);
//       };
//     })(file);
//     reader.readAsDataURL(file);

//   });
// });


//moto
$(function () {
  // 初期設定
  var options =
  {
    aspectRatio: 1 / 1,
    // viewMode: 1,
    // crop: function (e) {
    //   cropData = $('.js-trimmingAreaImg').cropper("getData");
    //   $("#upload-image-x").val(Math.floor(cropData.x));
    //   $("#upload-image-y").val(Math.floor(cropData.y));
    //   $("#upload-image-w").val(Math.floor(cropData.width));
    //   $("#upload-image-h").val(Math.floor(cropData.height));
    // },
    // zoomable: true,
    // minCropBoxWidth: 162,
    // minCropBoxHeight: 162
  }

  // 初期設定をセットする
  $('.js-trimmingAreaImg').cropper(options);

  // $("#image-file").change(function () {
  //   // ファイル選択変更時に、選択した画像をCropperに設定する
  //   $('#myModal').modal();
  //   $('.js-trimmingAreaImg').cropper('replace', URL.createObjectURL(this.files[0]));
  // });
});


//shin
$("#image-file").on("change", function () {
  // selectImage();
  $('#myModal').modal();
  $('.js-trimmingAreaImg').cropper('replace', URL.createObjectURL(this.files[0]));

});

$('.js-trimmingBtn').on('click', function () {

  // crop のデータを取得
  var img_file = $('.js-trimmingAreaImg').attr('src');
  var data = $('.js-trimmingAreaImg').cropper('getData');

  // 切り抜きした画像のデータ
  // このデータを元にして画像の切り抜きが行われます
  var image = {
    width: Math.round(data.width),
    height: Math.round(data.height),
    x: Math.round(data.x),
    y: Math.round(data.y),
    _token: 'jf89ajtr234534829057835wjLA-SF_d8Z' // csrf用
  };

  // post 処理
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
    // });
    // $.post('/cropper', image, function (res) {
    //   // 成功すれば trueと表示されます
    //   console.log(res);
    // });

  });




  // function selectImage() {
  //   var file = document.getElementById('image-file').files[0];
  //   showFileName(file)
  //   var reader = new FileReader();
  //   reader.onload = function () {
  //     showFileImage(reader)
  //   }
  //   reader.readAsDataURL(file);
  // };

  // function showFileName(file) {
  //   var fileName = file.name
  //   $(".js-fileName").text(fileName)
  // };

  // function showFileImage(reader) {
  //   $(".js-previewImageBlock").css("border", "none")
  //   $('.js-preaviewImage').attr("src", reader.result);
  //   $(".js-trimmingAreaImg").attr("src", reader.result)
  // };

  // $(".js-trimmingModal").on("shown.bs.modal", function () {
  //   var image = $(".js-trimmingAreaImg")[0];
  //   var options = { aspectRatio: 1 / 1 };
  //   $(".js-trimmingAreaImg").cropper(image, options);
  //   //   var cropper = new Cropper(image, options);
  //   //   //ボタンをクリックしたらトリミング終了
  //   //   $(".js-trimmingBtn").one("click", function (e) {
  //   //     //トリミングしたデータ
  //   //     var result = cropper.getCroppedCanvas({ width: 500, height: 500 })
  //   //     //トリミングデータを表示
  //   //     $(".js-trimmedImg").attr("src", result.toDataURL())
  //   //     // 一旦トリミングしたらトリミングのデータはリセット
  //   //     cropper.destroy()
  //   //     // モーダル非表示
  //   //     $(".js-trimmingModal").modal("hide")
  //   //   });
});