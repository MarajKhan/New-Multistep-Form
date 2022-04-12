$("#next1").click(function(){
    $('#frm').validate({
      rules: {
        name: {
          required: true,
          minlength: 6,
        },
        ........
      },
      messages: {
        name: {
          required: "Username required",
        },
        ........
      },
    });
   
  });