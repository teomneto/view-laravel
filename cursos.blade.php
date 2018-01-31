<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="/css/app·css">

    </style>"
  </head>
  <body>
    <h1>Cursos</h1>
    <ul>
      @foreach ($cursos as $curso)
        //a cada interacao guarda um elemento do array na variavel
        // array $cursos     variavel $curso (podia ser $x)
        <li>{{ $curso }}</li>
      @endforeach
    </ul>

    <script type="text/text/javascript"src="/js/app.js">
    </script>
  </body>
</html>
