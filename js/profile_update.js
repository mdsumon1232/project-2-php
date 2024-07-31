$(document).ready(function() {
    $('#update_form').submit(function(event) {
      event.preventDefault(); 
  
      const formData = new FormData(this); 
      
    //  start ajax 

    $.ajax({
        url:'../php/user_update.php',
        type:'POST',
        data:formData,
        processData: false, 
        contentType: false,
        success:(response)=>{
            location.href = "../html/profile.php";
        },
        error:(xhr , status , error)=>{
           console.log(error);
        }

    })
  
      
    });
  });
  