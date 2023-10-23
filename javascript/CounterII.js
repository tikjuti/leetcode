var createCounter = function (init) {
  let current = init;

  return {
    increment: function () {
      current++;
      return current;
    },
    decrement: function () {
      current--;
      return current;
    },
    reset: function () {
      current = init;
      return current;
    },
  };
};
const calls1 = ["increment", "reset", "decrement"];
const counter1 = createCounter(5);
const results1 = calls1.map((call) => counter1[call]());
console.log(results1);

const calls2 = ["increment", "increment", "decrement", "reset", "reset"];
const counter2 = createCounter(0);
const results2 = calls2.map((call) => counter2[call]());
console.log(results2);
