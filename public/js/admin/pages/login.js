//
// (function ($) {
//     "use strict";
//
//
//     /*==================================================================
//     [ Focus input ]*/
//     $('.input100').each(function(){
//         $(this).on('blur', function(){
//             if($(this).val().trim() != "") {
//                 $(this).addClass('has-val');
//             }
//             else {
//                 $(this).removeClass('has-val');
//             }
//         })
//     })
//
//
//     /*==================================================================
//     [ Validate ]*/
//     var input = $('.validate-input .input100');
//
//     $('.validate-form').on('submit',function(){
//         var check = true;
//
//         for(var i=0; i<input.length; i++) {
//             if(validate(input[i]) == false){
//                 showValidate(input[i]);
//                 check=false;
//             }
//         }
//
//         return check;
//     });
//
//
//     $('.validate-form .input100').each(function(){
//         $(this).focus(function(){
//            hideValidate(this);
//         });
//     });
//
//     function validate (input) {
//         if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
//             if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
//                 return false;
//             }
//         }
//         else {
//             if($(input).val().trim() == ''){
//                 return false;
//             }
//         }
//     }
//
//     function showValidate(input) {
//         var thisAlert = $(input).parent();
//
//         $(thisAlert).addClass('alert-validate');
//     }
//
//     function hideValidate(input) {
//         var thisAlert = $(input).parent();
//
//         $(thisAlert).removeClass('alert-validate');
//     }
//
//     /*==================================================================
//     [ Show pass ]*/
//     var showPass = 0;
//     $('.btn-show-pass').on('click', function(){
//         if(showPass == 0) {
//             $(this).next('input').attr('type','text');
//             $(this).addClass('active');
//             showPass = 1;
//         }
//         else {
//             $(this).next('input').attr('type','password');
//             $(this).removeClass('active');
//             showPass = 0;
//         }
//
//     });
//
//
// })(jQuery);

$(document).ready(function () {

    let oLogin = {

        init : function() {
            this.doAdminLogin('#doAdminLogin');
        },

        doAdminLogin : function(sElement) {
            $(sElement).click(function (e) {
                e.preventDefault();
                location.replace('/dashboard');
                // oLogin.sendLoginRequest();
            });
        },

        sendLoginRequest : function () {
            $.ajax({
                type: "POST",
                url: "/rest/doAdminLogin",
                data: $('form').serialize(),
                success: function (data) {
                    Swal.fire({
                        title: data['return_title'],
                        text: data['return_msg'],
                        type: data['icon']
                    });

                    if (data['icon'] === 'success') {
                        location.replace('/reservation/' + data['booking_code']);
                    }
                }
            });
        }
    };
    oLogin.init();
});
