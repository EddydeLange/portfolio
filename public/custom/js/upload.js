$(function() {
    $('#overviewPeople, #overviewAssignments').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});

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