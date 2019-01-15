<!DOCTYPE html>
<html>
   <head>
      <style>
         table, th, td {
            border: 1px solid black;
         }
      </style>
   </head>

   <body>
      <h1>Top 10</h1>
      <table>
         <tr>
            <th>Titulo</th>
            <th>Calificacion</th>
	    <th>Numero de rentas</th>
         </tr>
	 <?php foreach($pelis as $peli): ?>
	 <tr>
	    <th>{{$peli->titulo}}</th>
            <th>{{$peli->calificacion}}</th>
	    <th>{{$peli->director}}</th>
	 </tr>
	 <?php endforeach?>
      </table>
   </body>
</html>
