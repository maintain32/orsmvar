$(function () {
        var tomorrow = moment().add(1, 'days');
        $('#checkin_date').datetimepicker({
          format: "YYYY-MM-DD",
          minDate: tomorrow
        });
    });
