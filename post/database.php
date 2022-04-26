<?php  
 
  session_start();

$co = 'comentario novo';
$pdo = new PDO(
    'mysql:host=localhost;dbname=loja', 'root', ''
);


//$sql = "INSERT INTO  axios (id, comentario) VALUES (:id, :coment)";
//$stmt= $pdo->prepare($sql);
//$stmt->execute([':id' => null, ':coment' =>$co]);





$user = $pdo->prepare("SELECT * FROM axios");
$user->execute();
$result = $user->fetchAll(PDO::FETCH_ASSOC);


$result = json_encode($result);

//echo $result;
 print_r($_REQUEST);

?>