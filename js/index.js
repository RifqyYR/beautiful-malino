const checkboxPenginapan = document.querySelector("#checkboxPenginapan");
const checkboxTransportasi = document.querySelector("#checkboxTransportasi");
const checkboxMakanan = document.querySelector("#checkboxMakanan");
const checkboxs = document.querySelectorAll(".checkbox");

const inputWaktuPerjalanan = document.querySelector("#inputWaktuPerjalanan");
const inputJumlahPeserta = document.querySelector("#inputJumlahPeserta");
const inputHargaPaket = document.querySelector("#harga_paket");
const inputJumlahTagihan = document.querySelector("#jumlah_tagihan");

const btnCek = document.querySelector("#btn_cek");

const hargaPaketPerjalanan = 200000;
var biayaLayananPenginapan = 0;
var biayaLayananTransportasi = 0;
var biayaLayananMakanan = 0;
var totalHarga = 0;

inputHargaPaket.value = hargaPaketPerjalanan;

Array.from(checkboxs).forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    checkboxPenginapan.checked ? biayaLayananPenginapan = 100000 : biayaLayananPenginapan = 0;
    checkboxTransportasi.checked ? biayaLayananTransportasi = 50000 : biayaLayananTransportasi = 0;
    checkboxMakanan.checked ? biayaLayananMakanan = 30000 : biayaLayananMakanan = 0;
  });
});

btnCek.addEventListener("click", function () {
  totalHarga = (hargaPaketPerjalanan + biayaLayananPenginapan + biayaLayananTransportasi + biayaLayananMakanan) * inputWaktuPerjalanan.value * inputJumlahPeserta.value;
  inputJumlahTagihan.value = totalHarga;
});