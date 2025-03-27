<h1>Exercice 2</h1>

<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});
 
$aujourdhui = new DateTime (2025-03-21);

$manonC = new Titulaire ("CHAPELLE", "Manon", "2000-05-15", "Illfurth");
$nilsR = new Titulaire ("RELIER", "Nils", "2001-03-03", "Altkirch");

$compte1 = new CompteBancaire("Livret A", "104.40", "EUR", $manonC);
$compte2 = new CompteBancaire("Compte Jeune", "30.36", "EUR", $manonC);
$compte3 = new CompteBancaire("Livret A", "253.21", "EUR", $nilsR);

echo $manonC->afficherInformations();
echo $nilsR->afficherInformations();

echo $compte1->crediter(24.29);
echo $compte3->debiter(6.99, "credit");
echo "<br>";
echo "********************VIREMENT ********************<br>";
echo $compte1->virement($compte3, 26.99);
echo "<br>";
echo $compte1->virement($compte3, 26450.99);


// var_dump($manonC);
// var_dump($nilsR);



// var_dump($livretA1);
// echo $manonC->afficherCompteBancaire(); ça marche pas ??? 

// $compteJeune1->crediter(150);
// echo $compteJeune1->getSoldeTotal();



// sur fichier employé
// public function getInfo(){
// return $this."bla bla"$this->entreprise->getBlablla;
// }



