<html>
     <head>
          <title>Exemplo 2 – Função php para data</title>
     </head>
     <body>
     <?php
          $data = date ("d/m/y", time() );
     ?>
     <h1>Hoje é dia
     <?php
          echo $data;
     ?>
     </h1>
     </body>
</html>