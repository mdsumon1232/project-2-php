$("#signupForm").submit((e)=>{
  e.preventDefault();

  const first_name = $("#firstName").val();
  const last_name = $("#lastName").val();
  const email = $("#email").val();
  const password = $("#password").val();
  const confirm_password = $("#confirmPassword").val();

  if(first_name === "" || last_name === "" || email === "" || password === "" || confirm_password === "" ){
    $("#form_action_message").text("all flied required");
  }
  else{
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if(!emailPattern.test(email)){
         $("#form_action_message").text("invalid email");
      }
      else{
        const password_patten = /((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6})/;
        if(password_patten.test(password) || password_patten.test(confirm_password)){
            if(password === confirm_password){

                $.ajax({
                    url: '../php/authentication.php', 
                    type: 'POST', 
                    data: {
                        first_name : first_name,
                        last_name:last_name,
                        email :email,
                        password : password,
                        confirm_password:confirm_password

                    }, 
                    success: function( response) {
                        const result = JSON.parse(response);
                                if (result.status === "success") {
                                    location.href="../html/login.php";
                                    alert('result.message');
                                } else {
                                    $("#form_action_message").text(result.message);
                                }
                        
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            else{
                $("#form_action_message").text("password not match");
            }
        }
        else{
            $("#form_action_message").text("required formate -> Hey123@")
        }

      }
  }
   
})

$("#submit").click(()=>{
   



})