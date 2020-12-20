$("#resetButton").click(function(){
    window.location.reload();
});


$( "form" ).submit(function( event ) {
    data = ( $( this ).serializeArray() );
    
    
    sendData = {
        question:data[0]["value"],
        asw1:data[1]["value"],
        asw2:data[2]["value"],
        asw3:data[3]["value"],
        asw4:data[4]["value"],
    }
    event.preventDefault();
    console.log(sendData);
    $.ajax({
        url:"?page=sendSurvey",
        method:"POST",
        dataType:"json",
        data:sendData,
        success:function(response){
            console.log("Sucess");
            alert("Sondage ajouté");
            $("#respond").append("Survey bien ajouté");
            
        },
        error :function(){
            console.log("error");
            $("#respond").append("Survey non ajouté");
            window.location.reload();
            
        }
    })
  });
