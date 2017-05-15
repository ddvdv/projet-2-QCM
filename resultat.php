<?php

	if (isset($_POST['nbRepExpected'])){
		$nbRepExpected = $_POST['nbRepExpected'];
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$emailStudent = $_POST['email'];
		$emailProf = 'becode@becode.org';
	}

?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" href="perso.css">
	  <TITLE>QCM</TITLE>
	</head>

	<body>


			<?php
			if (isset($_POST['nbRepExpected'])){
			?>
				<h1>Résultats</h1>
				<p class="resultat">
			<?php
				echo (checkIfComplete($nbRepExpected, 10));
				echo (verif($nbRepExpected, $prenom));
				sendResult($$emailProf, $emailStudent);
			}
			?>

		<h1>QCM</h1>

		<form method='POST'>
			<div class='form-group'>
				<h4>Etudiant</h4>
					<label for="prenom">Prenom
						<input id='prenom' name='prenom' class="form-control">
					</label>
					<label for='nom'>Nom
						<input id='nom' name='nom' class="form-control">
					</label>
					<label for='email'>Email
						<input type="email" id='email' name='email' class="form-control">
					</label>

			</div>

			<div class='form-group'>
				<h4>Question 1</h4>
				<p>Quelle est la syntaxe d'une boucle "for" ?</p>
				<div class="radio">
				  <label for='Q1.1'>
				    <input type="radio" name="Q1" id="Q1.1" value="correc">
				    for (initiation, tant que, itération){}
				  </label>
				</div>
				<div class="radio">
				  <label for='Q1.2'>
				    <input type="radio" name="Q1" id="Q1.2" value="incorrec">
				    for (you; only you; love me tender)
				  </label>
				</div>
				<div class="radio">
				  <label for='Q1.3'>
				    <input type="radio" name="Q1" id="Q1.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 2</h4>
				<p>Quelle est la différence entre une boucle while et une boucle for ?</p>
				<div class="radio">
				  <label for='Q2.1'>
				    <input type="radio" name="Q2" id="Q2.1" value="incorrec">
				    A, la réponse A.
				  </label>
				</div>
				<div class="radio">
				  <label for='Q2.2'>
				    <input type="radio" name="Q2" id="Q2.2" value="correc">
				    While s'effectue en boucle tant qu'une situation perdure. La boucle For aussi mais inclut une initiation et une intération.
				  </label>
				</div>
				<div class="radio">
				  <label for='Q2.3'>
				    <input type="radio" name="Q2" id="Q2.3" value="incorrec">
				    While est assimilé à une baleine pour des raisons phonétiques.
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 3</h4>
				<p>Comment et où lier une feuille .js dans le HTML ?</p>
				<div class="radio">
				  <label for='Q3.1'>
				    <input type="radio" name="Q3" id="Q3.1" value="incorrec">
				    Dans une balse 'dtc'.
				  </label>
				</div>
				<div class="radio">
				  <label for='Q3.2'>
				    <input type="radio" name="Q3" id="Q3.2" value="incorrec">
				    B, la réponse B.
				  </label>
				</div>
				<div class="radio">
				  <label for='Q3.3'>
				    <input type="radio" name="Q3" id="Q3.3" value="correc">
				    De préférence à la fin du body afin de ne pas rallentir l'exécution de la page.
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 4</h4>
				<p>Quel signe typographique définit la chaîne de caractère dans le code Javascript ?</p>
				<div class="radio">
				  <label for='Q4.1'>
				    <input type="radio" name="Q4" id="Q4.1" value="correc">
				    Les guillements
				  </label>
				</div>
				<div class="radio">
				  <label for='Q4.2'>
				    <input type="radio" name="Q4" id="Q4.2" value="incorrec">
				    Ton string
				  </label>
				</div>
				<div class="radio">
				  <label for='Q4.3'>
				    <input type="radio" name="Q4" id="Q4.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 5</h4>
				<p>Comment fait-on appel à une fonction en JS ?</p>
				<div class="radio">
				  <label for='Q5.1'>
				    <input type="radio" name="Q5" id="Q5.1" value="incorrec">
				    function{};
				  </label>
				</div>
				<div class="radio">
				  <label for='Q5.2'>
				    <input type="radio" name="Q5" id="Q5.2" value="correc">
				    Comme en PHP
				  </label>
				</div>
				<div class="radio">
				  <label for='Q5.3'>
				    <input type="radio" name="Q5" id="Q5.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 6</h4>
				<p>Qu'est ce qu'une variable?</p>
				<div class="radio">
				  <label for='Q6.1'>
				    <input type="radio" name="Q6" id="Q6.1" value="incorrec">
					Une description de la météo
				 </label>
				</div>
				<div class="radio">
				  <label for='Q6.2'>
				    <input type="radio" name="Q6" id="Q6.2" value="incorrec">
				    B, la réponse B
				  </label>
				</div>
				<div class="radio">
				  <label for='Q6.3'>
				    <input type="radio" name="Q6" id="Q6.3" value="correc">
				     Une donnée qu'on stocke pour un usage ultérieur
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 7</h4>
				<p>Comment déclarer une variable de type "string"?</p>
				<div class="radio">
				  <label for='Q7.1'>
				    <input type="radio" name="Q7" id="Q7.1" value="correc">
				    var x = "";
				  </label>
				</div>
				<div class="radio">
				  <label for='Q7.2'>
				    <input type="radio" name="Q7" id="Q7.2" value="incorrec">
				    var type string = ();
				  </label>
				</div>
				<div class="radio">
				  <label for='Q7.3'>
				    <input type="radio" name="Q7" id="Q7.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 8</h4>
				<p>quel est la difference entre =, ==, et === ?</p>
				<div class="radio">
				  <label for='Q8.1'>
				    <input type="radio" name="Q8" id="Q8.1" value="incorrec">
				    L'égalité n'est qu'une illusion
				  </label>
				</div>
				<div class="radio">
				  <label for='Q8.2'>
				    <input type="radio" name="Q8" id="Q8.2" value="correc">
				    Assignation, équivalence de valeur, équivalence absolue
				  </label>
				</div>
				<div class="radio">
				  <label for='Q8.3'>
				    <input type="radio" name="Q8" id="Q8.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 9</h4>
				<p>Quel est le rapport entre Java et JavaScript ?</p>
				<div class="radio">
				  <label for='Q9.1'>
				    <input type="radio" name="Q9" id="Q9.1" value="incorrec">
				    L'un est issu de l'autre
				  </label>
				</div>
				<div class="radio">
				  <label for='Q9.2'>
				    <input type="radio" name="Q9" id="Q9.2" value="incorrec">
				    B, la réponse B
				  </label>
				</div>
				<div class="radio">
				  <label for='Q9.3'>
				    <input type="radio" name="Q9" id="Q9.3" value="correc">
				    Purement marketing
				  </label>
				</div>
			</div>

			<div class='form-group'>
				<h4>Question 10</h4>
				<p>var iNum = 12; iNum %= 2; A la suite de cette expression, combien vaut iNum ?</p>
				<div class="radio">
				  <label for='Q10.1'>
				    <input type="radio" name="Q10" id="Q10.1" value="correc">
				    Zero
				  </label>
				</div>
				<div class="radio">
				  <label for='Q10.2'>
				    <input type="radio" name="Q10" id="Q10.2" value="incorrec">
				    6
				  </label>
				</div>
				<div class="radio">
				  <label for='Q10.3'>
				    <input type="radio" name="Q10" id="Q10.3" value="incorrec">
				    C, la réponse C
				  </label>
				</div>
			</div>

			<div style='display: none' class='form-group'>
				<input name="nbRepExpected" value="10">
			</div>

			<div class='form-group'>
				<button type='submit' class="btn btn-default">Vérifier mes réponses</button>
			</div>



		</form>


			}
			?>

			</p>

	</body>
</html>

<?php
	function checkIfComplete($nbRepExpected, $nbRepToBe){
		if ($nbRepExpected != $nbRepToBe){
			echo "Réponds à toutes les questions pour avoir ton résultat";
		}
	}

	function verif($nbRepExpected, $prenom){
		$good = 0;
		for ($i = 1; $i < $nbRepExpected; $i++){
			if ($_POST['Q'.$i] == 'correc'){
				$good = $good + 1;
			}
		}
		$resultat = 100*($good/$nbRepExpected);
		if ($resultat > 50){
			return 'Bravo '. $prenom . ', ton résultat est de ' . $resultat . '%!';
		}
		else {
			return $prenom . ', va falloir bosser. Ton résultat est de '. $resultat . '%!';
		}
	}

	function sendResult($emailProf, $emailStudent){
		$objetProf = 'Résultats QCM de '.$prenom.' '.upperCase($nom);
		$messageProf = 'Le résultat de '.$prenom.' '.upperCase($nom). 'est de '.$resultat;
		$objetStudent = 'Ton ésultats QCM';
		$messageStudent = 'Le résultat est de '.$resultat;
		mail($emailProf, $objetProf, $messageProf);
		mail($emailStudent, $objetStudent, $messageStudent);
	}
?>
