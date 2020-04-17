$( document ).ready(function() {
    $('#loginBtn').click(function() {
        var sUsername = document.getElementById('logUsername').value;
        var sPassword = document.getElementById('logPw').value;
        doLogin(sUsername, sPassword, 'ajaxMicroblogLogin');
    });
});

function doLogin(sUsername, sPassword, ajaxFunction){
    if (sUsername.length === 0 || sPassword.length === 0) {
        alert('username or password is empty');
        document.getElementById('logUsername').style.borderColor = 'red';
        document.getElementById('logPw').style.borderColor = 'red';
        return;
    }

    document.getElementById('logUsername').style.borderColor = 'black';
    document.getElementById('logPw').style.borderColor = 'black';

    ajaxLogin(sUsername, sPassword);
}

function ajaxLogin(sUsername, sPassword){
    $.ajax(
    {
        url: '/rest/doLogin',
        method: 'POST',
        data:
        {
            'username' : sUsername,
            'password' : sPassword
        },
        dataType: 'json',
        success: function(data)
        {
            if(data['status'] === 200){
                alert('Succesful Logged!');
                location.assign('/dashboard');
            }else{
                alert('Sorry! Wrong credentials.');
            }
        },
        error: function (data)
        {
            alert('Server Error!');
        }
    });
}
