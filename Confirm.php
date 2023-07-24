<!DOCTYPE html>
<html>
<title>Data Entry Page</title>
<head>
    <h1 style="color:black;text-align:center"><i><b>EXECUTING</b></i><br><br><br><br></h1>
    <style>
        p{text-align:center}
    </style>
</head>
<body style="background-color:darkcyan;background-image:url(https://static.vecteezy.com/system/resources/previews/001/255/578/original/abstract-light-red-watercolor-paint-texture-background-vector.jpg)">
    <p>
    <?php
      $var1=$_POST["name"];
      $var2=$_POST["paint"];
      $conn=mysqli_connect("localhost","root","","projectwork");
      if($conn==false)
      {
        die("Couldn't Connect and Data requesting failed<br><br>");
      }
      else
      {
        echo "Connected to Database<br><br>";
      }
      $quer="SELECT * FROM painting where Artist='$var1' AND Painting_ID='$var2'";
      $result=mysqli_query($conn,$quer);
      if(mysqli_num_rows($result)>0)
      {
        echo "<b>REQUESTED DATA IS PROCESSED PLEASE WAIT !!!!!</b><br><br>";
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<b>Artist: </b>".$row["Artist"]."<br><br>";
            echo "<b>Painting ID: </b>".$row["Painting_ID"]."<br><br>";
            echo "<b>Painted on: </b>".$row["Dated"]."<br><br>";
            echo "<b>Painting Name:</b> ".$row["Painting_Name"]."<br><br>"; 
            echo "<b>Painting Price:</b> Rs.".$row["Price"]."<br><br>";
        }
      }
      else
      {
        echo "<b>Sorry!!! No reslut was found as per entered data</b>";
      }
      ?>
      </p>
</body>
</html>