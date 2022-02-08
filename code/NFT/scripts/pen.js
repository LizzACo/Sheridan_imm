//ES5 module pattern
var genA = function(genA){

     genA.penAnimate = class extends Pen {
         constructor(color){
             let size;
             let x;
             let y;
             let spread;
             //inherit parameters from ZIM pen
             super(size,color,"line",.8,spread).center()

             this.write = true;

             //update the canvas 60 frame per second
             let ticker = Ticker.add(() => {
                 this.size = 3.69
                 this.spread = rand(5,50,false);
                 x = rand(1,-1,false,true);
                 y = rand(1,-1,false,true);

                 // create a little pattern
                 //if (x > -.6 || x < .9) x += x * .3;
                 //if (y > .3 || y < .9) y *= y * .3;
                 //console.log(x,y);

                 //when the pen hits the edge of the canvas it would bounce back
                 if(this.x > frame.width || this.x < 0) this.x *= -x;
                 else this.x += x * 36;
                 if(this.y > frame.height || this.y < 0) this.y *= -y;
                 else this.y += y * 24;
                 //console.log(this.x,this.y);
             });
         };
     };

    //last part of ES5 module pattern
    return genA;
}(genA || {});
