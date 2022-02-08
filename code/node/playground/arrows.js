var square = (x) => {
    return x*x;
}

console.log(square(9));

var user = {
    name:'was',
    sayHi: ()=>{
        console.log(arguments);
        console.log(`oh hai! I am ${this.name}`);
    },
    sayHiAlt(){
        console.log(arguments);
        console.log(`oh hai! I am ${this.name}`);
    }
};

user.sayHi(234,555,555);
user.sayHiAlt(1,2,3);
