
    const passwordInput = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const show = document.getElementById('eye_open');
    const hidden = document.getElementById('eye_close');
    const confirmEyeOpen = document.getElementById('confirm-eye_open') ;
    const confirmEyeClose = document.getElementById('confirm-eye_close');
  
    passwordInput.addEventListener('focus' , ()=>{
       show.style.display="block";
       show.addEventListener('click' , ()=>{
        show.style.display ="none";
        hidden.style.display ="block";
        passwordInput.type ='text';
       })
       hidden.addEventListener('click' , ()=>{
        hidden.style.display = "none";
        show.style.display = "block";
        passwordInput.type = "password";
       })
    })

  
    confirmPassword && confirmPassword.addEventListener('focus' , ()=>{
       confirmEyeOpen.style.display="block";
       confirmEyeOpen.addEventListener('click' , ()=>{
        confirmEyeOpen.style.display="none";
        confirmEyeClose.style.display = "block";
        confirmPassword.type ="text";
       })
       confirmEyeClose.addEventListener('click' , ()=>{
         confirmEyeClose.style.display="none";
         confirmEyeOpen.style.display="block";
         confirmPassword.type = "password";
       })
    })