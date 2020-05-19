<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon"/>

        <title>Exchange Rate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
    </head>
    <body style="background-color: #A9D0F5 !important;">
        <div class="container-fluid" >
            <div class="header">
                <h3>Currency Converter</h3>
            </div>
            <form style="text-align: center;" method="post" action="{{ action('CurrencyConverter@convert') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control col-md-2" id="amount" name="amount" placeholder="Enter Amount to Convert" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control col-md-2" id="from" name="from">
                            <option>From</option>
                           @foreach($availabe_currencies as $currency)
                                <option value="{{$currency}}">{{$currency}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="to" name="to">
                            <option>To</option>
                            @foreach($availabe_currencies as $currency)
                                <option value="{{$currency}}">{{$currency}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                       <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}"/> 
                       <span>*format mm/dd/yyyy</span>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-small btn-success" value="Convert"/>
                    </div>
                </div>
            </form>
            <br>
            <br>
            <br>
            @if(isset($result) && $result != '')
                <div class="container">
                    <p>{{$result['amount']}}  converted form {{$result['from']}} to {{$result['to']}} </p>
                    <h3>{{ $result['res'] }}</h3>
                </div>
            @endif
            </div>
        </div>
    </body>
</html>