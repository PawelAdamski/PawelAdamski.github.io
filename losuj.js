losuj = [];
 
losuj.tablice = function(n,m){
	var wynik=new Array(n);
	if (m===undefined){
		for (var i=0;i<n;i++){
			wynik[i]=Math.floor((Math.random() * 1000) + 1);
		}
	} else {
		for (var i=0;i<n;i++){
			wynik[i]=losuj.tablice(m)
		}
	}
	return wynik;
}

