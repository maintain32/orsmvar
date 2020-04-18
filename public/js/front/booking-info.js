$(document).on('ready', function(){
    let oImageSelect = {
        init : function(){
            this.fileSelect();
            this.clearSelect();
        },

        clearSelect : function(){
            $('.image-preview-clear').click(function(){
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
            });
        },

        fileSelect : function(){
            $(".image-preview-input input:file").change(function (){
                oImageSelect.previewFile(this, 'receipt-preview');
            });
        },

        previewFile : function(oInput, element){
            if (oInput.files && oInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.'+element).attr('src', e.target.result);
                }

                reader.readAsDataURL(oInput.files[0]);
            }
        }
    };

    oImageSelect.init();
});
