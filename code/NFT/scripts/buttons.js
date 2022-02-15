
//ES5 module pattern
var genA = function(genA){

    genA.controller = class extends Stepper {
        constructor(width = 80,url){
            //the interactive part of this project 
            super({list:[0,1,2,3,4,5,6],width:width}).centerReg().pos(0,20,CENTER,BOTTOM).sca(.5);


            const loader = new Loader();
            // this button is here to stop the chaos
            const refresh = new Button({
                width:250,
                label:"Remake",
                corner:10
            })
            .sca(.8)
            .pos(50, 50, LEFT,BOTTOM)
            .tap(() => {
                zogr();
                zgo(url);
            });

            //this is the save button and when you press you can get a screen shot of the current state of the art
            const button = new Button({
                width:250,
                label:"THE WORLD!",
                corner:10
            })
            .sca(.8)
            .pos(50, 50, RIGHT,BOTTOM)
            .tap(() => {
                zogr();
                button.removeFrom();
                refresh.removeFrom();
                this.removeFrom();
                loader.save();
                button.addTo();
                refresh.addTo();
                this.addTo();
            });
        };
    };

    //last part of ES5 module pattern
    return genA;
}(genA || {});
