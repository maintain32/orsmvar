$(document).on('ready', function(){
    var oImageSelect = {
        init : function(){
            this.cancelBooking('.cancel-booking');
            this.fileSelect();
            this.submitSelect();
        },

        cancelBooking : function(element){
            $(element).click(function (e) {
                e.preventDefault();
                alert('cancel');
            });
        },

        submitSelect : function(){
            $('.image-preview-submit').click(function(){
                oImageSelect.ajaxRequest();
            });
        },

        fileSelect : function(){
            $(".image-preview-input input:file").change(function (){
                oImageSelect.previewFile(this);
            });
        },

        previewFile : function(oInput){
            if (oInput.files && oInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.receipt-preview').attr('src', e.target.result);
                }
                $(".image-preview-input-title").text("Change");
                $(".image-preview-submit").show();
                $(".image-preview-filename").val(oInput.name);
                reader.readAsDataURL(oInput.files[0]);
            }
        },

        ajaxRequest : function(){
            $.ajax({
                url: '/rest/uploadReceipt',
                method: 'POST',
                data: new FormData($('form')[0]),
                processData: false,
                contentType: false,
            }).done(function(data) {
                if (data['status'] === 200) {
                    Swal.fire({
                        title: 'Receipt Uploaded Successfully',
                        type: 'See you on your event!',
                        timer: 1000,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    location.reload();
                } else {
                    Swal.fire({
                        title: 'Error Occured',
                        type: 'error',
                        text: data['message'],
                        timer: 1000,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        },
                        onClose: () => {
                            Swal.stopTimer();
                        }
                    });
                }
            });
        },
    };

    oImageSelect.init();
});
