<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caacbay_OE4_WDD</title>
    <style>
        body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:295px;
  border-radius:5px;
  margin: 0 auto 0 auto;
  padding:0px 0px 150px 0px;
  border: #2980b9 5px solid; 
}

.First{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.Second{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn1{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}

#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:17px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
    </style>
</head>
<body>
    <form  method = "POST">
    <div class="box">
        <h1>Simple Calculator </h1>
        Enter First Number  <input type ="number" name = "first" class="First"><br>
        Enter Second Number <input type = "number" name = "second" class="Second"><br>
        <br>
        <input type = "submit" name = "ADD" value = "addition" class = "btn1">
        <input type = "submit" name = "SUB" value = "subtraction" class = "btn1">
        <input type = "submit" name = "MULT" value = "multiplication" id = "btn2">
        <input type = "submit" name = "DIV" value = "division" id = "btn2">

      <?php 
        function ADD($first, $second){
            $sum = $first + $second;
            echo "Answer: "."= $sum";
        }
        function SUB($first, $second){
            $diff = $first - $second;
            echo "Answer: "."= $diff";
        }
        function MULT ($first, $second){
            $product = $first * $second;
            echo "Answer: "."= $product";
        }
        function DIV ($first, $second){
            $quotient = $first / $second;
            echo "Answer: "." = $quotient";
        }
      
        if(isset($_POST['ADD'])){
          ADD($_POST["first"], $_POST["second"]);}

        if(isset($_POST['SUB'])){
          SUB($_POST["first"], $_POST["second"]);
        }
        if (isset($_POST['MULT'])){
          MULT($_POST["first"], $_POST["second"]);
        }
        if (isset($_POST['DIV'])){
          DIV($_POST["first"], $_POST["second"]);
        }
      ?>
      </div>
      </form>
      </form>
</body>
</html>