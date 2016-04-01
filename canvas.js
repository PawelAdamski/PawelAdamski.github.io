	function prostokat(x,y,width,height,color) {
	var canvas = document.getElementById("canvas");
   	var ctx = canvas.getContext("2d");
	ctx.beginPath();
	ctx.rect(x,y,width,height);
	ctx.fillStyle=color;
	ctx.fill();
	ctx.closePath();   	
	}

	for (var i=0;i<=8;i++) {
		prostokat(0,i*80,640,2,"black");
		prostokat(i*80,0,2,640,"black");
	}


	function koloruj(x,y,kolor){
		prostokat(x*80+2,y*80+2,80-2,80-2,kolor);
	}

