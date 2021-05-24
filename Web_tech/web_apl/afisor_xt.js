function afisor_xt(pozx, pozy, n_maxx, n_maxy,c)
            {
                this.x0 = pozx;// pozitia pe x
                this.y0 = pozy;// pozitia pe y
                this.w = n_maxx; // latimea
                this.h = n_maxy;// inaltimea
                this.nr_max = n_maxx; // numarul de puncte pe x
                this.val_max = n_maxy; // valoarea maxima
				this.cnvs=c; // canvas
            }
afisor_xt.prototype = {
	constructor: afisor_xt,
	deseneaza:function (vls, nv)  {
	var val_v, val ,i ,j;
	
	// sterg continut
	
	this.cnvs.beginPath();
	this.cnvs.fillStyle = "#FFFFFF";
	this.cnvs.fillRect(this.x0-30,this.y0-10,this.x0+this.w,this.y0+this.h+30);
	this.cnvs.stroke();	
	
	//chenar
	
	
	this.cnvs.beginPath();
	this.cnvs.moveTo(this.x0,this.y0); 
	this.cnvs.strokeStyle = "rgb(0,0,255)";
	this.cnvs.lineTo(this.x0+this.w,this.y0);
	this.cnvs.lineTo(this.x0+this.w,this.y0+this.h);
	this.cnvs.lineTo(this.x0,this.y0+this.h);
	this.cnvs.lineTo(this.x0,this.y0);
	this.cnvs.stroke();
    	val_v = vls[1] * this.h / this.val_max;

	// grid orizontal minor
			
	this.cnvs.beginPath();
    	this.cnvs.strokeStyle = "rgb(200,200,200)";
	this.cnvs.font = "10px Arial";
	for (j = this.h-10; j >=0; j -= 10)
	{
		this.cnvs.moveTo(this.x0,this.y0+j); 
		this.cnvs.lineTo(this.x0 + this.w, this.y0 + j);
    	}
	
	// grid vertical minor
	
	for (j = 10; j<=this.w-10; j += 10)
    	{
		this.cnvs.moveTo(this.x0+j,this.y0+1); 
		this.cnvs.lineTo(this.x0 + j ,this.y0+ this.h+1);
    	}
	this.cnvs.stroke();

	
	// grid orizontal major
			
	this.cnvs.beginPath();
   	this.cnvs.strokeStyle = "rgb(150,150,150)";
	
    	for (j = this.h; j >=0; j -= 50)
    	{
		this.cnvs.moveTo(this.x0,this.y0+j); 
		this.cnvs.lineTo(this.x0 + this.w ,this.y0 + j);
		this.cnvs.strokeText(this.h-j,this.x0-20,this.y0 + j);
    	}

	// grid vertical major
	 
    	for (j = 0; j<=this.w; j += 50)
    	{
		this.cnvs.moveTo(this.x0+j,this.y0); 
		this.cnvs.lineTo(this.x0 + j ,this.y0+ this.h-1);	
		this.cnvs.strokeText(j,this.x0 + j,this.y0 + this.h+10);
    	}
	this.cnvs.stroke();
	
	// trasez graficul
	this.cnvs.beginPath();
	this.cnvs.strokeStyle = "rgb(240,0,0)";
	this.cnvs.moveTo(this.x0,this.y0+val_v); 
	 for (i = 0; i<=nrv; i +=1){
		val = vls[i] * this.h / this.val_max; //scalare
		this.cnvs.lineTo(this.x0 + i ,this.y0+ this.h-val);
	 }
	this.cnvs.stroke();
}
}