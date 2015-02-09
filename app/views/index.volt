<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}
       {{ assets.outputCss('header') }} 
       {{javascript_include('js/bootstrap.js')}}
       {{javascript_include('js/jquery-1.8.3.min.js')}}
       {{javascript_include('js/responsiveslides.min.js')}}
   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Guidance Office">
        <meta name="author" content="GMS4S">
    </head>
    <body>
        {{ content() }}
 
    </body>
</html>