<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
    background-color: lightgray;
  }
body {
  font-family: "Lato", sans-serif;
  margin: 150px;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 12px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
h2{
  text-align: center;
}

img{
  width: 100px; height:100px;float:left;
  margin-top: 20px;
  margin-right: 5px;
  border-style: groove;
  box-shadow: 1px 1px 1px 1px grey;
}
</style>
</head>
<body>

<h2>Profil Browser</h2>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Monkey D. Luffy')" id="defaultOpen">Monkey D. Luffy</button>
  <button class="tablinks" onclick="openCity(event, 'Roronoa Zoro')">Roronoa Zoro</button>
  <button class="tablinks" onclick="openCity(event, 'Sanji Vinsmoke')">Sanji Vinsmoke</button>
  <button class="tablinks" onclick="openCity(event, 'Usopp')">Usopp</button>
  <button class="tablinks" onclick="openCity(event, 'Nami')">Nami</button>
</div>

<div id="Monkey D. Luffy" class="tabcontent">
<img src="uploads/LuffyMonkey-D.png">
  <h3>Monkey D. Luffy</h3>
  <p>
      Monkey D. Luffy, surnommé de manière récurrente Luffy au chapeau de paille, est un personnage de fiction et principal protagoniste de la franchise japonaise One Piece créée par Eiichirō Oda. Il est intronisé en tant que garçon ayant un corps élastique, une faculté qu'il a développée après avoir mangé un fruit du démon1. Il est le fondateur et le capitaine de l'équipage de Chapeau de paille. Son rêve de toujours est de devenir le roi des pirates en trouvant le trésor légendaire, le One Piece, laissé par le défunt roi des pirates, Gol D. Roger. Selon lui, le roi des pirates est l'homme le plus libre du monde. Après ses actions sur Totto Land et contre l'Empereur Big Mom, il est actuellement considéré par la presse mondiale comme le 5e Empereur.
      Il est le fils du chef de l'armée révolutionnaire, Monkey D. Dragon, ainsi que le petit-fils paternel du héros de la Marine, Monkey D. Garp. Il est aussi le frère adoptif de l'ancien capitaine de la 2e flotte de l'équipage de Barbe Blanche, le défunt Portgas D. Ace, et du chef d'état-major de l'armée révolutionnaire, Sabo.
  </p>
</div>

<div id="Roronoa Zoro" class="tabcontent">
<img src="uploads/ZoroRoronoa.png">
  <h3>Roronoa Zoro</h3>
  <p>
      Roronoa Zoro, Zoko (dans la version AB de l'anime) ou anciennement francisé en Roronoa Zorro (dans la première version française du manga), est un personnage de One Piece. Il s'agit d'un épéiste dont l'ambition est de devenir le meilleur épéiste du monde, en s'aventurant sur grand line à la recherche du One Piece en compagnie de son capitaine et de l'équipage. C'est un épéiste de grand renom qui se bat avec trois sabres (ce style est appelé en japonais Santōryū) qui fait partie de l'équipage de Chapeau de paille dirigé par Monkey D. Luffy, le principal protagoniste de la série.
      Le personnage de Roronoa Zoro est librement inspiré du pirate François l'Olonnais1, considéré comme l'un des pirates les plus cruels de son temps.
  </p> 
</div>

<div id="Sanji Vinsmoke" class="tabcontent">
<img src="uploads/Sanji.png">
  <h3>Sanji Vinsmoke</h3>
  <p>
      Sanji Vinsmoke, ou Sanji la Jambe Noire (黒脚のサンジ, Kuro ashi no Sanji?), est un personnage de fiction de la franchise médiatique One Piece créée par Eiichirō Oda. Membre de l'équipage de Monkey D. Luffy, il occupe la place de cuisinier en son sein. Il a pour particularité de ne se battre qu'avec ses jambes et d'être un véritable gentlemen envers la gent féminine. Il est le troisième fils ainsi que le quatrième enfant de la famille Vinsmoke.
  </p>
</div>

<div id="Usopp" class="tabcontent">
<img src="uploads/SniperKingUsopp.png">
  <h3>Usopp</h3>
  <p>
     Usopp (ウソップ, Usoppu?), connu anciennement sous le nom Pipo dans la première version française du manga, également surnommé « Sniperking, le roi des snipers » (狙撃の王様そげキング, Sogeki no Ō-sama Sogekingu?), est un personnage de fiction appartenant à la franchise médiatique japonaise One Piece créée par Eiichirō Oda. Membre de l'équipage de Monkey D. Luffy, il occupe le poste de canonnier et de charpentier avant l'arrivée de Franky dans l'équipage ; il est également un inventeur talentueux et baratineur.
  </p>
</div>

<div id="Nami" class="tabcontent">
<img src="uploads/Nami.png">
  <h3>Nami</h3>
  <p>
     Nami (ナミ?) est un personnage de fiction appartenant à la franchise médiatique japonaise One Piece créée par Eiichiro Oda. Ex-membres de l'équipage Pirates d'Arlong elle fait partie de l'équipage de Luffy dans lequel elle tient le rôle de navigatrice et de cartographe.
     Au début du récit le personnage de Nami a 18 ans. Elle est pickpocket1. Navigatrice, elle peut sentir instinctivement les changements météorologiques2. Sur le bateau, hormis le choix de la direction confié à Luffy, elle commande et indique les manœuvres à faire. Après l'arc Water Seven/Enies Lobby, la tête de Nami est mise à prix à 16 millions de Berrys. Elle est surnommée « La voleuse » sur son avis de recherche (« La Chatte Voleuse » dans la version japonaise)3. Elle possède comme armes le baton climatique et le sorcery climat tact qui est plus puissante. Son charme lui permet d'amadouer Sanji, qu'elle mène à la baguette. Elle est la trésorière de l'équipage ; elle gère les finances de façon très égoïste, accordant des sommes dérisoires aux autres membres en demandant des intérêts exorbitants. La moindre évocation du mot Berry (la monnaie de la série One Piece) la rend capable de tout. 
  </p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 



