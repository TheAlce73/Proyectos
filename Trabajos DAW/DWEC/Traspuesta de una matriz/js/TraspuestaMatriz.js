	var matriz=[
			[1,2,3],
			[4,5,6],
			[7,8,9]
		];

	
		
		function load(){
	
		var CodHTML= "<table border=3 bordercolor=blue>";
		CodHTML+= "<tr> <th colspan=\"5\">Primera Matriz</th></tr>";
		for (var i=0; i <3 ; i++) { 
			CodHTML+= "<tr>";
			for (var x=0; x < 3; x++) { 
					var m=matriz[i][x];
					CodHTML+=" <td> "+m+ "</td>";
			}
			CodHTML+="<tr>";
		}
		CodHTML+="</table>";
		CodHTML+="</br>";

		var matriz2=[
			[1,2,3],
			[4,5,6],
			[7,8,9]
		];

		for (var i=0; i <3 ; i++) { 
			for (var x=0; x < 3; x++) { 
				matriz2[i][x]=matriz[x][i];
				
				
			}
		}
		CodHTML+= "<table border=3 bordercolor=blue>";
		CodHTML+= "<tr> <th colspan=\"5\">Matriz Traspuesta</th></tr>";
		for (var i=0; i <3 ; i++) { 
			CodHTML+= "<tr>";
			for (var x=0; x < 3; x++) { 
					var m=matriz2[i][x];
					CodHTML+=" <td>" +m +"</td>";
			}
			CodHTML+="<tr>";
		}
		CodHTML+="</table>";
		document.getElementById("demo").innerHTML=CodHTML;

	}
	window.onload=load;
		