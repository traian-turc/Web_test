function voltm (c,x,y,w,vm) {
	this.cnvs=c; // canvas
    this.x0 = x; // pozitia pe x
    this.y0 = y+20; // pozitia pe y
	this.wd = w; // latimea
	this.ht = w/2+10; // inaltimea
	this.vmax=vm // valoarea maxima
	var alfa_r=0; // ungji in radiani
	var alfa_gr=0; // ungji in grade
}
voltm.prototype = {
    constructor: voltm,
    set_val:function (val_gr)  {
		var lt = 15;
		var lg = 22;
		var lv = 17;
		var x1, x2, xt, y1, y2, yt;
		var xc = this.x0 + this.wd / 2;
		var yc = this.y0 + this.wd / 2;
		raza = this.wd / 2;
		var nrd=0;
		var val_a=0;
		
		// Stergerea interiorului
		
		this.cnvs.beginPath();
		this.cnvs.fillStyle = "#ffffff";
		this.cnvs.fillRect(this.x0+1,this.y0-20,this.wd-2,this.ht+10);
		this.cnvs.stroke();
		
		// desenez contur voltmetru
		
		this.cnvs.beginPath();
		this.cnvs.moveTo(this.x0,this.y0-20); 
		this.cnvs.strokeStyle = "rgb(255,0,0)";
		this.cnvs.lineTo(this.x0+this.wd,this.y0-20);
		this.cnvs.lineTo(this.x0+this.wd,this.y0+this.ht);
		this.cnvs.lineTo(this.x0,this.y0+this.ht);
		this.cnvs.lineTo(this.x0,this.y0-20);
		this.cnvs.stroke();
		
		// desenez gradatii
		this.cnvs.beginPath();
		this.cnvs.strokeStyle = "rgb(120,120,120)";
		this.cnvs.font = "10px Arial";
		alfa_r=0;		
		alfa_gr = 140;//  unghiul in grade
		while (alfa_gr >=40)
		{
		alfa_r = 2 * Math.PI * (alfa_gr) / 360;// unghiul in radiani
		if (nrd % 5 == 0)
		{
			x1 = xc + (raza-lt) * Math.cos(alfa_r);
			y1 = yc - (raza-lt) * Math.sin(alfa_r);
			xt = xc-5 + raza * Math.cos(alfa_r);
			yt = yc - raza * Math.sin(alfa_r);
			//zona_des.DrawString(System.Convert.ToString(val_a), font_ni, pens_blu, xt, yt);
			this.cnvs.strokeText(val_a,xt,yt);
			val_a = val_a + this.vmax /10;
		}
		else
		{
			x1 = xc + (raza - lg) * Math.cos(alfa_r);
			y1 = yc - (raza - lg) * Math.sin(alfa_r);
		}
		x2 = xc + (raza - 2 * lt) * Math.cos(alfa_r);
		y2 = yc - (raza - 2 * lt) * Math.sin(alfa_r);
		//zona_des.DrawLine(creion, x1, y1, x2, y2);
		this.cnvs.moveTo(x1,y1);
		this.cnvs.lineTo(x2,y2)
		alfa_gr -= 2;
		nrd++;
		}
		this.cnvs.stroke();
	
		// alfa_gr unghiul in grade
	
		val_gr=140-100*val_gr/this.vmax // scalare
		alfa_r = 2 * Math.PI * (val_gr) / 360;// unghiul in radiani
		var x = xc + (raza - 2 * lv) * Math.cos(alfa_r);
		var y = yc - (raza - 2 * lv) * Math.sin(alfa_r);
		this.cnvs.beginPath();
		this.cnvs.strokeStyle = "rgb(0,0,255)";
		this.cnvs.moveTo(xc,yc);
		this.cnvs.lineTo(x,y);
		this.cnvs.stroke();
	},
	
	deseneaza:function ()
	{
	
		// desenez contur voltmetru
		
		this.cnvs.beginPath();
		this.cnvs.moveTo(this.x0,this.y0-20); 
		this.cnvs.strokeStyle = "rgb(255,0,0)";
		this.cnvs.lineTo(this.x0+this.wd,this.y0-20);
		this.cnvs.lineTo(this.x0+this.wd,this.y0+this.ht);
		this.cnvs.lineTo(this.x0,this.y0+this.ht);
		this.cnvs.lineTo(this.x0,this.y0-20);
		this.cnvs.stroke();
	}
}
