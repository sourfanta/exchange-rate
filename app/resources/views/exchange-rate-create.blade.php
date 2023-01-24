<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add exchange rate</title>

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" defer=""></script>

    @vite([
        'resources/css/create-button.css',
        'resources/css/date-picker.css',
        'resources/js/date-picker.js',
        'resources/css/exchange-rate.css',
        'resources/css/select.css',
        'resources/css/input.css'
    ])
</head>

<body>
<section>
    <h1>Add exchange rate</h1>

    @if($errors->any())
        <p style="color:red">Error: {{ $errors->first() }}</p>
    @endif

    <form action="/create" method="POST">
        @csrf
        <!-- Date Picker Input -->
        <div class="datepicker date input-group p-0 shadow-sm">
            <input type="text" name="date" placeholder="Choose date" class="form-control py-4 px-4" id="reservationDate" autocomplete="off">
            <div class="input-group-append"><span class="input-group-text px-4"><i class="fa fa-clock-o"></i></span></div>
        </div>
        <!-- End Date Picker Input -->

        <!-- Select Currency From -->
        <div class="select" name="currencyCodeFrom" >
            <select>
                @foreach($currencyArray as $currency)
                    <option value="{{ $currency }}">{{ $currency }}</option>
                @endforeach
            </select>
        </div>
        <!-- End Select Currency From -->

        <!-- Select Currency To -->
        <div class="select" name="currencyCodeTo" >
            <select>
                @foreach($currencyArray as $currency)
                    <option value="{{ $currency }}">{{ $currency }}</option>
                @endforeach
            </select>
        </div>
        <!-- End Select Currency To -->

        <!-- Input Price -->
        <input type="float" class="form__input" id="valueTo" name="valueTo" placeholder="Price" />
        <!-- End Input Price -->

        <button class="create-button" type="submit">Add</button>
    </form>
</section>
</body>

</html>
