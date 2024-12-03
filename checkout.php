<?
    $errors = array();
    if(empty($_POST["lon"])) {
        array_push($errors, array('error' => true, 'message' => 'Ошибка: поле длина не заполнено'));
    }
    if(empty($_POST["lat"])) {
        array_push($errors, array('error' => true, 'message' => 'Ошибка: поле ширина не заполнено'));
    }
    if(!empty($errors)) {
        echo json_encode($errors);
        exit;
    }

    $lon = $_POST["lon"];
    $lat = $_POST["lat"];

    $url = "https://api.openweathermap.org/data/3.0/onecall?lat=".$lat."&lon=".$lon."&exclude=hourly,daily&units=metric&appid=6df78e473d45b3ce773f87118d6523a3";
    echo getWeatherInfo($url);

    function getWeatherInfo($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
?>