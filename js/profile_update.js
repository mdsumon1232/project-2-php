$(document).ready(function() {
    $('#update_form').submit(function(event) {
      event.preventDefault(); // Prevent default form submission
  
      const formData = new FormData(this); // Create FormData object
       const data = Object.entries(formData.entries());
      // Function to convert FormData to object
      function convertFormDataToObject(formData) {
        const object = {};
        for (const [key, value] of formData.entries()) {
          object[key] = value;
        }
        return object;
      }
  
      const formDataObject = convertFormDataToObject(formData);
  
      
    //  start ajax 

    $.ajax({
        url:'../php/user_update.php',
        type:'POST',
        data:formData,
        processData: false, 
        contentType: false,
        success:(response)=>{
            console.log(response);
        },
        error:(xhr , status , error)=>{
           console.log(error);
        }

    })
  
      
    });
  });
  