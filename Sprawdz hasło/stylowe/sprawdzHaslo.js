function sprawdz(){
	var takieSame = document.getElementById('takieSame');
	var litera = document.getElementById('litera');
	var cyfra = document.getElementById('cyfra');
	var znakSpecjalny = document.getElementById('znakSpecjalny');
	var dlugosc = document.getElementById('dlugosc');

	var haslo1 = document.getElementById('haslo1').value
	var haslo2 = document.getElementById('haslo2').value

	if (czyTakieSame(haslo1,haslo2)) {
		takieSame.className = "OK"
	} else {
		takieSame.className = "BLAD"
	}

	if (czyJestLitera(haslo1,haslo2)) {
		litera.className = "OK"
	} else {
		litera.className = "BLAD"
	}

	if (czyJestCyfra(haslo1,haslo2)) {
		cyfra.className = "OK"
	} else {
		cyfra.className = "BLAD"
	}

	if (czyJestZnak(haslo1,haslo2)) {
		znakSpecjalny.className = "OK"
	} else {
		znakSpecjalny.className = "BLAD"
	}

	if (haslo1.length>=8) {
		dlugosc.className = "OK"
	} else {
		dlugosc.className = "BLAD"
	}
}


function czyTakieSame(haslo1,haslo2){
	return haslo1===haslo2;
}

function czyJestLitera(haslo){
	for (var i=0;i<haslo.length;i++){
		if (czyLitera(haslo.charAt(i))){
			return true;
		}
	}	
}


function czyLitera(znak){
	return znak==="a" ||  znak==="A" ||
		   znak==="b" ||  znak==="B" ||
		   znak==="c" ||  znak==="C" ||
		   znak==="d" ||  znak==="D" ||
		   znak==="e" ||  znak==="E" ||
		   znak==="f" ||  znak==="F" ||
		   znak==="g" ||  znak==="G" ||
		   znak==="h" ||  znak==="H";
}

function czyJestCyfra(haslo){
	for (var i=0;i<haslo.length;i++){
		if (czyCyfra(haslo.charAt(i))){
			return true;
		}
	}	
}


function czyCyfra(znak){
	return znak === "0" || znak === "1" || znak === "2" || znak === "3" || znak === "4" || znak === "5";
}

function czyJestZnak(haslo){
	for (var i=0;i<haslo.length;i++){
		if (czyZnak(haslo.charAt(i))){
			return true;
		}
	}	
}


function czyZnak(znak){
	return znak === "!" || znak === "@" || znak === "#" || znak === "$" || znak === "%" || znak === "^";
}