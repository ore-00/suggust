<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>need suggestion</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body>


   <main id="main" class="main">


    <?php

    $con=mysqli_connect("localhost","root","","ic") or die("connection problem");

    $data= $con->query("SELECT * FROM `data_table`");


    ?>

    
    <table class="table table-bordered">
        
     <tr>
         <th>sugguestions</th>
         
     </tr>


     <?php

     while($row=$data->fetch_object())
     {

        ?>



        <tr>
           <td><?php echo $row->sug ?></td>

          
       </tr>


       <?php

   }

   ?>

</table>



</main><!-- End #main -->


</body>

</html>