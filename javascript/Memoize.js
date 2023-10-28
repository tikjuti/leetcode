function memoize(fn) {
  let callCount = 0;
  const callHistory = new Map();

  function calculate(...args) {
    const key = JSON.stringify(args);
    if (callHistory.has(key)) {
      return callHistory.get(key);
    }
    const result = fn(...args);
    callHistory.set(key, result);
    callCount++;
    return result;
  }
  return function (...args) {
    if (args[0] === "getCallCount") {
      return callCount;
    }
    return calculate(...args);
  };
}

const sum = (a, b) => a + b;
const memoizedSum = memoize(sum);
const actions1 = [];
actions1.push(memoizedSum(2, 2));
actions1.push(memoizedSum(2, 2));
actions1.push(memoizedSum("getCallCount"));
actions1.push(memoizedSum(1, 2));
actions1.push(memoizedSum("getCallCount"));

const factorial = (n) => (n <= 1 ? 1 : n * factorial(n - 1));
const memoFactorial = memoize(factorial);
const actions2 = [];
actions2.push(memoFactorial(2));
actions2.push(memoFactorial(3));
actions2.push(memoFactorial(2));
actions2.push(memoFactorial("getCallCount"));
actions2.push(memoFactorial(3));
actions2.push(memoFactorial("getCallCount"));

const fib = (n) => (n <= 1 ? 1 : fib(n - 1) + fib(n - 2));
const memoFib = memoize(fib);
const actions3 = [];
actions3.push(memoFib(5));
actions3.push(memoFib("getCallCount"));

console.log(actions1);
console.log(actions2);
console.log(actions3);
