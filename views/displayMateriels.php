<?php 

require_once("../business/InventaireService.php");
require_once("../dao/MaterielDAO.php");
require_once("../dao/Connect.php");
require_once("../dao/PretDAO.php");
$con = new connect();
$d = new MaterielDAO($con->getCon());
$c = new PretDAO($con->getCon());
$b = new InventaireService($d,$c);
$allmateriels = $b->listerMateriel();
//lister objets table
print_r($allmateriels);

?>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel = "stylesheet"
          type = "text/css"
          href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel = "stylesheet"
          type = "text/css"
          href = "https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
</head>

<body>

</body>

</html>