<?php

session_start();
?>

<!Doctype HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA_Compatible" content="IE=edge,chrome=1" />
<title>Osadnicy-gra przeglądarkowa</title>
</head>

<body>

<?php

echo "<p>Witaj" .$_SESSION['user']."!";

?>



</body>
</html>