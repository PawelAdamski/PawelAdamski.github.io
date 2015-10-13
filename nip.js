function sprawdzNIP(nip){
	if (nip.length!=10) {
		return false;
	}
	var suma = 0;
	suma += parseInt(nip.charAt(0))*6;
	suma += parseInt(nip.charAt(1))*5;
	suma += parseInt(nip.charAt(2))*7;
	suma += parseInt(nip.charAt(3))*2;
	suma += parseInt(nip.charAt(4))*3;
	suma += parseInt(nip.charAt(5))*4;
	suma += parseInt(nip.charAt(6))*5;
	suma += parseInt(nip.charAt(7))*6;
	suma += parseInt(nip.charAt(8))*7;

	suma %= 11;

	return suma===parseInt(nip.charAt(9));
}


