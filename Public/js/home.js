$( document ).ready(function(){
    $.ajax({
        url:"?page=getSurvey",
        dataType:"json",
        success:function(response)
        {
            console.log("sucess")
            response.forEach(message => {
                $("#surveyList").append(
                `<p>${message.user}</p>`,
                `<p>${message.question}</p>`,
                `<p>${message.answer_1} ${message.answer_2} ${message.answer_3} ${message.answer_4}</p>`,
                "<hr>"
                )
            })
        },
            error: function(){
                console.log("error")
            }
    })
})