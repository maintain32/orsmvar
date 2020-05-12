$(document).ready(function () {

    let oViewBooking = {
        init: function () {
            this.showPaymentConfirmationModal('.confirm-payment');
        },

        showPaymentConfirmationModal : function (element) {
            $(element).click(function (e) {
                (async () => {
                  orsm  const { value: color } = await Swal.fire({
                        title: 'Please confirm payment',
                        imageUrl: 'https://unsplash.it/400/200',
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

                    if (color) {
                        Swal.fire({ html: `You selected: ${color}` })
                    }
                })()
            });
        },
    };

    oViewBooking.init();
});
