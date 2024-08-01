$('#create_post').submit( e =>{
    e.preventDefault();
    
    const formData = new FormData(e.target);

    $.ajax({
        url:'../php/post_update.php',
        type:"POST",
        data:formData,
        processData:false,
        contentType:false,
        success:( response) =>{
            console.log(response);
            location.href="../html/index.php";
        },
        error:(xhr , status , error)=>{
            console.log(error);
        }
    })
})

  