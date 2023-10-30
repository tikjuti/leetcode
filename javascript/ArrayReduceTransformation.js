var reduce = function (nums, fn, init) {
  let accumulator = init;
  for (let i = 0; i < nums.length; i++) {
    accumulator = fn(accumulator, nums[i]);
  }
  return accumulator;
};

const nums1 = [1, 2, 3, 4];
const result1 = reduce(nums1, (accum, curr) => accum + curr, 0);
console.log(result1);

const nums2 = [1, 2, 3, 4];
const result2 = reduce(nums2, (accum, curr) => accum + curr * curr, 100);
console.log(result2);

const nums3 = [];
const result3 = reduce(nums3, (accum, curr) => 0, 25);
console.log(result3);
