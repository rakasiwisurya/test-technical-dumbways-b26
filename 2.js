const buyEgg = (tanggal, uang) => {
  let jumlah = 0;
  let harga = 2500;
  let bonus = 0;
  const prima = tanggal % 2 != 0;
  const ganjil = tanggal % 2 == 1;
  const kelipatan5 = tanggal % 5 == 0;
  let hasil = undefined;

  if (tanggal == prima) {
    if (jumlah % 12 == 0) {
      bonus = 2;
    }
    hasil = uang / (jumlah * harga);
    return hasil + bonus;
  }

  if (tanggal == ganjil) {
    if (jumlah === 12) {
      return jumlah + 3;
    }
  }

  if (kelipatan5 || bonus == (bonus % 2 == 2)) {
    return jumlah * 10;
  }
};
