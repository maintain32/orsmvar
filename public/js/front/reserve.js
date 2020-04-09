$(document).ready(function () {

    let oReserve = {
        init: function () {
            this.saveReservation('#btnReserve');
        },

        saveReservation: function (element) {
            $(element).click(function (e) {
                e.preventDefault();
                oReserve.sendReservationRequest();
            });
        },

        sendReservationRequest: function () {
            $.ajax({
                type: "POST",
                url: "/rest/saveBooking",
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

    oReserve.init();
});
