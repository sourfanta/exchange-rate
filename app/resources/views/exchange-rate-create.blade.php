<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add exchange rate</title>
</head>

<body>
    <form action="/create" method="POST">
        @csrf
        <div class='form-group'>
            <input type="date" name="date" id="date">
        </div>

        <div class='form-group'>
            <input type="text" name="currencyCodeFrom" placeholder="FROM" id="currencyCodeFrom">
        </div>

        <div class='form-group'>
            <input type="text" name="currencyCodeTo" placeholder="TO" id="currencyCodeTo">
        </div>

        <!-- <div class='form-group'>
            <input type="float" name="valueFrom" id="valueFrom">
        </div> -->

        <div class='form-group'>
            <input type="float" name="valueTo" placeholder="PRICE" id="valueTo">
        </div>

        <div class='form-group'>
            <button type="submit">Add</button>
        </div>

    </form>
</body>

</html>
