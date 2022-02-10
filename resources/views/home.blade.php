<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('contact') }}">Contatti</a>
    <a href="{{ route('info') }}">Info</a>
    <a href="{{ route('news') }}">News</a>
    <a href="{{ route('link') }}">Link</a>

    <h1>Home Laravel</h1>
    @foreach ($students as $student)
        <h3>{{ $student['name']}} {{ $student['lastname']}}</h3>
        @foreach ($student['skills'] as $skill)
            <ul>
                <li>{{ $skill }}</li> 
            </ul>
        @endforeach    
    @endforeach
</body>

</html>