const createFunction = function (n) {
  return () => n++;
};
const counter = createFunction(10);
console.log(counter());
console.log(counter());
console.log(counter());
