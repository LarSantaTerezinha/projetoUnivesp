$('.showPass').click(function() {
    if($(this).hasClass('bi-eye')) {
        $(this).removeClass('bi-eye');
        $(this).addClass('bi-eye-slash');
        $('#password').attr('type', 'text');
    } else {
        $(this).removeClass('bi-eye-slash');
        $(this).addClass('bi-eye');
        $('#password').attr('type', 'password');
    }
});

$('#login').click(function() {
    var username = $('#user').val();
    var password = $('#password').val();
    if(username == '' && password == '') {
        $('#error').html('Por favor, usuário e senha são obrigatórios');
        setTimeout(function() {
            $('#error').html('');
        }, 10000);
        $('#user').focus();
        return;
    };
    if(username == '' && password != '') {
        $('#error').html('Por favor, usuário é obrigatório');
        setTimeout(function() {
            $('#error').html('');
        }, 10000);
        $('#user').focus();
        return;
    } else if(username != '' && password == '') {
        $('#error').html('Por favor, senha é obrigatória');
        setTimeout(function() {
            $('#error').html('');
        }, 10000);
        $('#password').focus();
        return;
    };
    var data = {
        username: username,
        password: password
    };
    $.ajax({
        url: '/login',
        type: 'POST',
        data: data,
        success: function(data) {
            if (data == 'success') {
                window.location.href = '/home';
            } else {
                alert('Login failed');
            }
        }
    });
});