var person = {
  name: "Saroj Adhikari",
  age: 22,
  city: "Kathmandu",
  hobbies: ["Reading", "Gaming", "Coding"],
};
var jsonStr = JSON.stringify(person);
console.log("Original Object:");
console.log(person);
console.log("\nJSON String:");
console.log(jsonStr);
var parsedPerson = JSON.parse(jsonStr);
console.log("\nParsed Object:");
console.log(parsedPerson);
