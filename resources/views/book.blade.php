
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
       body{
        background-color: #E9EEF2;

       }
       button{
        background-color: #E65C4F;
        padding: 8px;
        border: 0px ;
        border-radius: 8px;
        
       }
       button:hover{
        background-color: #12ADC1;
        color: white;
       }
       h3{
        color:#326789;
        
       }
       label{
        color: #326789;

       }
       
    </style>


<title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" sytle="margin-top:50px">
            <h3>ADAT FELVÉTEL | LARAVEL</h3>
            <hr>
            @if(Session::get('success'))
            <div class="alert alert-s  ucces">
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif

            <form method="POST" action="feltolt" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="text" > <b>Könyv címe</b></label>
                    <input type="text" class="form-control" name="name" placeholder="Add meg a nevét" value="{{ old('name')}}">
                </div>

                <div class="form-group">
                    <label for="text" > <b>Ár</b></label>
                    <input type="text" class="form-control" name="price" placeholder="Add meg az árát" value="{{ old('price')}}">
                </div>
             
<br>
                <div class="form-group">
                    
                    <button type="submit" class="" >Mentés</button>
                </div>
            </form>
            </div>
        </div>
    </div>




</head>
<body>
    
</body>
</html>