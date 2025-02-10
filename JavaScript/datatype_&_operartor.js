let age = 20;
console.log(age);
let name = "Ravi Mali";
console.log(name);
let x = null;
console.log(x);
let y;
console.log(y);

const student = {
    name: "Ravi Mali",
    age: 20,
    marks: 97,
    isPass: true
};
student.age = 21;
student.marks = 99;
console.log(student);
console.log(student.name);
console.log(student.marks);
console.log(student["age"]);
console.log(typeof student.name);

// JavaScript Operators

let a = 5;
let b = 2;
// Arithmetic Operators (Binary Operator)
console.log("a =", a, " b =", b);
console.log("a + b = ",a + b);
console.log("a - b = ",a - b);
console.log("a * b = ",a * b);
console.log("a / b = ",a / b);

//Modulus Operator (Binary Operator)
console.log("a % b = ",a % b);

// Exponentiation Operator (Binary Operator)
console.log("a ** b = ",a ** b);

//Increment Operator (Unary Operator)
a++;
console.log("a++ = ",a);
++a;
console.log("++a = ",a);

//Decrement Operator (Unary Operator)
a--;
console.log("a-- = ",a);
--a;
console.log("--a = ",a);

// Assignment Operators
a += 4;
console.log("a += 4 : ", a);

a -= 4;
console.log("a -= 4 : ", a);

a **= 4;
console.log("a ** 4 =",a);

