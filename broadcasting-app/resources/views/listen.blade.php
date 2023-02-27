<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "csrf-token" content ="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
    </div>
    <script>console.log("done")</script>
    <!-- <script src="{{ asset('app/resources/js/app.js')}}"></script> -->
   
    <link href="{{asset('js/app.js') }}"> 

   
</body>
</html>