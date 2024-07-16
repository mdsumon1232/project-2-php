$("#login").submit((e) =>{
    e.preventDefault();
   const email = $("#email").val();
   const password = $("#password").val();
   
   $.ajax({
    url:'../php/login.php',
    type:"POST",
    data:{
        email:email,
        password: password
    },
    success:(response)=>{
        console.log(response);
        const result = JSON.parse(response);
                if (result.status === "success") {
                    location.href = "../html/index.php"; 
                    alert("login successful");
                } else {
                    $("#form_action_message").text(result.message);
                }
    },
    error:(xhr , status , error)=>{
        console.log(error);
    }
   })
})