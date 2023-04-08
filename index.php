<!DOCTYPE html>
<html lang="en">
<head>
    <body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- prime number check -->
<form action="./controller/primeNum.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prime Number Check</label>
    <input name="num" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!--  Convert Celsius to Fahrenheit -->
<form action="./controller/CelsiusToFahrenheit.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Convert Celsius to Fahrenheit</label>
    <input name="celsius" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!--  Convert Fahrenheit to Celsius -->
<form action="./controller/FahrenheitToCelsius.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Convert Fahrenheit to Celsius</label>
    <input name="fahrenheit" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
    </html>