<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-epuiv="X-UA-Compatible" content="IE=edge">
        <mata name="viewport" content"width=device-width, intial-scale=1">
            
        
        <title>TaskList</title>
        
       <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        @include('commons.navbar')
        
        <div class="cpntainer">
            @include('commons.error_tasks')
        
            @yield('content')
        </div>
    </body>
</html>