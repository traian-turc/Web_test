export default class test {
  constructor(btns) {
    this.width = 600;
    this.height = 400;
    this.backgroundColor = 50; 

    this.btns = btns;
    this.canvas = null;
    this.p = null;
    this.running = false;

    this.entities = null;
    this.nrOfEntities = 100;
    this.dist = [...Array(this.width/5)].map(elem => new Array(this.height/5));
  }

  scetch = p => {
    this.btns[0].addEventListener("click", () => {
      p.loop();
      this.running = true;
    });
    this.btns[1].addEventListener("click", () => {
      p.noLoop();
      this.running = false;
    });
    this.btns[2].addEventListener("click", () => {
      this.reset();
    });

    p.setup = () => {
      this.canvas = p.createCanvas(this.width, this.height);
      this.p = p;
      p.background(this.backgroundColor);
      this.generateEntities(this.nrOfEntities);
      p.noLoop();

      // ///   TESTING
      // this.entities[0].type = this.EntityType.INFECTIOUS;
      // this.entities[1].type = this.EntityType.INFECTIOUS;
      // this.entities[0].size = 100;
      // this.entities[1].size = 100;
      // this.entities[0].position.x = 110;
      // this.entities[0].position.y = 110;
      // this.entities[1].position.x = 100;
      // this.entities[1].position.y = 100;
    }
    p.draw = () => {
      p.background(this.backgroundColor);
      
      // ///   TESTING
      // var a = this.entities[0];
      // var b = this.entities[1];
      // console.log(p.collideCircleCircle(a.position.x, a.position.y, a.size, b.position.x,b.position.y,b.size));
      
      this.entities.map(i => {
        i.update();
      });
      //this.entities[Math.floor(Math.random() * 200)].type = this.EntityType.INFECTIOUS;
    }
  };

  reset = () => {
    this.p.loop();
    this.entities.map(i => {
      i.reset();
    });
    this.p.noLoop();
  };

  generateEntities = number => {
    this.entities = new Array(number);
    for (var i = 0; i < number; ++i) {
      this.entities[i] = new this.Entity(this);
    }
  }

  EntityType = class {
    static SUSCEPTIBLE = { id: 1, name: 'susceptible', color: '#3399ff' };
    static INFECTIOUS = { id: 2, name: 'infectious', color: '#ff3300' };
    static REMOVED = { id: 3, name: 'removed', color: '#999966' };
  }

  Entity = class {
    constructor(host) {
      this.host = host;
      this.size = 10;
      this.position = {
        x: Math.floor(Math.random() * this.host.width),
        y: Math.floor(Math.random() * this.host.height)
      }
      this.direction = {
        x: Math.floor(Math.random() * 3) -1,
        y: Math.floor(Math.random() * 3) -1
      }
      this.timesMoved = 0;
      this.moveThreshold = Math.floor(Math.random() * 50) + 20;

      this.type = this.host.EntityType.SUSCEPTIBLE;
      this.aura = 30;

      this.host.dist[Math.floor(this.position.y/5)][Math.floor(this.position.x/5)] = this;
    }
    update = () => {
      if (this.timesMoved >= this.moveThreshold) {
        this.updateDirection();
        this.timesMoved = 0
      }
      this.updateMovement();
      this.timesMoved++;
      this.render();
    }
    render = () => {
      this.host.p.fill(this.type.color);
      this.host.p.ellipseMode(this.host.p.CENTER);
      this.host.p.ellipse(this.position.x, this.position.y, this.size);
      
      if (this.type == this.host.EntityType.INFECTIOUS) {
        this.host.p.fill(0,0,0,0);
        this.host.p.ellipse(this.position.x, this.position.y, this.aura);
      }
    }
    reset = () => {
      this.position = {
        x: Math.floor(Math.random() * this.host.width),
        y: Math.floor(Math.random() * this.host.height)
      }
    }
    updateDirection = () => {
      this.direction.x = Math.floor(Math.random() * 3) -1;
      this.direction.y = Math.floor(Math.random() * 3) -1;
    }
    updateMovement = () => {
      var newX = this.position.x + this.direction.x;
      var newY = this.position.y + this.direction.y;

      if (newX > this.host.width) {
        this.direction.x = this.direction.x * -1;
      }
      if (newX < 0) {
        this.direction.x = this.direction.x * -1;
      }
      if (newY > this.host.height) {
        this.direction.y = this.direction.y * -1;
      }
      if (newY < 0) {
        this.direction.y = this.direction.y * -1;
      }
      
      this.position.x += this.direction.x;
      this.position.y += this.direction.y;
    }
    distance = () => {

    }
  }
};