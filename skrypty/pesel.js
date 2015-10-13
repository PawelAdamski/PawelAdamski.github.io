function sprawdzPesel(pesel){
	if (pesel.length!=11) {
		return false;
	}
	var suma = 0;
	suma += parseInt(pesel.charAt(0))*1;
	suma += parseInt(pesel.charAt(1))*3;
	suma += parseInt(pesel.charAt(2))*7;
	suma += parseInt(pesel.charAt(3))*9;
	suma += parseInt(pesel.charAt(4))*1;
	suma += parseInt(pesel.charAt(5))*3;
	suma += parseInt(pesel.charAt(6))*7;
	suma += parseInt(pesel.charAt(7))*9;
	suma += parseInt(pesel.charAt(8))*1;
	suma += parseInt(pesel.charAt(9))*3;

	suma %= 10;
	suma = 10 -suma;
	suma %= 10;

	return suma===parseInt(pesel.charAt(10));
}