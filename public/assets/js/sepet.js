function kaldır(ID) {
  var ürün = document.getElementById(ID)
  if (ürün.style.display == '') {
    ürün.style.display = 'none'
  }
}
function artır() {
  var adet = document.getElementById('adet')
  adet.value = Number(adet.value) + 1
}
const adet = document.getElementById('adet')
function azalt() {
  if (adet.value > 1) {
    adet.value = Number(adet.value) - 1
  } else if (adet.value == 1) {
    ürün.style.display = 'none'
  }
}
