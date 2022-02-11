<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    @if(isset($header))
    <ul class="nav justify-content-center">
        @foreach ($header as $element)  
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route($element)}}">{{$element}}</a>
        </li>
        @endforeach
    </ul>
    @endif

</body>
</html>