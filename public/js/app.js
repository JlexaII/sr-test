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

$('body').on('click', '.password-control', function () {
    if ($('#InputPassword, #RegPassword').attr('type') == 'password') {
        $(this).addClass('view');
        $('#InputPassword, #RegPassword').attr('type', 'text');
    } else {
        $(this).removeClass('view');
        $('#InputPassword, #RegPassword').attr('type', 'password');
    }
    return false;
});

$avatarInput.on('change', function () {
    var formData = new FormData();
    formData.append('photo', $avatarInput[0].files[0]);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: $avatarForm.attr('action') + '?' + $avatarForm.serialize(),
        method: $avatarForm.attr('method'),
        data: formData,
        processData: false,
        contentType: false
    }).done(function (data) {
        if (data.success)
            $avatarImage.attr('src', data.path);
    }).fail(function () {
        alert('Rasm boshqa formatda.');
    });
});

function digits_float(target) {
    val = $(target).val().replace(/[^0-9.]/g, '');
    if (val.indexOf(".") != '-1') {
        val = val.substring(0, val.indexOf(".") + 3);
    }
    val = val.replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
    $(target).val(val);
}

$(function ($) {
    $('body').on('input', '#price', function (e) {
        digits_float(this);
    });
    digits_float('#price');
});
