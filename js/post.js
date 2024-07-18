
    $('#create_post').submit( e =>{
        e.preventDefault();
        
        const formData = new FormData(e.target);

        $.ajax({
            url:'../php/create_post.php',
            type:"POST",
            data:formData,
            processData:false,
            contentType:false,
            success:( response) =>{
                console.log(response);
            },
            error:(xhr , status , error)=>{
                console.log(error);
            }
        })
    })
  
      


  