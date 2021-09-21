<?php 
$paragraf= "L'amore è una forma di pregiudizio. Si ama quello di cui si ha bisogno, quello che ci fa star bene, quello che ci fa comodo. Come fai a dire che ami una persona, quando al mondo ci sono migliaia di persone che potresti amare di più, se solo le incontrassi? Il fatto è che non le incontri.";

?>

<?php
echo 'Citazione di ' . htmlspecialchars($_GET["name"]) . '!';
?>

<p><?php echo $paragraf ?> </p>