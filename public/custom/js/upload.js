$("#submitQuestions").on("click", function () {
    var form = $("#questionsForm").serialize();
    $.ajax({
       type: "POST",
       url: "getAnswers",
       data: form,

       success: function(data){
       },
       error: function(){
       }
     });
     event.preventDefault();
     return false;
});
