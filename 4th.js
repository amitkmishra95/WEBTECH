var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __spreadArray = (this && this.__spreadArray) || function (to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
};
var arr3 = [10, 20, 30];
console.log(arr3); // 10
// arr3.push("Niet");
// console.log(arr3);
var arr4 = ['aditya', 'aakash'];
var arr5 = __spreadArray(__spreadArray([], arr3, true), arr4, true);
console.log(arr5);
// function in typescript
function myfunc() {
    console.log("Hello");
    console.log("Printed by function in TYPESCRIPT");
}
console.log(myfunc());
// function with return type 
function myfunc2() {
    console.log("Hello");
    console.log("Printed by non void  function in TYPESCRIPT");
    return 10;
}
console.log(myfunc2());
// function with parameter 
function myfunc3(name, age) {
    console.log("Printed by function in TYPESCRIPT");
    console.log("name ".concat(name, " age : ").concat(age));
}
var nam = 'Aaditya';
var age = 25;
console.log(myfunc3(nam, age));
// object in typescript
//1 object of default type
var myobj = { nam: "Aakash", age: 26 };
console.log(myobj);
// general object
var car = {
    model: 'suzuki',
    color: 'white'
};
console.log(car);
// class in typescript
var student = /** @class */ (function () {
    function student() {
        // this.name=name;
        // this.age=age;
        console.log("Default Constructor");
    }
    return student;
}());
var obj = new student();
//obj;
// parameterized constructor
var student2 = /** @class */ (function () {
    function student2(nam, age) {
        // this.name=name;
        // this.age=age;
        this.nam = nam;
        this.age = age;
        console.log("Parameterized Constructor");
    }
    student2.prototype.display = function () {
        console.log("name : ".concat(this.nam, " age : ").concat(this.age));
    };
    return student2;
}());
var student3 = /** @class */ (function (_super) {
    __extends(student3, _super);
    function student3(nam, age, branch) {
        var _this = _super.call(this, nam, age) || this;
        _this.branch = branch;
        return _this;
    }
    student3.prototype.display2 = function () {
        _super.prototype.display.call(this);
        console.log("branch : ".concat(this.branch));
    };
    return student3;
}(student2));
var obj2 = new student3("Aakash", 27, 'cse');
obj2.display2();
var abc = { name: 'aditya', year: 28 };
console.log(abc.name, abc.year);
