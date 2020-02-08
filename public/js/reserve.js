$(document).ready(function() {


  let oReserve = {
    init : function(){
        this.saveReservation('#btnReserve');
    },

    saveReservation : function(element){
      $(element).click(function(e){
          e.preventDefault
          oReserve.sendReservationRequest();
      });
    },

    sendReservationRequest : function(){
      $.ajax({
          type: "POST",
          url:  "/server",
          data: $('form').serialize(),
          success: function(data) {
            console.log(data);
            Swal.fire({
                title: data['return_title'],
                text: data['return_msg'],
                type: data['icon']
            });
          }
        });
    }
  };

  oReserve.init();
});
