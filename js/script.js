$(function(){

    $('.myForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                number: true,
                minlength: 10
            },
            email: {
              required: true,
              email: true
            }
          },
        messages: {
            name: {
                required: "Пожалуйста, введите имя",
                minlength: "Не менее двух символов"
            },
            phone: {
                required: "Пожалуйста, введите номер телефона",
                number: "Пожалуйста, вводите числовой формат номера",
                minlength: "Введите номер в формате 0 хх ххх хх хх"
            },
            email: {
              required: "Пожалуйста, введите адрес электронной почты",
              email: "Введите почту в формате name@domain.com"
            }
        }
    });

    $('.myForm').on('submit', function(e){
        e.preventDefault();

        let form = $(this);
        let btnSend = form.find('.btn-send');

        if(!form.valid() || btnSend.hasClass('loading')){
            return;
        }

        btnSend.addClass('loading');
        $.post('app.php', form.serialize(), function(data){
            if(data === '1'){
                form.slideUp(300, function(){
                    form.after('<div class="success">Form successfully sent!</div>');
                })
            } else {
                alert(data);
                btnSend.removeClass('loading');
            }
        });
        console.log(1);
    });
})