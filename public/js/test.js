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
// $("#image-file").change(function() {
// // ファイルの取得
// var file = $(this).prop("files")[0];

// // modal表示
// $("#myModal").modal();

// // 画像表示
// var reader = new FileReader();
// reader.onload = function() {
//     $(".js-trimmingAreaImg").attr("src", reader.result);
//     $(".js-trimmingAreaImg").croppie({ aspectRatio: 1 / 1 });
//     // ワイド画面 ⇒ 16 / 9
//     reader.readAsDataURL(file);
// };
$(function() {
    $("#test").on("click", function() {
        var file_input = $("#file-input");
        var file = file_input[0].files[0];
        // FileReaderで選択したファイルの読み込み
        var fileReader = new FileReader();
        fileReader.onload = function(e) {
            var bytes = e.target.result;
            // EXIF.readFromBinaryFileでexifの解析
            var exif = EXIF.readFromBinaryFile(bytes);
            // 結果を表示
            var result = "";
            // EXIF.getTag(this, "[exifのタグ名]")で、値を取得
            result += "DateTimeOriginal:" + exif["DateTimeOriginal"];
            result += "<br>";
            result += "Orientation:" + exif["Orientation"];
            $("#result").html(result);
        };
        fileReader.readAsArrayBuffer(file);
    });
});

$uploadCrop = $("#image-file").croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: "circle"
    },
    boundary: {
        width: 300,
        height: 300
    }
});

// });

$(".js-trimmingBtn").one("click", function() {
    var img_file = $(".js-trimmingAreaImg").attr("src");
    var data = $(".js-trimmingAreaImg").cropper("getData");
    var image = {
        width: Math.round(data.width),
        height: Math.round(data.height),
        x: Math.round(data.x),
        y: Math.round(data.y)
    };

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        type: "POST",
        url: "/croppie",
        data: { img_file, image },
        success: function(res) {
            console.log(res);
        }
    });
});

// $(function() {
//     var $preview = $(".js-croppie");

//     var $croppie = $preview.croppie({
//         url: "http://placekitten.com/500/800",
//         viewport: {
//             width: 200,
//             height: 200
//         },
//         boundary: {
//             width: 300,
//             height: 300
//         }
//     });

//     $croppie.on("update.croppie", function(e, cropData) {
//         $('input[name="x1"]').val(cropData.points[0]);
//         $('input[name="y1"]').val(cropData.points[1]);
//         $('input[name="x2"]').val(cropData.points[2]);
//         $('input[name="y2"]').val(cropData.points[3]);
//     });

//     $(".js-crop").on("click", function() {
//         $croppie.croppie("result", "base64").then(function(base64) {
//             $croppedImage = $(".js-cropped-image");
//             $croppedImage.html("");
//             $("<img>")
//                 .attr("src", base64)
//                 .appendTo($croppedImage);
//         });
//     });
// });

// let basic = $(".croppie").croppie({
//     viewport: {
//         width: 150,
//         height: 200
//     }
// });
// basic.croppie("bind", {
//     url: "demo/cat.jpg",
//     points: [77, 469, 280, 739]
// });
// //on button click
// basic.croppie("result", "html").then(function(html) {
//     // html is div (overflow hidden)
//     // with img positioned inside.
// });
