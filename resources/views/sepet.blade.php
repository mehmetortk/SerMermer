<!DOCTYPE html>
<html lang="tr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/sepet.css">
   <link rel="stylesheet" href="assets/css/styles.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Sepet</title>
</head>

<body>
   <header class="container text-center">
      <h1 class="m-4">Sepetim</h1>
   </header>

   <div class="container">
      <div id="ürün">
         <article class="d-flex w-100 mt-3 container">
            <div class="img-container"><a href="#"><img class="w-100"
                     src="https://akn-mudo.b-cdn.net/products/2021/05/10/316224/2296b453-094d-4df2-8a06-4b39a5d5cffd.jpg"
                     alt="Küllük"></a>
            </div>
            <div class="d-flex row">
               <h5 class="ürün-başlık">Siyah Granit Küllük</h5>
               <span class="fiyat">200₺</span>
               <button class="btn btn-group" type="reset" onclick="kaldır('ürün');">Kaldır</button>
            </div>
            <div class="d-flex col justify-content-end">
               <div class="d-flex row">
                  <button><i class="fa-sharp fa-solid fa-plus" id="artır-button" onclick="artır()"></i></button>
                  <input type="text" class="adet" id="adet" value="1 "></input>
                  <button><i class="fa-sharp fa-solid fa-minus" id="azalt-button" onclick="azalt()"></i></button>
               </div>
            </div>
         </article>
      </div>
      <div id="ürün2">
         <article class="d-flex w-100 mt-3 container">
            <div class="img-container"><a href="#"><img class="w-100"
                     src="https://cdn03.ciceksepeti.com/cicek/kcm45930685-1/XL/dogal-mermer-pecetelik-gold-gumus-kcm45930685-1-91d2b435e1d04a55aa0eced9449595a9.jpg"
                     alt="Peçetelik"></a>
            </div>
            <div class="d-flex row ürün-açıklama">
               <h5 class="ürün-başlık">Altın Kaplama Peçetelik</h5>
               <span class="fiyat" id="fiyat">200₺</span>
               <button class="btn btn-group" type="reset" onclick="kaldır('ürün2');">Kaldır</button>
            </div>
            <div class="d-flex col justify-content-end">
               <div class="d-flex row">
                  <button><i class="fa-sharp fa-solid fa-plus" id="artır-button" onclick="artır();"></i></button>
                  <input type="text" class="adet" id="adet" value="1 "></input>
                  <button><i class="fa-sharp fa-solid fa-minus" id="azalt-button" onclick="eksi()"></i></button>
               </div>
            </div>
         </article>
      </div>
      <div id="ürün3">
         <article class="d-flex w-100 mt-3 container">
            <div class="img-container"><a href="#"><img class="w-100"
                     src="https://st3.myideasoft.com/idea/he/97/myassets/products/290/ravi-mermer-banyo-seti-7-parca-1255-jpg.jpeg?revision=1637574288"
                     alt="Banyo Seti"></a>
            </div>
            <div class="d-flex row">
               <h5 class="ürün-başlık">Siyah Granit Banyo Seti</h5>
               <span class="fiyat">200₺</span>
               <button class="btn btn-group" type="reset" onclick="kaldır('ürün3');">Kaldır</button>
            </div>
            <div class="d-flex col justify-content-end">
               <div class="d-flex row">
                  <button><i class="fa-sharp fa-solid fa-plus" id="artır-button" onclick="artır()"></i></button>
                  <input type="text" class="adet" id="adet" value="1 "></input>
                  <button><i class="fa-sharp fa-solid fa-minus" id="azalt-button" onclick="azalt()"></i></button>
               </div>
            </div>
         </article>
      </div>
      <div id="ürün4">
         <article class="d-flex w-100 mt-3 container">
            <div class="img-container"><a href="#"><img class="w-100"
                     src="https://st3.myideasoft.com/idea/de/82/myassets/products/439/pirinchalkalimermertepsi.jpg?revision=1612188461"
                     alt="Tepsi"></a>
            </div>
            <div class="d-flex row">
               <h5 class="ürün-başlık">Granit Beyaz Damarlı Tepsi</h5>
               <span class="fiyat">200₺</span>
               <button class="btn btn-group" type="reset" onclick="kaldır('ürün4');">Kaldır</button>
            </div>
            <div class="d-flex col justify-content-end">
               <div class="d-flex row">
                  <button><i class="fa-sharp fa-solid fa-plus" id="artır-button" onclick="artır()"></i></button>
                  <input type="text" class="adet" id="adet" value="1 "></input>
                  <button><i class="fa-sharp fa-solid fa-minus" id="azalt-button" onclick="azalt()"></i></button>
               </div>
            </div>
         </article>
      </div>

      <div class="fw-bold border-top border-dark mt-3 d-flex">
         <p>Toplam:</p>
         <p class="toplam d-flex col justify-content-end">0.00₺</p>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/922e14d4eb.js" crossorigin="anonymous"></script>
   <script src="sepet.js"></script>
</body>

</html>
