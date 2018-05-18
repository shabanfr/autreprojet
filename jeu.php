<?php
	### PIERRE PAPIER CISEAU ###

	### TIRE AU GOOL/GARDIEN ###

	### FLECHETTE ###

	### ... ###
?>
<!DOCTYPE html>
<html>
<head>
	<title>Casino</title>
	<link rel="stylesheet" type="text/css" href="casino.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<body>
		<div id="jeu">
			<div id="jeu-fond">
				<div id="jeu-haut">
					<div class="joueur">Shaban</div>
					<div class="score">0 - 0</div>
					<div class="joueur">Artem</div>
				</div>
				<div id="jeu-bas">
					<div id="interface-joueur">
						<div class="jeu-joueur">
							<div id="jeu-resultat"></div>
						</div>
						<div class="joueur-choix">
							<div id="ciseau" class="joueur-select"></div>
							<div id="pierre" class="joueur-select"></div>
							<div id="feuille" class="joueur-select"></div>
						</div>
					</div>
					<div id="interface-joueur">
						<div class="jeu-joueur">
							<div id="jeu-resultat-adv"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	var choix = document.getElementsByClassName("joueur-choix")[0];
	var jeu = document.getElementsByClassName("joueur-select");
	var select = 0;
	var victoire = 0;
	var adv_r = ["feuille","pierre","ciseau"];
	var score = {"player": 0,"adversaire": 0};
	var player = document.getElementById("jeu-resultat");
	var adversaire = document.getElementById("jeu-resultat-adv");
	var jeujoueur = document.getElementsByClassName("jeu-joueur");


	for (var i = 0; i < choix.children.length; i++) {

		choix.children[i].addEventListener("click",function(){
			
			player.classList = "img " + this.id;	
			select = this.id;

			var adv = adv_r[Math.floor((Math.random() * 3) + 0)];
			adversaire.classList = "img " + adv;			

			if (select == "pierre") {
				if (adv == "feuille") {
					victoire = 0;
				}
				else if(adv == "pierre"){
					victoire = 2;

				}
				else if(adv == "ciseau"){
					victoire = 1;
				}
			}

			else if (select == "feuille") {
				if (adv == "feuille") {
					victoire = 2;
				}
				else if(adv == "pierre"){
					victoire = 1;
				}
				else if(adv == "ciseau"){
					victoire = 0;
				}
			}

			else if (select == "ciseau") {
				if (adv == "feuille") {
					victoire = 1;
				}
				else if(adv == "pierre"){
					victoire = 0;
				}
				else if(adv == "ciseau"){
					victoire = 2;
				}
			}
			if (victoire == 1) {
				score.player += 1;
				jeujoueur[0].style.backgroundColor = "#8BC34A";
				jeujoueur[1].style.backgroundColor = "#ececec";
			}
			else if(victoire == 0){
				score.adversaire += 1;
				jeujoueur[0].style.backgroundColor = "#F44336";
				jeujoueur[1].style.backgroundColor = "#ececec";

			}
			else if(victoire == 2){
				jeujoueur[0].style.backgroundColor = "#FFC107";
				jeujoueur[1].style.backgroundColor = "#FFC107";

			}

			if (score.player == 5|| score.adversaire == 5) {
				alert("Victoire !");
			}
			document.getElementsByClassName("score")[0].innerHTML = score.player +" - "+score.adversaire;
		});
	}

</script>