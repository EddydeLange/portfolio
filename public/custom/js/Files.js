$(function() {
    $('#Fenno').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false 
    });
});


 function getDeleteButton(){

 	$.post({
    //succes function en dan klaar!
        success: function() {
            
        alert("Data: " + data + "\nStatus: " + status); 
  
        }
     });
}