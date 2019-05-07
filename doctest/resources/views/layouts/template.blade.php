<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testes automatizados</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/themes/prism.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="../../Documentos/doctest/doctest/public/js/scribbler.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
    <link rel="stylesheet" href="public/css/scribbler-global.css">
    <link rel="stylesheet" href="public/css/scribbler-landing.css">



    <!-- Styles -->
    <style>

        body {
            background: #333 url(http://subtlepatterns.com/patterns/tex2res4.png) 0 0 repeat;
            min-height: 100%;
            font-family: "Open Sans", sans-serif;
            font-weight: 300;
            color: #FFF;
        }

        body, html {
            height: 100%;
            margin-top: -1%;
            padding: 0;
        }

        a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
        }

        a:hover, li:hover > a {
            color: #FFF;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin: 0;
            padding: 0;
        }

        #menu {
            border-left: 1px solid #FFF;
            border-right: 1px solid #FFF;
            background: rgba(0, 0, 0, 0.5);
            float: left;
            font-size: 1.5em;
            min-height: 128%;
            margin-left: 1em;
        }

        #menu li {
            position: relative;
            z-index: 1;
        }

        #menu li a {
            display: block;
            padding: 0.5em 1em;
            white-space: nowrap;
        }

        #menu li ul {
            position: absolute;
            overflow: hidden;
            display: none;
            left: 100%;
            top: 0.5em;
            float: none;
            background-image: -moz-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
            background-image: -webkit-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
            background-image: radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
        }


        #menu li:hover ul {
            display: block;
        }

        #menu li ul a {
            position: relative;
            font-size: 0.8em;
        }

        #menu li ul a:hover:before {
            content: "";
            display: block;
            width: 1em;
            height: 1em;
            background: rgba(0, 0, 0, 0.75);
            border: 1px solid #FFF;
            position: absolute;
            top: 0.5em;
            left: -0.75em;
            -moz-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
@include('elements._menu')

@yield('content')



</body>
</html>
