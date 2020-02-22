$(function() {
  var dateAndTime = function() {
    $('#m_date').datepicker({
      'format': 'm/d/yyyy',
      'autoclose': true
    });
			console.log(new Date());

    $('#checkin_date').datepicker({
      'format': 'yyyy-mm-dd',
      'autoclose': true,
			'startDate':  new Date(),
    }).on('changeDate', function (event) {
			var tomorrow = new Date(event.format());
			tomorrow.setDate(tomorrow.getDate() + 1);
			console.log(tomorrow);
			$("#checkout_date").datepicker({
		      'format': 'yyyy-mm-dd',
		      'autoclose': true,
					'startDate' : tomorrow,
			}).on('changeDate', function (event) {
				var tomorrow = new Date(event.format());
				tomorrow.setDate(tomorrow.getDate() + 1);
				console.log(tomorrow);
				$("#checkin_date").datepicker({
						'endDate' : new Date(),
						'todayHighlight' : true,
					});
				console.log(tomorrow);
		});
	});

    $('#m_time').timepicker();
  };
  dateAndTime();
});
