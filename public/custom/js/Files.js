$(function() {
    $('#filesTable').DataTable({
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
  
      getFiles();    

        function postFile() {
            $.ajax({
                url: 'deleteFiles',
                dataType: 'json',
                type: "post",
                success: function(data){    
                    console.log("kan wel posten!");
                },
                error: function(){
                    console.log('kan niet posten');
                }
            });  
        }

      

    });
});
