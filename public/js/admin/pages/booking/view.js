$(document).ready(function () {

    let oViewBooking = {
        sUploadPaymentLink : '',
        init: function () {
            this.showPaymentConfirmationModal('.confirm-payment');
        },

        showPaymentConfirmationModal : function (element) {
            $(element).click(function (e) {
                let iReservationId = $(this).data('id');
                oViewBooking.getUploadedReceipt(iReservationId);
                oViewBooking.confirmReceipt();
            });
        },

        getUploadedReceipt : function(iReservationId) {
            $.ajax({
                url: '/rest/getUploadedReceipt',
                method: 'POST',
                data: {
                    reservation_id : iReservationId
                }
            }).done(function(data) {
                console.log(data['message']);
                oViewBooking.sUploadPaymentLink = 'https://unsplash.it/400/200';
                if (data['status'] === 200) {
                    oViewBooking.sUploadPaymentLink = data['message'];
                }
            });
        },

        confirmReceipt : function(){
            (async () => {
                const { value: payment } = await Swal.fire({
                    title: 'Please confirm payment',
                    imageUrl: oViewBooking.sUploadPaymentLink,
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    html:
                        '<label> <input type="radio" name="swal2-radio" value="full-payment"> <span class="swal2-label"> Full Payment </span> </label> &nbsp;&nbsp;&nbsp;&nbsp;'+
                        '<label> <input type="radio" name="swal2-radio" value="partial-payment"> <span class="swal2-label"> Partial Payment </span> </label> <br>' +
                        '<span class="swal2-label"> Amount Paid: </span> <input id="swal-input2" class="swal2-input">',
                    focusConfirm: false,
                    preConfirm: () => {
                        return [
                            $("input[name='swal2-radio']:checked").val(),
                            document.getElementById('swal-input2').value
                        ]
                    }
                });

                if (payment) {
                    Swal.fire({ html: `You selected: ${payment}` })
                }
            })()
        }
    };

    oViewBooking.init();
});
