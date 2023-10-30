var flat = function (arr, n) {
  if (n == 0) return arr;
  const flattened = [];
  for (const item of arr) {
    if (Array.isArray(item)) flattened.push(...flat(item, n - 1));
    else flattened.push(item);
  }
  return flattened;
};

const arr1 = [1, 2, 3, [4, 5, 6], [7, 8, [9, 10, 11], 12], [13, 14, 15]];
const n1 = 0;
console.log(flat(arr1, n1));

const arr2 = [1, 2, 3, [4, 5, 6], [7, 8, [9, 10, 11], 12], [13, 14, 15]];
const n2 = 1;
console.log(flat(arr2, n2));

const arr3 = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, [9, 10, 11], 12],
  [13, 14, 15],
];
const n3 = 2;
console.log(flat(arr3, n3));
