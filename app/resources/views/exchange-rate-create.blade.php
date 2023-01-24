<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add exchange rate</title>
</head>

<body>
    @if($errors->any())
        <p style="color:red">Error: {{ $errors->first() }}</p>
    @endif

    <form action="/create" method="POST">
        @csrf
        <input type="date" name="date" id="date">

        <select id="currencyCodeFromSelect" name="currencyCodeFrom" class="form-select">
            <option selected>Currency</option>
            @foreach($currencyArray as $currency)
                <option value="{{ $currency }}">{{ $currency }}</option>
            @endforeach
        </select>

        <select id="currencyCodeToSelect" name="currencyCodeTo"  class="form-select">
            <option selected>Currency</option>
            @foreach($currencyArray as $currency)
                <option value="{{ $currency }}">{{ $currency }}</option>
            @endforeach
        </select>

{{--        <input type="float" name="valueFrom" id="valueFrom">--}}

        <input type="float" name="valueTo" placeholder="PRICE" id="valueTo">
        <button type="submit">Add</button>
    </form>
</body>

</html>
