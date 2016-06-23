var options = {
  valueNames: [ 'numer', 'tytul' ],
  item: '<li onclick="pokaz(this)"><strong class="numer"></strong>. <span class="tytul"></span></li>',
  page: 10
};

piesni.sort(function(a,b){return a.numer-b.numer;})
var teksty = []
var tytuly = []
piesni.forEach(function (e){ teksty[e.numer] = e.tekst; tytuly[e.numer] = e.tytul})

var lista = piesni.slice(0);
lista.forEach(function (e){ delete e.tekst})


var userList = new List('users', options, lista);


function pokaz(e) {
	numer = parseInt(e.getElementsByClassName('numer')[0].innerHTML);
	pokazTekst(numer);
}

function pokazTekst(numer){
	$("#piesn").show();
	$("#users").hide();
	$("#tytul").html(tytuly[numer]);
	$("#tekst").html(teksty[numer]);
}

function back() {
	$("#piesn").hide();
	$("#users").show();
}
