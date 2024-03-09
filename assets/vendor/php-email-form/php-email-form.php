$(document).ready(function () {
    $("form.php-email-form").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      var formData = form.serialize();
      $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: formData,
        success: function (response) {
          // Handle success, show success message
          form.find(".sent-message").html(response).show();
          form.find(".error-message").hide();
        },
        error: function (response) {
          // Handle errors, show error message
          form.find(".error-message").html(response).show();
          form.find(".sent-message").hide();
        },
      });
    });
  });