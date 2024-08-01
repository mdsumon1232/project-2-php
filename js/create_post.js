$("#create_post_input").click(()=>{
    location.href="../html/post.php";
});


$(document).on("click", "#postAction", function() {
    const actionItem = $(this).next(".action_list");
    if (actionItem.css("display") === "none") {
        actionItem.css("display", "block");
    } else {
        actionItem.css("display", "none");
    }
});
