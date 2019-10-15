$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$uploadCrop = $('#upload-demo').croppie({
  enableExif: true,
  viewport: {
    width: 200,
    height: 200,
    type: 'circle'
  },
  boundary: {
    width: 300,
    height: 300
  }
});


$('#upload').on('change', function () {
  $('#myModal').modal();
});

$('#myModal').on('shown.bs.modal', function () {
  var reader = new FileReader();
  reader.onload = function (e) {
    $uploadCrop.croppie('bind', {
      url: e.target.result
    }).then(function () {
      console.log('jQuery bind complete');
    });
  }
  reader.readAsDataURL($("#upload").prop('files')[0]);
})



$('.js-trimmingBtn').on('click', function (ev) {
  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'original',
    // quality: 1
  }).then(function (resp) {
    $.ajax({
      url: "/image-crop",
      type: "POST",
      data: { "image": resp },
      success: function (data) {
        //   html = '<img src="' + resp + '" />';
        //   $("#upload-demo-i").html(html);
        $('#myModal').modal('hide');
        $('.profile_image').attr('src', resp);

      }
    });
  });
});

