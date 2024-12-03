<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div
            class="alert alert-primary mt-3"
            role="alert"
        >
            <strong>Введите координаты</strong>
        </div>
        
        <form action="checkout.php" method="post" id="weatherForm">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Долгота</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lon"
                            id=""
                        />
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Широта</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lat"
                            id=""
                        />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Отправить
                    </button>
                    
                </div>
            </div>
            <div class="row justify-content-center mt-3" id="weatherAlert" style="display: none">
                <div class="col-3">
                    <div
                        class="alert alert-success text-center"
                        role="alert"
                    >
                        <strong>Температура сейчас:</strong> <span id="currentTemp"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3" id="errorsAlert0" style="display: none">
                <div class="col-3">
                    <div
                        class="alert alert-danger text-center"
                        role="alert"
                    >
                        <span id="errors0"></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3" id="errorsAlert1" style="display: none">
                <div class="col-3">
                    <div
                        class="alert alert-danger text-center"
                        role="alert"
                    >
                        <span id="errors1"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src="scripts/main.js"></script>
</html>