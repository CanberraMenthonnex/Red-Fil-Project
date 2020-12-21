$( document ).ready(function(){
    $.ajax({
        url:"?page=getSurvey",
        dataType:"json",
        success:function(response)
        {
            console.log("sucess")
            response.forEach(message => {
                $("#surveyList").append(
                `<a href="?page=error">${message.question}</a>`,
                // `<p>${message.answer_1} ${message.answer_2} ${message.answer_3} ${message.answer_4}</p>`,
            
                )
            })
        },
            error: function(response){
                console.log("error")
                console.log(response)
            }
    })
})