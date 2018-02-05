<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gesadra;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
} ?>
<html>
<head>
	<title>Impression des Mains Courantes</title>
	<meta charset="UTF-8">

	<style type="text/css">
	.variable{
			font-family: Courier;
			font-type: monospace;
		}
	</style>
</head>
<script type="text/javascript">
function edition()
    {
    options = "Width=700,Height=700" ;
    window.open( "impression_main_courante.php", "impression_main_courante", options ) ;
    }
</script>
<body>
<?php $sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
if ($res = $bdd->query($sql)) {

   /* Récupère le nombre de lignes qui correspond à la requête SELECT */
   if ($res->fetchColumn() > 0) {

      /* Effectue la vraie requête SELECT et travaille sur le résultat */
      $sql = "SELECT date_heure, recu_de, emis_vers, degre_urgence, mode_transmission, message FROM main_courante ORDER BY `date_heure` DESC";
      foreach ($bdd->query($sql) as $row) {

          if ($row['degre_urgence'] == "Routine") {
            $text_color = "black";
          }
          elseif ($row['degre_urgence'] == "Urgent") {
            $text_color = "blue";
          }
          elseif ($row['degre_urgence'] == "Immediat") {
            $text_color = "tomato";
          }
          elseif ($row['degre_urgence'] == "Flash") {
            $text_color = "red";
          }
          elseif ($row['degre_urgence'] == "Sauvetage Vie Humaine") {
            $text_color = "darksalmon";
          }
          elseif ($row['degre_urgence'] == "Priorité Absolue") {
            $text_color = "orangered";
          }

      print '
        <span style ="color: '.$text_color.';"><b><u>'.$row['degre_urgence'].'</u></b></span></br></br>
        <b>'.$row['date_heure'].'</b></br></br>
        Reçu de : <b>'.strtoupper($row['recu_de']).'</b> | Emis vers : <b>'.strtoupper($row['emis_vers']).'</b></br></br>
        Mode de transmission : <b>'.$row['mode_transmission'].'</b></br></br>
        <span style="font-family: Courier; font-type: monospace;">'.$row['message'].'</span></br></br>
        *******************************************</br></br>
            

            </tr>';
      }
   }} ?>

<script type="text/javascript">
		window.print() ;
	</script>
</body>
</html>