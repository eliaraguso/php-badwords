
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***)tutte le occorrenze della parola da censurare. -->

<!-- Inizializzo le variabili -->

<?php
$paragrafo= "Siddhartha Gautama (noto anche come Gautama Buddha, il Buddha storico, Buddha Śākyamuni o semplicemente il Buddha) fu una delle più importanti figure spirituali e religiose dell'Asia. I suoi insegnamenti sono considerati il cuore del buddismo: dopo la sua morte, la comunità da lui fondata si trasformò lentamente in un movimento religioso che venne riconosciuto come religione di stato in India nel corso del III secolo a.C. Mentre gli studiosi disquisiscono circa il fatto se sia o meno effettivamente vissuto, le vicende della sua vita sono ancora dibattute. Secondo il racconto più conosciuto sulla sua vita, dopo aver sperimentato diversi insegnamenti per anni, e non avendo trovato nessuno di questi accettabili, Gautama trascorse una fatidica notte in profonda meditazione. Durante la sua meditazione, tutte le sue domande ottennero una risposta chiara, e raggiungendo la piena consapevolezza, raggiunse il Nirvana.";
$paragrafoCensurato = str_replace($userInput, '***', $paragrafo);
$userInput= $_GET['input'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h1 style="color: blue;">STAMPO IL PARAGRAFO E LA SUA LUNGHEZZA </h1>
    <h2>CENNI BIOGRAFICI <?php $userInput ?></h2>
    <p><?php echo $paragrafo; ?></p>
    <h3>La lunghezza di questo paragrafo è di <?php echo strlen($paragrafo); ?> caratteri</h3>

    <h1 style="color: red;">STAMPO IL NUOVO PARAGRAFO CON LE PAROLE CENSURATE E LA SUA LUNGHEZZA</h1>
    <h2>CENNI BIOGRAFICI</h2>
    <p><?php echo $paragrafoCensurato; ?></p>
    <h3>La lunghezza di questo paragrafo è di <?php echo strlen($paragrafoCensurato); ?> caratteri</h3>

</body>
</html>