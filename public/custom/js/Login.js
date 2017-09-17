$(document).ready(function() {

	$("#LoginForm").on("submit", function (e) {
        e.preventDefault()
        let form = $(this).serialize()
        $.ajax({
            url: base_url + '/Login/Login',
            data: form,
            method: 'POST',
            success: result => {
                console.log(JSON.parse(result))
            },
            error: error => {
                console.error(JSON.parse(error))
            }   
        })
    });

});



$(document).ready(function() {

    $("#LoginForm").on("submit", function (e) {
        e.preventDefault();
        var form = $(this).serialize();
        $.ajax({
            url: base_url + '/Login/Login',
            data: form,
            method: 'POST'
        })
            .done(function(result) {
                console.log(result);
                if (result != 'false') {
                    document.location.href = '/portfolio/Files/index';
                } else {
                    alert('use the corect credentials');
                }
            });
       });

});