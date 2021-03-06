<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            display: flex;
            flex-wrap: wrap;
        }

        .card {
            margin: 0.5rem;
            width: calc(100% / 5 - 1rem);
        }

        .card img {
            width: 100%;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body></body>
<div class="flex-center position-ref full-height">


    <div class="content">
        {{-- @foreach ($packages as $package)
            <div class="card">
                <img src="{{ $package->image_url }}">
                <dl>
                    <dt>Address</dt>
                    <dd>{{ $package->address }}</dd>
                    <dt>PostCode</dt>
                    <dd>{{ $package->post_code }}</dd>
                    <dt>City</dt>
                    <dd>{{ $package->city }}</dd>
                </dl>
            </div>
        @endforeach --}}
        <p>test</p>
    </div>
</div>
</body>

</html>
