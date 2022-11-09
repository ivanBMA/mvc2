<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       <h1>Invetario de productos</h1>
       <table>

       <?php
       //require_once "../Product.php";
       //$products = Product::all();

           foreach($products as $item):
               ?>
              
          <tr>
             <td>Identificador: <?php echo $item[0]; ?></td>
             <td>Descripcion: <?php echo $item[1]; ?></td>
             <td><a href="?method=show&&id=<?= $item[0]?>">Ver Detalles</a></td>
            

          </tr>
           <?php
            endforeach;
           ?>
       </table>
   </body>
   </html>