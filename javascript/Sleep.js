async function sleep(millis) {
  return new Promise((resolve) => {
    setTimeout(resolve, millis);
  });
}

const t = Date.now();
sleep(100).then(() => {
  console.log(Date.now() - t); // 100
});
