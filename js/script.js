
    $(document).ready(function(){
        if($(document).ready <= 10){
        $('#tel-1').mask('(00) 0000-0000');
        $('#tel-2').mask('(00) 0000-0000');
        }else {
          $('#tel-1').mask('(00) 00000-0000');
          $('#tel-2').mask('(00) 00000-0000');
        }
    });
