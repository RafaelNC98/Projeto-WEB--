
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/js/plugins/jquery_ui/jquery-ui.min.css">
      <link rel="stylesheet" href="css.css">
    <link href="assets/css/custom.css" rel="stylesheet">

	<title></title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restuarante";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pedido";
$result = $conn->query($sql);
echo "<div class='container'>";
    echo "<div class='row-fluid'>";
    
      echo "<div class='col-xs-12'>";
      echo "<div class='table-responsive'>";
      
        echo "<table class='table table-hover table-inverse'>";
        
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Endereço</th>";
        echo "<th>CPF</th>";
        echo "<th>Prato</th>";
        echo "<th>Pagamento</th>";
        echo "</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
echo "<tr>";
echo "<td>" . $row["nome"].  "</td>"; 
echo "<td>" . $row["endereco"]. "</td>";
echo "<td>" . $row["cpf"]. "</td>";
echo "<td>" . $row["prato"].  "</td>";
 echo "<td>". $row["pagamento"]. "</td>";
 echo "</tr>"; 
  "<br><br>";
      }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
	<a style="text-decoration: none" href="index.html">Voltar</a>

</body>
</html>