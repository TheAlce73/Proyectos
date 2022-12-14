<?php
	session_start();

	

	$txtJson='[
				{
				  "id": 1,
				  "nombre": "Ameline",
				  "apellidos": "Fyrth",
				  "foto": "https://robohash.org/eteiusdolor.png?size=50x50&set=set1"
				}, {
				  "id": 2,
				  "nombre": "Sidney",
				  "apellidos": "Bownass",
				  "foto": "https://robohash.org/placeatlaudantiumnisi.jpg?size=50x50&set=set1"
				}, {
				  "id": 3,
				  "nombre": "Tandie",
				  "apellidos": "Ambrus",
				  "foto": "https://robohash.org/quosestconsequuntur.png?size=50x50&set=set1"
				}, {
				  "id": 4,
				  "nombre": "Aubine",
				  "apellidos": "OLongain",
				  "foto": "https://robohash.org/eiusmagniautem.jpg?size=50x50&set=set1"
				}, {
				  "id": 5,
				  "nombre": "Sadye",
				  "apellidos": "Dunbobbin",
				  "foto": "https://robohash.org/idquiaex.jpg?size=50x50&set=set1"
				}, {
				  "id": 6,
				  "nombre": "Shaun",
				  "apellidos": "Hugonin",
				  "foto": "https://robohash.org/perferendisplaceatmagnam.bmp?size=50x50&set=set1"
				}, {
				  "id": 7,
				  "nombre": "Harlan",
				  "apellidos": "Winspar",
				  "foto": "https://robohash.org/ipsaconsequuntureius.jpg?size=50x50&set=set1"
				}, {
				  "id": 8,
				  "nombre": "Marcile",
				  "apellidos": "Gabbotts",
				  "foto": "https://robohash.org/quisreiciendisvoluptas.bmp?size=50x50&set=set1"
				}, {
				  "id": 9,
				  "nombre": "Marchelle",
				  "apellidos": "Natalie",
				  "foto": "https://robohash.org/ututnobis.bmp?size=50x50&set=set1"
				}, {
				  "id": 10,
				  "nombre": "Rosita",
				  "apellidos": "Sturmey",
				  "foto": "https://robohash.org/cupiditatealiasnon.bmp?size=50x50&set=set1"
				}, {
				  "id": 11,
				  "nombre": "Addi",
				  "apellidos": "Aikenhead",
				  "foto": "https://robohash.org/commodireiciendiscupiditate.png?size=50x50&set=set1"
				}, {
				  "id": 12,
				  "nombre": "Ediva",
				  "apellidos": "Lukacs",
				  "foto": "https://robohash.org/accusamusminimaenim.jpg?size=50x50&set=set1"
				}, {
				  "id": 13,
				  "nombre": "Estella",
				  "apellidos": "de la Valette Parisot",
				  "foto": "https://robohash.org/fugitremdoloremque.bmp?size=50x50&set=set1"
				}, {
				  "id": 14,
				  "nombre": "Shanan",
				  "apellidos": "Cudmore",
				  "foto": "https://robohash.org/quiaamodi.jpg?size=50x50&set=set1"
				}, {
				  "id": 15,
				  "nombre": "Daffie",
				  "apellidos": "Figures",
				  "foto": "https://robohash.org/quidemquiaconsequuntur.png?size=50x50&set=set1"
				}, {
				  "id": 16,
				  "nombre": "Bambie",
				  "apellidos": "Breawood",
				  "foto": "https://robohash.org/voluptatemutillo.png?size=50x50&set=set1"
				}, {
				  "id": 17,
				  "nombre": "Aurora",
				  "apellidos": "Naerup",
				  "foto": "https://robohash.org/recusandaedelenitienim.jpg?size=50x50&set=set1"
				}, {
				  "id": 18,
				  "nombre": "Jeremiah",
				  "apellidos": "Trewhella",
				  "foto": "https://robohash.org/quamvelminima.jpg?size=50x50&set=set1"
				}, {
				  "id": 19,
				  "nombre": "Claus",
				  "apellidos": "Paladino",
				  "foto": "https://robohash.org/illumiureoccaecati.jpg?size=50x50&set=set1"
				}, {
				  "id": 20,
				  "nombre": "Normand",
				  "apellidos": "Genner",
				  "foto": "https://robohash.org/adoptiovoluptates.bmp?size=50x50&set=set1"
				}, {
				  "id": 21,
				  "nombre": "Kellina",
				  "apellidos": "Cicchillo",
				  "foto": "https://robohash.org/consecteturbeataefuga.bmp?size=50x50&set=set1"
				}, {
				  "id": 22,
				  "nombre": "Nonna",
				  "apellidos": "Widmore",
				  "foto": "https://robohash.org/rerumvoluptasid.png?size=50x50&set=set1"
				}, {
				  "id": 23,
				  "nombre": "Dale",
				  "apellidos": "Rubbens",
				  "foto": "https://robohash.org/doloribusautesse.png?size=50x50&set=set1"
				}, {
				  "id": 24,
				  "nombre": "Ciro",
				  "apellidos": "Navarre",
				  "foto": "https://robohash.org/etnonnecessitatibus.png?size=50x50&set=set1"
				}, {
				  "id": 25,
				  "nombre": "Ibby",
				  "apellidos": "Fruish",
				  "foto": "https://robohash.org/quispraesentiumratione.jpg?size=50x50&set=set1"
				}, {
				  "id": 26,
				  "nombre": "Janaye",
				  "apellidos": "Straffon",
				  "foto": "https://robohash.org/blanditiisquisunt.png?size=50x50&set=set1"
				}, {
				  "id": 27,
				  "nombre": "Devon",
				  "apellidos": "Pudsey",
				  "foto": "https://robohash.org/delenitiarchitectominima.jpg?size=50x50&set=set1"
				}, {
				  "id": 28,
				  "nombre": "Grannie",
				  "apellidos": "Abbie",
				  "foto": "https://robohash.org/voluptatestemporaet.png?size=50x50&set=set1"
				}, {
				  "id": 29,
				  "nombre": "Danell",
				  "apellidos": "Hugenin",
				  "foto": "https://robohash.org/doloremmolestiasipsa.jpg?size=50x50&set=set1"
				}, {
				  "id": 30,
				  "nombre": "Shepherd",
				  "apellidos": "Ethelstone",
				  "foto": "https://robohash.org/auterroraut.png?size=50x50&set=set1"
				}
			]';


	$arrayDatos=json_decode($txtJson);

	



	if (isset($_GET['destruye'])) {
		$_SESSION['cont']=0;
		session_unset();
		session_destroy();
	}else{
		if (isset($_SESSION['cont'])) {
			if (isset($_GET["sig"])) {
				$_SESSION['cont']++;
			}else{
				$_SESSION['cont']--;
			}
			
			if ($_SESSION['cont']>=count($arrayDatos)) {
				$_SESSION['cont']=0;
			}
			if ($_SESSION['cont']<=-1) {
				$_SESSION['cont']=count($arrayDatos)-1;
			}

		}else{
			$_SESSION['cont']=0;
		}
		echo json_encode($arrayDatos[$_SESSION['cont']]);
	}


	

	
?>