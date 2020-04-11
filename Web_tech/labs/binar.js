function binar (x,y,w,h,c) {
    this.x0 = x; // pozitia pe x
    this.y0 = y; // pozitia pe y
	this.wd = w; // latimea
    this.ht = h; // inaltimea
	this.cnvs=c; // canvas
}
binar.prototype = {
    constructor: binar,
    deseneaza:function ()  {
	
	// desenez contur
	
	this.cnvs.beginPath();
	this.cnvs.moveTo(this.x0,this.y0+2); 
	this.cnvs.strokeStyle = "rgb(0,0,255)";
	this.cnvs.lineTo(this.x0+this.wd,this.y0+2);
	this.cnvs.lineTo(this.x0+this.wd,this.y0+this.ht-4);
	this.cnvs.lineTo(this.x0,this.y0+this.ht-4);
	this.cnvs.lineTo(this.x0,this.y0+2);
	this.cnvs.stroke();

	},
	set_val:function (val,nrb)  {
	
	// Stergerea interiorului 
	
	this.cnvs.beginPath();
	this.cnvs.fillStyle = "#ffffff";
	this.cnvs.fillRect(this.x0+1,this.y0+3,this.wd-2,this.ht-8);
	this.cnvs.stroke();
	
	// afisare valoare binara
	
	wb = this.wd/ (3 * nrb);
    hb = this.ht / 3;
    x = this.x0 + this.wd -2* wb;
    y = this.y0 + hb;
    var i=0;
	var bit=0;
	this.cnvs.beginPath();

	// desenare biti
	
    for (i = nrb - 1; i >= 0; i--)
		{
			bit=parseInt(val%2);
			val=parseInt(val/2);
			if(bit==1){
				this.cnvs.fillStyle = "#ff0000";
				this.cnvs.fillRect(x, y, wb, hb);
				this.cnvs.stroke();
			}
			else
			{
				this.cnvs.fillStyle = "#F0F0F0";
				this.cnvs.fillRect(x, y, wb, hb);
				this.cnvs.stroke();
			}
			x -= 3 * wb;
		}

    }
}
