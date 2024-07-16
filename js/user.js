$.ajax({
    url: '../php/data_share.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        if (response.status === 'success') {
            // Access the session data in JavaScript
            const {user_id ,first_name,last_name,bio,prorile_img ,cover_img } = response.user;
            // Display the session data on the page
           $("#cover").attr('src' ,`${cover_img ? cover_img : '../images/post.jpg'}`);
           $("#profile").attr('src' , `${prorile_img ? prorile_img : '../images/user.png'}`);
           $("#user_name").text(first_name + " " + last_name);
           $("#bio").text(`${bio ? bio : 'BIO'}`);
        } else {
            console.error('Error:', response.message);
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error('AJAX error:', textStatus, errorThrown);
    }
});