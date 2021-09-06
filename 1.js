function howManyRepeated(string) {
  try {
    return string
      .toLowerCase()
      .split("")
      .sort()
      .join("")
      .match(/(.)\1+/g).length;
  } catch (e) {
    return 0;
  } // if TypeError
}
console.log(howManyRepeated("rara")); // 2
// jumlah huruf yang memiliki duplikat adalah 2 yaitu r dan a
