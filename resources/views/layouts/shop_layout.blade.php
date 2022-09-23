<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/styles.css">
   <title>@yield('title')</title>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-xxl navbar-light bg-light fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand serMermerLogo" href="#"><img class="container-fluid" src="assets/resimler/logo.png"
                  alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto" id="myUL">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="../index.html">Ana Sayfa</a>
                  </li>
                  <li class="nav-item dropdown position-static">
                     <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ev
                        Dekorasyon</a>
                     <ul class="dropdown-menu yatay-dropdown">
                        <a href="../ürünler/ev-dekorasyon.html">
                           <li class="dropdown-item">Küllük <br><img
                                 src="https://akn-mudo.b-cdn.net/products/2021/05/10/316224/2296b453-094d-4df2-8a06-4b39a5d5cffd.jpg"
                                 alt="küllük"></li>
                        </a>
                        <a href="../ürünler/ev-dekorasyon.html">
                           <li class="dropdown-item">Gece Lambası <br><img
                                 src="https://ae01.alicdn.com/kf/Sf4ee028ae4b247b482022bfad179f1f4U/Oniks-mermer-yarat-c-noel-sevgililer-g-n-hediye-gece-lambas-yatak-odas-ba-ucu-Led.jpg_Q90.jpg_.webp"
                                 alt="gece-lambası"></li>
                        </a>
                        <a href="../ürünler/ev-dekorasyon.html">
                           <li class="dropdown-item">Mumluk <br><img
                                 src="https://womadecor.com/image/cache/catalog/urunler/2li-mermer-mumluk-siyah-4-550x550.jpg"
                                 alt="mumluk"></li>
                        </a>
                        <a href="../ürünler/ev-dekorasyon.html">
                           <li class="dropdown-item">Zigon Sehpa <br><img
                                 src="https://st2.myideasoft.com/idea/gy/69/myassets/products/013/venus-mermer-desen-zigon-sehpa.jpeg?revision=1633610631"
                                 alt="zigon-sehpa"></li>
                        </a>
                        <a href="../ürünler/ev-dekorasyon.html">
                           <li class="dropdown-item">Duvar Saati <br><img
                                 src="https://evimigiydir.com/image/cache/catalog/Saatler/mermer-desenli-duvar-saati-570x685.jpg"
                                 alt="duvar-saati"></li>
                        </a>
                     </ul>
                  </li>
                  <li class="nav-item dropdown position-static">
                     <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mutfak Ürünleri
                     </a>
                     <ul class="dropdown-menu yatay-dropdown" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Tepsi <br><img
                                 src="https://st3.myideasoft.com/idea/de/82/myassets/products/439/pirinchalkalimermertepsi.jpg?revision=1612188461"
                                 alt="tepsi"></a></li>
                        <li><a class="dropdown-item" href="#">Peçetelik <br><img
                                 src="https://cdn03.ciceksepeti.com/cicek/kcm45930685-1/XL/dogal-mermer-pecetelik-gold-gumus-kcm45930685-1-91d2b435e1d04a55aa0eced9449595a9.jpg"
                                 alt="peçetelik"></a></li>
                        <li><a class="dropdown-item" href="#">Sunum Tabağı <br><img
                                 src="https://img.alkapida.com/images/products/a/439/gc01-s_1_zoom.jpg"
                                 alt="sunum-tabağı"></a></li>
                        <li><a class="dropdown-item" href="#">Havan Seti <br><img
                                 src="https://cdn.dsmcdn.com/mnresize/500/-/ty491/product/media/images/20220726/13/150013922/528902019/1/1_org.jpg"
                                 alt="havan-seti"></a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown position-static">
                     <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Banyo Ürünleri
                     </a>
                     <ul class="dropdown-menu yatay-dropdown" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Peçetelik <br><img
                                 src="https://cdn03.ciceksepeti.com/cicek/kcm45930685-1/XL/dogal-mermer-pecetelik-gold-gumus-kcm45930685-1-91d2b435e1d04a55aa0eced9449595a9.jpg"
                                 alt="peçetelik"></a></li>
                        <li><a class="dropdown-item" href="#">Sabunluk <br><img
                                 src="https://cdn.dsmcdn.com/ty195/product/media/images/20211014/1/146849258/262414304/0/0_org_zoom.jpg"
                                 alt="sabunluk"></a></li>
                        <li><a class="dropdown-item" href="#">Çöp Kovası <br><img
                                 src="https://www.foreca.com.tr/foreca-siyah-mermer-desen-cop-kovasi-5-lt-renkli-cop-kovalari-foreca-255464-26-B.jpg"
                                 alt="çöp-kovası"></a></li>
                        <li><a class="dropdown-item" href="#">Banyo Seti <br><img
                                 src="https://st3.myideasoft.com/idea/he/97/myassets/products/290/ravi-mermer-banyo-seti-7-parca-1255-jpg.jpeg?revision=1637574288"
                                 alt="banyo-seti"></a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="../hakkımızda/hakkımızda.html">Hakkında</a>
                  </li>


                  <form action="#" class="d-flex mx-5">
                     <input class="form-control me-2" type="search" id="myInput" placeholder="Search"
                        aria-label="Search">
                  </form>

                  <div class="d-flex">
                     <a class="mx-2" href="/login"><button class="btn btn-outline-dark" type="button"><i
                              class="fa-solid fa-user mx-2"></i>Giriş Yap</button></a>
                     <a class="mx-2" href="/register"><button class="btn btn-outline-dark" type="button"><i
                              class="fa-solid fa-user mx-2"></i>Kayıt Ol</button></a>
                              <a class="mx-2 shopping-card" href="../sepet/sepet.html"><button class="btn btn-outline-dark d-flex"
                  type="button"><i
                     class="fa-sharp fa-solid fa-cart-shopping my-auto m-2"></i><span>Sepet</span></button></a>

                  </div>
               </ul>
            </div>
         </div>
      </nav>
   </header>
   <section>
      <div class="vitrin-img">
         <img class="img-fluid responsive-img"
            src="https://dekorportal.com/wp-content/uploads/2020/12/perde-modelleri-tercihi-1.jpg" alt="mermer-img">
      </div>
   </section>

   <h1 class="ev-dekorasyon-baslik">Ev Dekorasyon Ürünleri</h1>

   <div class="container ürün-container row mx-auto">
      <h2 class="k">Küllük Modelleri</h2>
      <hr>

      <div class="col-6 col-md-4 col-lg-4 p-2 p-lg-5 p-md-4">
         <div class=" bg-white pt-1 px-3">
            <img class="w-100 border mt-3"
               src="http://www.magazacim.com/Uploads/UrunResimleri/buyuk/beton-elips-puro-kul-tablasi-el-yapimi-3b485d.jpg"
               alt="küllük">
            <div class="pb-5">
               <h4>Başlık</h4>
               <p>Ürün Detayı</p>
               <button class="btn btn-outline-dark">Sepete Ekle</button>
            </div>
         </div>
      </div>
   </div>

   <div class="container ürün-container row mx-auto">
      <h2>Gece Lambası</h2>
      <hr>

      <div class="col-6 col-md-4 col-lg-4 p-2 p-md-4">
         <div class=" bg-white pt-1 px-3">
            <img class="w-100 border mt-3"
               src="https://img.joomcdn.net/eea3cbb0106969d9b4134eb1fbcb7155639161d4_1024_1024.jpeg" alt="küllük">
            <div class="pb-5">
               <h4>Başlık</h4>
               <p>Ürün Detayı</p>
               <button class="btn btn-outline-dark">Sepete Ekle</button>
            </div>
         </div>
      </div>
   </div>

   <div class="container ürün-container row mx-auto">
      <h2>Mumluk</h2>
      <hr>

      <div class="col-6 col-md-4 col-lg-4 p-2 p-md-4">
         <div class=" bg-white pt-1 px-3">
            <img class="w-100 border mt-3"
               src="https://www.mermershopping.com.tr/image/cache/catalog/AKSESUARLAR/DEKOR/AKS037/mermer-mumluk-1-320x320h.jpg.webp"
               alt="mumluk">
            <div class="pb-5">
               <h4>Başlık</h4>
               <p>Ürün Detayı</p>
               <button class="btn btn-outline-dark">Sepete Ekle</button>
            </div>
         </div>
      </div>
   </div>

   <div class="container ürün-container row mx-auto">
      <h2>Zigon Sehpa</h2>
      <hr>

      <div class="col-6 col-md-4 col-lg-4 p-2 p-md-4">

         <div class=" bg-white pt-1 px-3">
            <img class="w-100 border mt-3" src="https://productimages.hepsiburada.net/s/48/375/10956907053106.jpg"
               alt="zigon sehpa">
            <div class="pb-5">
               <h4>Başlık</h4>
               <p>Ürün Detayı</p>
               <button class="btn btn-outline-dark">Sepete Ekle</button>
            </div>
         </div>
      </div>

     
   </div>

   <!-- ...............................Footer....................... -->
   <div class="container-fluid bg-black bg-opacity-10">
      <footer class="pt-5 container">
         <div class="row">
            <div class="col-2">
               <h5>Section</h5>
               <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
               </ul>
            </div>

            <div class="col-2">

            </div>

            <div class="col-2">
               <h5>Section</h5>
               <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a>
                  </li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
               </ul>
            </div>

            <div class="col-5">
               <a href="index.html"><img class="w-75 footer-logo offset-5" src="../resimler/logo.png" alt=""></a>
            </div>
         </div>

         <div class="d-flex py-4  border-top border-dark">
            <ul class="list-unstyled d-flex mx-auto">
               <li><a class="btn btn-link btn-floating btn-lg text-dark" href="https://tr-tr.facebook.com/"
                     role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a></li>
               <li><a class="btn btn-link btn-floating btn-lg text-dark" href="https://www.instagram.com/" role="button"
                     data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a></li>
               <li><a class="btn btn-link btn-floating btn-lg text-dark"
                     href="https://www.youtube.com/watch?v=KxzHQbXpD6c" role="button" data-mdb-ripple-color="dark"><i
                        class="fab fa-youtube"></i></a></li>
               <li><a class="btn btn-link btn-lg text-dark"
                     href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoidHIifQ%3D%3D%22%7D"
                     role="button" data-mdb-ripple-color="dark"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
         </div>
      </footer>
   </div>

   <script src="assets/js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/922e14d4eb.js" crossorigin="anonymous"></script>

</body>

</html>