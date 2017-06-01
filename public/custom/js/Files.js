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

 	$.post("http://[::1]/portfolio/files/index", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
 }