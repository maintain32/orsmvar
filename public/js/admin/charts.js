$(document).ready(function()
{
    var oDashboard = {
        aReportData : [],
        init : function() {
            this.getData();
            this.setCancelledReport();
            this.setIncomeReport();
            this.setReservedBooking();
            this.setEventSummary();
        },
        getData : function() {
            $.ajax({
                url: '/rest/getDashboardData',
                method: 'POST',
            }).done(function(data) {
                console.log(data);
            });
        },
        setCancelledReport : function(aCancelKey, aCancelValue) {

        },
        setIncomeReport : function(aIncomeKey, aIncomeValue) {

        },
        setReservedBooking : function(aReserveKey, aReserveValue) {

        },
        setEventSummary : function(aEventsKey, aEventsValue) {

        }
    };

    oDashboard.init();

    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: ["2013", "2014", "2015", "2016"],
            datasets: [
                {
                    label: "Bookings",
                    backgroundColor: "#01B8AA",
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ]
                }, {
                    label: "Refunds",
                    backgroundColor: "#5F6B6D",
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Resort\'s Cancelled Bookings & Refund'
            }
        }
    });
});
$(document).ready(function()
{
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [{
                label: 'Bookings',
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: "rgba(255,61,103,0.3)"
            }, {
                label: 'Earnings',
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: "rgba(34,206,206,0.3)"
            }]
        }
    });
});
