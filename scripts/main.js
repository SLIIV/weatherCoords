$errorsCount = 2;
$('#weatherForm').on('submit', function (e) {
    e.preventDefault();
    const formData = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "checkout.php",
        data: formData,
        dataType: "json",
        success: function (response) {
            $('#weatherAlert').hide();
            for(var $i = 0; $i < $errorsCount; $i++)
            {
                $('#errorsAlert' + $i).hide();
            }
            $currentErrors = 0;
            $error = false;
            if(Array.isArray(response)) {
                response.forEach(element => {
                    if(element.error) {
                        $('#errors' + $currentErrors).html(element.message);
                        $('#errorsAlert' + $currentErrors).show();
                        $currentErrors++;
                        $error = true
                    }
                });
            }
            if($currentErrors == 0) {
                $('#currentTemp').html(response.current.temp + "℃");
                $('#weatherAlert').show();
            }
        }
    });
});