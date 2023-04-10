function isAsosiy() {
  window.location.href = '/';
}

// Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
(function () {
  'use strict'

  // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
  var forms = document.querySelectorAll('.needs-validation')

  // Зацикливайтесь на них и предотвращайте отправку
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

$('body').on('click', '.password-control', function(){
	if ($('#InputPassword, #RegPassword').attr('type') == 'password'){
		$(this).addClass('view');
		$('#InputPassword, #RegPassword').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#InputPassword, #RegPassword').attr('type', 'password');
	}
	return false;
});


$(function() {
  var $avatarImage, $avatarInput, $avatarForm;
  $avatarImage = $('#avatarImage');
  $avatarInput = $('#avatarInput');
  $avatarForm = $('#avatarForm');
  $avatarImage.on('click', function() {
      $avatarInput.click();
  });
  $avatarInput.on('change', function() {
      var formData = new FormData();
      formData.append('photo', $avatarInput[0].files[0]);
      $.ajax({
          url: $avatarForm.attr('action') + '?' + $avatarForm.serialize(),
          method: $avatarForm.attr('method'),
          data: formData,
          processData: false,
          contentType: false
      }).done(function(data) {
          if (data.success)
              $avatarImage.attr('src', data.path);
      }).fail(function() {
          alert('Natog`ri formatida.');
      });
  });
});
