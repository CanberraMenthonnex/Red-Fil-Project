
renderMessages();

$("#submit").click(function(e){
    e.preventDefault();
    let content = $("#messageChat").val();
    $.ajax({
        url:"?page=postMessage",
        method:"POST",
        dataType:"json",
        data:{content},
        success:function(response){
            console.log(content);
            renderMessages();
        }
    })
})

function renderMessages()
{
    $("#messages").html("")
    $.ajax({
        url:"?page=getMessage",
        dataType:"json",
        success:function(response){
            
            response.forEach(message => {
                $("#messages").append(`<p>${message.message}</p>`)
            });
        }
    })
}

