$(document).ready(function () {

    var oViewBooking = {
        sUploadPaymentLink : '',
        oPaymentDetails : {},
        iReservationId : '',

        init: function () {
            this.showPaymentConfirmationModal('.confirm-payment');
        },

        showPaymentConfirmationModal : function (element) {
            $(element).click(function (e) {
                oViewBooking.iReservationId = $(this).data('id');
                oViewBooking.getUploadedReceipt(oViewBooking.iReservationId);
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
                oViewBooking.sUploadPaymentLink = 'https://unsplash.it/400/200';
                if (data['status'] === 200) {
                    oViewBooking.sUploadPaymentLink = data['message'];
                    oViewBooking.confirmReceipt();
                } else {
                    alert(data['message']);
                }
            });
        },

        confirmReceipt : async function(){
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
                    if ($("input[name='swal2-radio']:checked").val() && $('#swal-input2').val()) {
                        oViewBooking.oPaymentDetails = {
                            'booking_id'     : oViewBooking.iReservationId,
                            'payment_status' : $("input[name='swal2-radio']:checked").val(),
                            'payment_amount' : $('#swal-input2').val(),
                        };
                        return oViewBooking.oPaymentDetails;
                    } else {
                        Swal.showValidationMessage('Please enter missing inputs')
                    }

                }
            });

            if (payment) {
                oViewBooking.sendPaymentConfirmation(payment);
                // Swal.fire({ html: `You selected: ${payment}` })
            }
        },

        sendPaymentConfirmation : function(payment) {
            $.ajax({
                url: '/rest/sendPaymentConfirmation',
                method: 'POST',
                data: oViewBooking.oPaymentDetails
            }).done(function(data) {
                if (data['status'] === 200) {
                    Swal.fire({
                        title: 'Successfully Updated Database',
                        type: 'success',
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
        }
    };

    oViewBooking.init();
});
