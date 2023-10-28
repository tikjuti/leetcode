function snailTraversal(inputArray, rowsCount, colsCount) {
  const outputMatrix = Array.from({ length: rowsCount }, () =>
    Array(colsCount).fill(0)
  );
  let index = 0;
  let direction = 1;

  for (let col = 0; col < colsCount; col++) {
    if (direction === 1) {
      for (let row = 0; row < rowsCount; row++) {
        outputMatrix[row][col] = inputArray[index];
        index++;
      }
      direction = -1;
    } else {
      for (let row = rowsCount - 1; row >= 0; row--) {
        outputMatrix[row][col] = inputArray[index];
        index++;
      }
      direction = 1;
    }
  }

  return outputMatrix;
}

const inputArray = [
  19, 10, 3, 7, 9, 8, 5, 2, 1, 17, 16, 14, 12, 18, 6, 13, 11, 20, 4, 15,
];
const rowsCount = 5;
const colsCount = 4;

const outputMatrix = snailTraversal(inputArray, rowsCount, colsCount);

for (let row of outputMatrix) {
  console.log(row);
}
