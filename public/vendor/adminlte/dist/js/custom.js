$(function () {

  //$(".alert-danger").fadeOut(5000);

  // Show or hide input for special page form
  $(".special_category").change(function () {
    var value = $(this).val();
    if (value == 2) {
      $('.show_paypal').slideUp('normal');
    }
    if (value == 1) {
      $('.show_paypal').slideDown('normal');
    }
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#profile-img-tag').attr('src', e.target.result);
        $('#profile-img-tag').fadeIn('normal');
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#profile-img").change(function () {
    readURL(this);
  });

  function readURLEdit(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#profile-img-tag-edit').attr('src', e.target.result);
        $('#profile-img-tag-edit').fadeIn('normal');
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#profile-img-edit").change(function () {
    readURLEdit(this);
  });
});