function losowaTablica() {
	var tab = [];
	var n = losowaCyfra()+1;	
	for (var i=0;i<n;i++) {
		tab.push(losowaCyfra());
	}
	return tab;
}


function losowaCyfra() {
	return parseInt(Math.random()*10);
}