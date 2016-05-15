<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Ingredient</h2>

                @foreach ($accessories as $accessory)

                  {{ Form::open( [
                      'method' => 'delete',
                      'route' => ['accessory.destroy', $accessory->id]
                      ]) 
                   }}

                    <b><a href=" {{ route('accessory.show', $accessory->id ) }} ">{{ $accessory->name }}</a> </b>
                    {{ Form::submit('Delete') }}

                  {{ Form::close() }}
                    
                @endforeach




            </div>
        </div>
    </body>
</html>

