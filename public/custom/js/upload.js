$("#submitQuestions").on("click", function () {
    var form = $("#questionsForm").serialize();
    $.ajax({
       type: "POST",
       url: "getAnswers",
       data: form,

       success: function(data){
            console.log(data);
            console.log('Successful!');
       }

     });
     event.preventDefault();
     return false;
});
