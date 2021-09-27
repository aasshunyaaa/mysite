<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel2</title>
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
        	  <!-- 呼び出しを作成したコンポーネントへ変更する -->
            <hello-world-component></hello-world-component>
        </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>