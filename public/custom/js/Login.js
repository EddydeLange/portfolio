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