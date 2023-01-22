<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange rate</title>

    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
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

        <button class="noselect">Glass</button>
    </section>
</body>

</html>
