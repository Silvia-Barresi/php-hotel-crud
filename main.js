
function getPagamenti(){

  $.ajax({

    url:'getPagamenti.php',
    method: 'GET',
    success: function(data){

      // console.log(data);

      var payment = $('#paymentlist');

      for (var status of data) {
          console.log(status);

          payment.append('<li>' + status + '</li>');
      }


    },
    error: function(err){

      console.error(err);
    }

  })


}


function init(){

  getPagamenti()

};

$(document).ready(init);
