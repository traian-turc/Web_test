export default class pi_simulation {
  
  constructor(btns) {
    this.btns = btns;
    this.canvas = null;
    this.running = false;
  }

  scetch = p => {
    var width = 600;
    var height = 400;
    var box1;
    var box2;
    var countDiv;
  
    var timeStep = 5000; // 50000000
  
    var digits = 5;
    var value = Math.pow(100, digits - 1);
  
    var count = 0;

    this.btns[0].addEventListener("click", () => {
      p.loop();
      this.running = true;
    });
    this.btns[1].addEventListener("click", () => {
      p.noLoop();
      this.running = false;
    });
    this.btns[2].addEventListener("click", () => {
      reset();
    });

    p.setup = () => {
      p.frameRate(60);
      p.createCanvas(width, height);
      p.background(20);
      p.fill(10);
      p.rect(10,10,100,100);
      box1 = new Box(200, 50, 1, 0, 50);
      box2 = new Box(400, 100, value, -2 / timeStep, 100);
      countDiv = p.createDiv(count);
      countDiv.style('font-size', '30pt');
      p.noLoop();
    };
  
    p.draw = () => {
      p.background(50);

      p.fill(10);
      p.rect(0,height-300,50,300);
      for (let i = 0; i < timeStep; ++i) {
  
        if (box1.collide(box2)) {
          const v1 = box1.bounce(box2);
          const v2 = box2.bounce(box1);
          box1.v = v1;
          box2.v = v2;
          count++;
        }
        if (box1.hitWall()) {
          box1.reverse();
          count++;
        }
        box1.update();
        box2.update();
      }
      box1.show();
      box2.show();
      countDiv.html(count);
    };

    var reset = () => {
      p.loop();
      count = 0;
      box1 = null;
      box2 = null;
      box1 = new Box(200, 50, 1, 0, 50);
      box2 = new Box(400, 100, value, -2 / timeStep, 100);
      p.noLoop();
    };

    class Box {
      constructor(x, w, m, v, xC) {
        this.x = x;
        this.y = p.height - w - 1; // -1 for the border
        this.w = w;
        this.v = v;
        this.m = m;
        this.xConst = xC;
      }
      hitWall() {
        return (this.x <= 50);
      }
      reverse() {
        this.v *= -1;
      }
      collide(obj) {
        return !(this.x + this.w < obj.x || this.x > obj.x + obj.w);
      }
      bounce(obj) {
        let sumM = this.m + obj.m;
        let nV = (this.m - obj.m) / sumM * this.v + (2 * obj.m / sumM) * obj.v;
        return nV;
      }
      update() {
        this.x += this.v;
      }
      show() {
        const x = p.constrain(this.x, this.xConst, p.width + 1);
        p.fill(86, 132, 206);
        p.rect(x, this.y, this.w, this.w);
      }
    };
  }
};