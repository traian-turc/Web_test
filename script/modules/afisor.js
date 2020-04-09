export default class afisor {
  constructor(btns) {
    this.width = 600;
    this.height = 400;
    this.backgroundColor = 255;
    this.padding = 40;

    this.canvas = null;
    this.p = null;
    this.running = false;
    this.hovered = false;

    this.btns = btns;
    this.offsetY = Math.floor(this.height / 2);
    this.display = "Coordonates";

    this.sinWave = null;

    this.init();
  };

  init() {
    this.btns[0].addEventListener("click", () => {
      this.running = true;
      this.p.loop();
    });
    this.btns[1].addEventListener("click", () => {
      this.running = false;
    });
  }
  scetch = p => {
    p.setup = () => {
      p.frameRate(30);
      this.canvas = p.createCanvas(this.width, this.height);
      this.canvas.mouseOver(() => {
        this.hovered = true;
        p.loop();
      });
      this.p = p;
      this.sinWave = new SinGraph(p, {
        left: this.padding,
        right: 500
      }, this.transY(15), 100.0, 200.0);
      p.background(this.backgroundColor);
    };
    p.draw = () => {
      p.background(this.backgroundColor);
      this.sinWave.render();
      if (this.running) {
        this.sinWave.calculate();
      }
      var col = this.sinWave.hasPoint(this.setPrec(p.mouseX, 2), this.setPrec(p.mouseY, 2));
      if (col!= null && this.hovered === true) {
        p.ellipse(col.x, col.y, 5);
        this.drawMouse(col.x, col.y);
        this.updateCord(col.x, col.y);
      }
      this.drawScales();
      var detection = 30
      if ((p.mouseX < -detection ||
          p.mouseX > this.width + detection ||
          p.mouseY < -detection ||
          p.mouseY > this.height + detection) &&
          this.running === false) {
        this.hovered = false;
        p.noLoop();
      }
    };
  };
  drawScales() {
    var step = 10;
    this.p.stroke(10);
    this.p.fill(10);
    this.p.textSize(12);
    //  vertical axis
    this.p.textAlign(this.p.RIGHT, this.p.CENTER);
    this.p.line(this.padding, this.padding, this.padding, this.height - this.padding);
    this.p.line(this.padding, this.padding, this.padding - 5, this.padding + 5);
    this.p.line(this.padding, this.padding, this.padding + 5, this.padding + 5);
    for (var i = this.height - this.padding; i >= this.padding + 20; i -= step) {
      if ((i - 10) % 50 == 0) {
        this.p.line(this.padding, i, this.padding - 12, i);
        this.p.text(Math.abs(i - 360) / 10, this.padding - 15, i);
      } else {
        this.p.line(this.padding, i, this.padding - 5, i);
      }
    };
    //  horizontal axis
    this.p.textAlign(this.p.CENTER, this.p.CENTER);
    this.p.line(this.padding, this.height - this.padding, this.width - this.padding, this.height - this.padding);
    this.p.line(this.width - this.padding, this.height - this.padding, this.width - this.padding - 5, this.height - this.padding - 5);
    this.p.line(this.width - this.padding, this.height - this.padding, this.width - this.padding - 5, this.height - this.padding + 5);
    for (var i = this.padding; i < this.width - this.padding - 15; i += step) {
      if ((i - this.padding) % 50 == 0) {
        this.p.line(i, this.height - this.padding, i, this.height - this.padding + 12);
        this.p.text((i - this.padding) / 10, i, this.height - this.padding + 20);
      } else {
        this.p.line(i, this.height - this.padding, i, this.height - this.padding + 5);
      }
    };
  };
  updateCord(x, y) {
    var cx = this.p.constrain(x, this.padding, this.width - 60);
    var cy = this.p.constrain(y, this.padding + this.padding / 2, this.height - this.padding);
    this.display = `x: ${this.transXInv(cx)}    y: ${this.transYInv(cy)}`;
    this.p.stroke(10);
    this.p.textSize(15);
    this.p.fill(10);
    this.p.text(this.display, this.width - this.padding - 60, this.padding - 15);
  };
  drawMouse(x, y) {
    this.p.stroke(255, 0, 0);
    var cX = this.p.constrain(x, this.padding, this.width - 60);
    var cY = this.p.constrain(y, 60, this.height - this.padding);
    this.p.line(this.padding, cY, this.width - this.padding, cY);
    this.p.line(cX, this.height - this.padding, cX, this.padding);
  }
  transX = x => x + this.padding;
  transXInv = x => this.setPrec(this.p.map(x, this.padding, this.width - 60, 0, 50), 1);
  transY = y => this.p.map(y, 0, 30, this.height - this.padding, this.padding + this.padding / 2);
  transYInv = y => this.setPrec(this.p.map(y, this.height - this.padding, this.padding + this.padding / 2, 0, 30), 1);
  setPrec = (nr, prec) => Number.parseFloat(nr).toFixed(prec);
}

class SinGraph {
  constructor(p, bounds, origin, amplitudine, perioada, deltaAV = 0.02) {
    this.p = p;
    this.bounds = bounds;
    this.origin = origin;
    this.deltaAV = deltaAV;
    this.xspacing = 1;
    this.tetha = 0.0;
    this.amplitudine = amplitudine;
    this.perioada = perioada;
    this.dx = (Math.PI * 2 / this.perioada) * this.xspacing;
    this.values = new Array(Math.floor(this.bounds.right / this.xspacing)); //width
  }
  calculate() {
    this.tetha = this.tetha + this.deltaAV;
    var x = this.tetha;
    for (let i = 0; i < this.values.length; i++) {
      this.values[i] = Math.sin(x) * this.amplitudine;
      x += this.dx;
    }
  }
  render() {
    this.p.stroke(51, 153, 255);
    this.p.strokeWeight(2);
    this.p.noFill();
    this.p.beginShape();
    for (let x = 0; x < this.values.length; x++) {
      this.p.vertex(x * this.xspacing + this.bounds.left, this.origin + this.values[x]);
    }
    this.p.endShape();
    this.p.strokeWeight(1);
  }
  hasPoint(x, y) {
    var precision = 5;
    for (var i = 0; i < this.values.length; i++) {
      if (Math.abs((i * this.xspacing + this.bounds.left) - x) <= precision &&
        Math.abs((this.origin + this.values[i]) - y) <= precision) {
        return {x:i * this.xspacing + this.bounds.left, y: this.origin + this.values[i]};
      }
    }
    return null;
  }
}