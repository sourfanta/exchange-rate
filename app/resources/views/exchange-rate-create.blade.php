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
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <label for="currencyCodeFrom">Currency code from</label>
        <input type="text" name="currencyCodeFrom" id="currencyCodeFrom">
        <label for="currencyCodeTo">Currency code to</label>
        <input type="text" name="currencyCodeTo" id="currencyCodeTo">
        <label for="valueFrom">Value from</label>
        <input type="float" name="valueFrom" id="valueFrom">
        <label for="valueTo">Value to</label>
        <input type="float" name="valueTo" id="valueTo">
        <button type="submit">Add</button>
    </form>
</body>

</html>
