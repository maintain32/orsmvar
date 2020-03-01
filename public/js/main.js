$(function () {
        var tomorrow = moment().add(1, 'days');
        $('#checkin_date').datetimepicker({
          format: "DD MMMM YYYY",
          minDate: tomorrow
        });
        $('#checkout_date').datetimepicker({
            format: "DD MMMM YYYY",
            minDate: tomorrow,
            useCurrent: false, //Important! See issue #1075
        });
        $("#checkin_date").on("dp.change", function (e) {
            $('#checkout_date').data("DateTimePicker").minDate(e.date);
                    var nameInput = document.getElementById('checkin_date');
                    console.log(nameInput.value);
        })
        $("#checkout_date").on("dp.change", function (e) {
            $('#checkin_date').data("DateTimePicker").maxDate(e.date);
        });
    });
