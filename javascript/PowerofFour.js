var isPowerOfFour = function (n) {
  if (n <= 0) return false;
  if ((n & (n - 1)) !== 0) return false;
  let count = 0;
  while (n > 1) {
    n >>= 1;
    count++;
  }
  return count % 2 === 0;
};
console.log(isPowerOfFour(16));
console.log(isPowerOfFour(5));
