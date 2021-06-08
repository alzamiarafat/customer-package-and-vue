<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            background: url({{asset('bg.png')}});
            min-height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: 500px;
            position: relative;
            box-sizing: border-box;
        }
        .card img {
            width: 100%;
        }
        .card form {
            position: absolute;
            bottom: 30px;
            left: 140px;
        }
        .card input {
            width: 200px;
            display: block;
            background: none;
            border: none;
            border-bottom: 2px solid #68D3C6;
            outline: none;
            height: 30px;
            color: #E4D614;
            margin-top: 5px;
        }
        .card input[type="checkbox"] {
            width: 14px;
            display: inline;
            margin-right: 10px;
        }
        .checkbox {
            display: flex;
            align-items: center;
            justify-content: start;
            margin-top: 10px;
        }
        .checkbox input + label {
            color: #DADADA;
            font-size: 14px;
        }
        .card input::placeholder {
            color: #DADADA;
        }
        .card .basic-btn {
            border: none;
            padding: 10px 30px;
            margin-top: 5px;
            border-radius: 25px;
            background: #F28040 !important;
            color: white !important;
            font-weight: bold;
            cursor: pointer;
        }
        @media only screen and (max-width: 500px) {
            body{
                min-width: 500px;
            }
        }
    </style>
</head>
<body>
<div class="card">
    <img src="{{asset('card.png')}}" alt="" />
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('login')}}">
        @csrf
        <input name="email" id="email" type="email" placeholder="Email" required />
        <input name="password" id="password" type="password" placeholder="Password" required />
        <div class="checkbox">
            <input id="remember" name="remember" type="checkbox" />
            <label for="remember">remember me</label>
        </div>
        <button type="submit" class="basic-btn">log in</button>
    </form>
</div>
</body>
</html>
