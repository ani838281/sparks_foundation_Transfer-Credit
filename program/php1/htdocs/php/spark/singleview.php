<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
   <style>
       body{
           padding: 0px;
           margin: 0px;
           background-image: linear-gradient(to right,#D89B6E , #A1D890);
           
       }
      .view {
          padding:15px;
           border: 2px solid grey;
          margin-left: 35%;
          width: 400px;
          height:540px;
          text-align: center;
           max-width: 500px;
             background-image: linear-gradient(to right,#D89B6E , #A1D890);
           
       }
        table
        {
            margin-left: 35%;
        }
               input[type=submit]
        { 
            margin-top: 30px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
    </style>
    </head>
    <body>
    <div class="view">
        <h1>Choose name for credit transfer</h1>
        <form action="transfer.php" method="post">
       <table>
           <th><h2>Name</h2></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>