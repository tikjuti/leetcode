Array.prototype.last = function () {
  const length = this.length;
  return length === 0 ? -1 : this[length - 1];
};

let arr = [1, 4, 7];
console.log(arr.last());
