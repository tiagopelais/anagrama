<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultados Anagramas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
            }
            .new_item{
              
                text-align: center;
                align-items: center;
                }
            .title {
                font-size: 84px;
            }
            .links > a {
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
            .container {
                max-width: 90%;
                margin: 0 auto;
                display: flex;                
                flex-direction: row;
                flex-wrap: wrap;
            }
            .item {            
            flex: 1;
            margin: 5px;            
            text-align: center;
            font-size: 1.5em;
            overflow: visible;
        }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content row">
                <div class="title m-b-md">
                {{count($current_set)}} Resultados 
                </div>  
                <div class="container">
                    @foreach($current_set as $data)
                        <span class="item">
                            {{ $data }}
                        </span>
                    @endforeach
                </div>
                <form class="" action="{{URL::to('/')}}" method="post">
                @csrf                    
                    <button type="submit" name="button">Novo Anagrama</button>
                </form>
            </div>
            </div>
    </body>
</html>
