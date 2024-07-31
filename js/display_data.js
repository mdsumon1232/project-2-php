
$.ajax({
    url:'../php/post_display.php',
    type:'GET',
    dataType:'json',
    success:(response =>{
        response.map(data =>{
           console.log(data);
           const {first_name ,last_name ,article,image,profile_img, create_at } = data;
           console.log(first_name , last_name);
           
            let post_content = `
            <div class="post" id="post_content">
            <div class="post_header">
              <div class="profile_info">
                <div class="profile_img">
                  <img src="${profile_img ? profile_img : '../images/user.png'}" alt="user" />
                </div>
                <div class="profile_name">
                  <p>${first_name + " " + last_name}</p>
                  <p class="post_date">10:30PM , 10-11-2024</p>
                </div>
              </div>
              <div class="post_action">
                <span id="postAction"><i class="fa-solid fa-ellipsis-vertical"></i></span>
                <ul class="action_list" id="post_action_list">
                  <li><a href="">Edit</a></li>
                  <li><a href="">Delete</a></li>
                </ul>
              </div>
            </div>
            <div class="mind_test">
              <p>${article && article}</p>
            </div>
            <div class="post_image">
              <img src="${image && image} " />
            </div>
            <div class="comments">
              <div class="comment">
                <img src="../images/user.png" alt="" />
                <div class="comment-text">
                  <div>
                    <p>this is demo comment . this is demo comment . </p>
                    <p class="comment_time">10th jun 2024</p>
                  </div>
                  <span id="comment_action_dot"><i class="fa-solid fa-ellipsis-vertical comment_dot"></i></span>
                  <ul id="comment_action">
                    <li><a href="">Edit</a></li>
                    <li><a href="">Delete</a></li>
                  </ul>
                </div>
              </div>
            </div>
              </div>
        `;

        $("#posts_container").append(post_content);

        })
    }),
    error:(xhr , status ,error)=>{
        console.log(error);
    }
})