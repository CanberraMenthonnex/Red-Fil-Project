$("#buttonSearch").click(function (e) { 
    e.preventDefault();
    let content = $("#inputAddFriend").val();
    console.log("Fonction ajax lancée"); 
    $.ajax({
        url:"?page=searchFriend",
        method:"POST",
        dataType:"json",
        data:{content},
        success:function(response){
            console.log("voici response: " + response);
            $("#message").append(response);

        },error:function(response){
            $("#message").append("Ami ajouté ;)");
        }
    })
});