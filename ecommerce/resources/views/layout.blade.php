<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->





<link rel="stylesheet" href="{{asset('asset/css/mystyle.css') }}">
<script type="text/javascript" src="{{asset('asset/js/myscript.js') }}"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com project</title>
</head>
<body>
{{View::make('header')}}
<div class="container">
@yield('content')
</div>
  

    {{View::make('footer')}} 
</body>
</html>