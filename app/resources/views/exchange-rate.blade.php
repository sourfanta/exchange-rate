<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange rate</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    @vite([
        'resources/css/create-button.css',
        'resources/css/exchange-rate.css',
        'resources/css/exchange-rate-table.css',
        'resources/js/exchange-rate-table.js'
    ])

</head>

<body>
    <section>
        <!--for demo wrap-->
        <h1>Exchange rate</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Price</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($exchangeRate as $item)
                    <tr>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->currencyCodeFrom }}</td>
                        <td>{{ $item->currencyCodeTo }}</td>
                        <td>{{ $item->valueTo }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="create-button" onclick="window.location=`{{ route('create-post') }}`">Create</button>
    </section>
</body>

</html>
