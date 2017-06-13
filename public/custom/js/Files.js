$(function() {
    $('.filesTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false 
    });    
});


$(document).ready(function(){ 
    $(".deleteBTN").click(function deleteFiles(){
        $.ajax({
            url: 'deleteFiles',
            dataType: 'json',
            type: "post",
            success: function(data){    
                console.log("kan posten!");
            },
            error: function(){
                console.log('error');
            }
        });  
    });
});
