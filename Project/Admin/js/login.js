$(document).ready(function(){
    $('#login').click(function() {
        if ($('#name').val()=='loannt72@wru.vn ' && $('#pass').val()=='loannguyen') {
            window.location.href='Quantrihethong.html';
        }else{
          $( ".notification" ).show();
      }
});
});