<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div style="padding: 20px;">
        <img src="{{ asset('logo.png') }}" width="50" alt="">
        <hr>
        <h3>{{ $data['name'] }}</h3>
        <h5>
            {{ $data['email'] }}
        </h5>

        <p>
            {{ $data['message'] }}
        </p>
    </div>
</body>
</html>