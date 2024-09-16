const arr3 = [10,20,30];
console.log(arr3); // 10

// arr3.push("Niet");
// console.log(arr3);

const arr4 = ['aditya','aakash'];
const arr5 = [...arr3 , ...arr4]
console.log(arr5);

// function in typescript

function myfunc():void{
    console.log("Hello" );
    console.log("Printed by function in TYPESCRIPT")
}
console.log(myfunc());

// function with return type 

function myfunc2():number{
    console.log("Hello" );
    console.log("Printed by non void  function in TYPESCRIPT");
    return 10;
}
console.log(myfunc2());

// function with parameter 

function myfunc3(name:string,age:number){

    console.log("Printed by function in TYPESCRIPT");
    
    console.log(`name ${name} age : ${age}`)
}
let nam='Aaditya';
let age=25;
console.log(myfunc3(nam , age));

// object in typescript

//1 object of default type

const myobj = {nam:"Aakash" , age:26}
console.log(myobj);

// general object

const car: { model: string; color: string } = {
    model: 'suzuki',
    color: 'white'
};

console.log(car);

// class in typescript
class student {
    nam : string;
    age : number;
    constructor(){
        // this.name=name;
        // this.age=age;

        console.log(`Default Constructor`);
    }
}
const obj = new student();
//obj;

// parameterized constructor

class student2 {
    nam : string;
    age : number;
    constructor(nam , age){
        // this.name=name;
        // this.age=age;
        this.nam = nam;
        this.age = age;
        console.log(`Parameterized Constructor`);
        
    }
    display():void{
        console.log(`name : ${this.nam} age : ${this.age}`);
    }
}

class student3 extends student2{
    branch:string;
    constructor(nam , age , branch){
        super(nam , age);
        this.branch = branch;

    }
    display2(): void {
        super.display();
        console.log(`branch : ${this.branch}`);
    }
}
const obj2 = new student3("Aakash", 27 , 'cse');
 obj2.display2();


// inheritance in typescript


// interface in typescript

interface newtype{name : string , year : number}
var abc :newtype={name:'aditya', year:28};
console.log(abc.name , abc.year )
