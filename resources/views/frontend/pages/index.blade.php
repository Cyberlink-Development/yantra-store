@extends('frontend.include.master')
@section('content')

  <!-- Hero slider start -->
  <section class="cz-carousel cz-controls-lg">
    <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
      <div>
        <img src="{{asset('theme-assets/img/ads/1.jpg')}}" alt="">
      </div>
      <div>
        <img src="{{asset('theme-assets/img/ads/1.jpg')}}" alt="">
      </div>
    </div>
  </section>
  <!-- Hero slider end -->

  <!-- scrolling text start-->
  <div class="scontainer">
    <div class="horizontal-scrolling-items">

      <div class="horizontal-scrolling-items__item mr-5">
        🎉 Big Sale! Up to 50% OFF on Selected Items
      </div>

      <div class="horizontal-scrolling-items__item mr-5">
        🚚 Free Shipping on Orders Over $50!
      </div>

      <div class="horizontal-scrolling-items__item mr-5">
        💥 Flash Sale Ends Tonight – Hurry Up!
      </div>
      <div class="horizontal-scrolling-items__item mr-5">
        🎉 Big Sale! Up to 50% OFF on Selected Items
      </div>

      <div class="horizontal-scrolling-items__item mr-5">
        🚚 Free Shipping on Orders Over $50!
      </div>

      <div class="horizontal-scrolling-items__item mr-5">
        💥 Flash Sale Ends Tonight – Hurry Up!
      </div>

    </div>

  </div>
  <!-- scrolling text end -->

  <!-- Categories start-->
  <section class="container  categories pt-md-3 pb-2 mt-5">
    <!-- Product carousel-->
    <div class="container-fluid">
      <div class="cz-carousel cz-controls-static cz-controls-outside p-0">
        <div class="cz-carousel-inner" data-carousel-options='{
          "items": null,
          "controls": true,
          "nav": false,
          "autoHeight": true,
          "responsive": {
            "0": { "items": 1 },
            "500": { "items": 1, "gutter": 10 },
            "768": { "items": 2, "gutter": 0 },
            "1100": { "items": 4, "gutter": 20 }
          }
        }'>
          <div>
            <div class=" py-4 d-flex bg-image rounded align-items-center">
              <div class="col-6 col-xl-5 pr-0">
                <img class="img-fluid" src="img/offer/offer1.png" alt="Image Description">
              </div>
              <div class="col-6 col-xl-7 col-wd-6">
                <div class="mb-2 pb-1 text-white">
                  CATCH BIG <strong>DEALS</strong> ON THE MOTHERBOARD
                </div>
                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
              </div>
            </div>
          </div>
          <div>
            <div class=" py-4 d-flex bg-image rounded align-items-center">
              <div class="col-6 col-xl-5 pr-0">
                <img class="img-fluid" src="img/offer/offer2.png" alt="Image Description">
              </div>
              <div class="col-6 col-xl-7 col-wd-6">
                <div class="mb-2 pb-1 text-white">
                  CATCH BIG <strong>DEALS</strong> ON THE CABIENTBOARD
                </div>
                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
              </div>
            </div>
          </div>
          <div>
            <div class=" py-4 d-flex bg-image rounded align-items-center">
              <div class="col-6 col-xl-5 pr-0">
                <img class="img-fluid" src="img/offer/offer3.png" alt="Image Description">
              </div>
              <div class="col-6 col-xl-7 col-wd-6">
                <div class="mb-2 pb-1 text-white">
                  CATCH BIG <strong>DEALS</strong> ON THE MEMORIES
                </div>
                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
              </div>
            </div>
          </div>
          <div>
            <div class=" py-4 d-flex bg-image rounded align-items-center">
              <div class="col-6 col-xl-5 pr-0">
                <img class="img-fluid" src="img/offer/offer4.png" alt="Image Description">
              </div>
              <div class="col-6 col-xl-7 col-wd-6">
                <div class="mb-2 pb-1 text-white">
                  CATCH BIG <strong>DEALS</strong> ON THE POWERSUPPLY
                </div>
                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
              </div>
            </div>
          </div>
          <div>
            <div class=" py-4 d-flex bg-image rounded align-items-center">
              <div class="col-6 col-xl-5 pr-0">
                <img class="img-fluid" src="img/offer/offer1.png" alt="Image Description">
              </div>
              <div class="col-6 col-xl-7 col-wd-6">
                <div class="mb-2 pb-1 text-white">
                  CATCH BIG <strong>DEALS</strong> ON THE PROCESSOR
                </div>
                <a class="btn-offer" href="#">Shop Now <i class="czi-arrow-right-circle ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Categories -->

  </section>
  <!-- Categories end-->

  <!-- Sales products start-->
  <section class="container  mb-md-3 p-4 p-md-2">
    <div class="row d-flex align-items-end  mb-3">
      <div class="col-6 d-flex align-items-center">
        🔥<h2 class="section-title mb-0 ml-1">On Sale Now</h2>
      </div>
      <div class="col-6 d-flex justify-content-end">
        <div class="text-center pt-3">
          <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i class="czi-arrow-right ml-2"></i></a>
        </div>
      </div>
    </div>

    <div class="row pt-4 m-n3">
      <!-- Product-->
      <div class="col-lg col-md-4 col-6 px-1 mb-4">
        <div class="card product-card translate p-0">
          <span class="badge badge-border"> 🔥 8% OFF</span>
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                <del class="font-size-sm text-danger">RS. 5,50,000</del>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg col-md-4  col-6 px-1 mb-4">
        <div class="card product-card translate p-0">
          <span class="badge badge-border"> 🔥 8% OFF</span>
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
            <div class="card-body py-2">
              <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
              <h3 class="product-title font-size-sm mb-2">
                <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
              </h3>
              <div class="mb-2">
                <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                <span class="total-review">45 Reviews</span>
              </div>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                  <del class="font-size-sm text-danger">RS. 5,50,000</del>
                </div>
              </div>
            </div>
            <a href="detail.php">
              <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
                <div>
                  <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                    BUY NOW
                  </h3>
                </div>
                <div>
                  <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
                </div>
              </div>
            </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg col-md-4 col-6 px-1 mb-4">
        <div class="card product-card translate p-0">
          <span class="badge badge-border"> 🔥 8% OFF</span>
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                <del class="font-size-sm text-danger">RS. 5,50,000</del>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg col-md-4 col-6 px-1 mb-4">
        <div class="card product-card translate p-0">
          <span class="badge badge-border"> 🔥 8% OFF</span>
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                <del class="font-size-sm text-danger">RS. 5,50,000</del>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-lg col-md-4 col-6 px-1 mb-4">
        <div class="card product-card translate p-0">
          <span class="badge badge-border"> 🔥 8% OFF</span>
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer3.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer4.webp" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                <del class="font-size-sm text-danger">RS. 5,50,000</del>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Sales products  end-->

  <!-- Ad section start-->
  <section class="container">
    <div class="row">
      <div class="col-md-6 my-1 px-1">
        <a href="list.php">
          <img src="img/ads/ad2.jpg" class="rounded img-fluid" alt"" />
        </a>
      </div>
      <div class="col-md-6 my-1 px-1">
        <a href="list.php">
          <img src="img/ads/ad1.jpg" class="rounded img-fluid" alt"" />
        </a>
      </div>
    </div>
  </section>
  <!-- Ad section end -->

  <!-- Latest Launches / New Arrivals products start-->
  <section class="container mb-md-3 p-4 p-md-2">
    <div class="row d-flex align-items-end  mb-3">
      <div class="col-6">
        <h2 class="section-title mb-0">Latest Launches</h2>
      </div>
      <div class="col-6 d-flex justify-content-end">
        <div class="text-center pt-3">
          <a class="btn btn-primary btn-sm pl-2" href="list.php">View All Products<i class="czi-arrow-right ml-2"></i></a>
        </div>
      </div>
    </div>

    <div class="custom-cols-5 pt-4 m-n3">
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-4">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Launches / New Arrivals products end-->

  <!-- category section start -->
  <section class="container pb-5 p-4 p-md-2">
    <div class="row mb-3">
      <div class="col-12 text-center">
        <h2 class="section-title mb-0">Categories</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer1.png" alt="">
          <p>Motherboard</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer2.png" alt="">
          <p>Cabient Board</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer3.png" alt="">
          <p>Memory</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer1.png" alt="">
          <p>Motherboard</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer4.png" alt="">
          <p>Power Supply</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer1.png" alt="">
          <p>Motherboard</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer1.png" alt="">
          <p>Motherboard</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 category-div">
        <a href="list.php" class="text-center">
          <img class="img-fluid" src="img/offer/offer1.png" alt="">
          <p>Motherboard</p>
        </a>
      </div>

    </div>
  </section>
  <!-- category section end-->


  <!-- Ad section start-->
  <div class="container ad-section mb-md-3">
    <div class="row">
      <div class="col-md-12 mb-4">
        <div class="d-sm-flex justify-content-between align-items-center bg-image overflow-hidden rounded-lg">
          <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
            <h4 class="font-size-lg font-weight-light mb-2 text-white">Hurry up! Limited time offer</h4>
            <h3 class="mb-4 text-white">Grab all the discount Appliances</h3><a class="btn btn-primary btn-shadow btn-sm" href="list.php">Shop Now</a>
          </div>
          <img class="d-block ml-auto " src="img/ads/computer.webp" alt="Shop Converse">
        </div>
      </div>
    </div>
  </div>
  <!--End of Ad section end-->

  <!-- Gone in seconds category start-->
  <section class="container p-4 p-md-2">
    <div class="row">
      <!-- Banner with controls-->
      <div class="col-md-4">
        <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: var(--secondary);">
          <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
            <div>
              <h2 class="mb-1 section-title text-white"> Gone in seconds</h2><a class="font-size-md text-white" href="shop-grid-ls.php">Shop More<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
            </div>
            <div class="cz-custom-controls" id="hoodie-day">
              <button type="button"><i class="czi-arrow-left"></i></button>
              <button type="button"><i class="czi-arrow-right"></i></button>
            </div>
          </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.php"><img class="d-block w-100" src="img/ads/promo.png" alt="For Women"></a>
        </div>
      </div>
      <!-- Product grid (carousel)-->
      <div class="col-md-8 pt-4 pt-md-0">
        <div class="cz-carousel">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
            <!-- Carousel item-->
            <div>
              <div class="row mx-n2">
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer3.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer4.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer5.png" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer9.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                   <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
              </div>
            </div>
            <!-- Carousel item-->
            <div>
              <div class="row mx-n2">
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer3.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer4.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer5.png" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer9.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                  <div class="card product-card translate p-0">
                    <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
                      <i class="czi-cart"></i>
                    </button>
                   <a class="card-img-top d-block overflow-hidden" href="detail.php">
                      <div class="image-hover-box">
                        <img src="img/computer/computer10.jpeg" alt="" class="main-img img-fluid">
                        <img src="img/computer/computer11.jpeg" alt="" class="hover-img img-fluid">
                      </div>
                    </a>
                    <div class="card-body py-2">
                      <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
                      <h3 class="product-title font-size-sm mb-2">
                        <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
                      </h3>
                      <div class="mb-2">
                        <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
                        <span class="total-review">45 Reviews</span>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Gone in seconds category end-->

  <!-- shop by brand start -->
  <section class="container categories   mb-3 ">
    <!-- Product carousel-->
    <div class="container ">
      <div class="row d-flex justify-content-center mb-4">
        <h2 class="section-title mb-0 text-center">Shop By Brands</h2>
      </div>
      <div class="cz-carousel cz-controls-static cz-controls-outside p-0">
          <div class="cz-carousel-inner" data-carousel-options='{"items": 2, "controls": true, "nav": false, "autoHeight": true, "responsive": {"0":{"items":2},"500":{"items":3, "gutter": 10},"768":{"items":4, "gutter": 0}, "1100":{"items":6, "gutter": 0}}}'>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Product" style="height: 80px;"></a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden w-100" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXDFh6WJwMiPvxMt3gibuppGzu_p5PkwYucg&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden w-100" href="list.php">
                  <img src="https://dmassets.micron.com/is/image/microntechnology/logo-intel-color?ts=1746204044637&dpr=off" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://1000logos.net/wp-content/uploads/2016/09/Acer-Logo.png" alt="Product" style="height: 80px;"></a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXDFh6WJwMiPvxMt3gibuppGzu_p5PkwYucg&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://dmassets.micron.com/is/image/microntechnology/logo-intel-color?ts=1746204044637&dpr=off" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="  d-flex  rounded align-items-center">
              <div class="card product-card translate w-100">
                <a class="card-img-top d-block overflow-hidden" href="list.php">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzTFbgoLfNcWe-f24Qy_AfNUnBN3UnvX9kw&s" alt="Product" style="height: 80px;">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- shop by brand end -->

  <!-- Ad section start-->
  <div class=" container  mb-md-3">
    <div class="row">
      <div class="col-md-12">
        <a href="list.php">
          <img src="img/ads/banner.webp" class="img-fluid" alt="" class="rounded" >
        </a>
      </div>
    </div>
  </div>
  <!--Ad section end -->

  <!-- Product for you start-->
  <section class="container p-4 p-md-2">
    <div class="row d-flex align-items-center justify-content-center  mb-3">
      <div class="col-12 text-center">
        <h2 class="section-title mb-0">Products for You</h2>
      </div>
    </div>
    <div class="custom-cols-5 pt-4 m-n3">
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
       <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
       <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer5.webp" alt="Main" class="main-img img-fluid">
              <img src="img/computer/computer5.png" alt="Hover" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer7.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer8.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer1.webp" alt="" class="main-img img-fluid">
              <img src="img/computer/computer2.webp" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer6.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer10.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Product-->
      <div class="col-5th px-1 mb-2">
        <div class="card product-card translate p-0">
          <button class="btn-cart btn-sm" type="button" data-toggle="tooltip" data-placement="left">
            <i class="czi-cart"></i>
          </button>
          <a class="card-img-top d-block overflow-hidden" href="detail.php">
            <div class="image-hover-box">
              <img src="img/computer/computer11.jpeg" alt="" class="main-img img-fluid">
              <img src="img/computer/computer12.jpeg" alt="" class="hover-img img-fluid">
            </div>
          </a>
          <div class="card-body py-2">
            <a class="product-meta d-block font-size-xs pb-1" href="#">Laptop</a>
            <h3 class="product-title font-size-sm mb-2">
              <a href="detail.php" class="two-line">Lenovo LOQ 15IAX9 Gaming Laptop (Intel Core i5 12450HX Processor)</a>
            </h3>
            <div class="mb-2">
              <span class="rating">3.9 <i class="sr-star czi-star-filled active"></i></span>
              <span class="total-review">45 Reviews</span>
            </div>
            <div class="d-flex justify-content-between">
              <div class="product-price"><span class="font-secondary">RS. 4,50,000</span>
              </div>
            </div>
          </div>
          <a href="detail.php">
            <div class=" py-2 px-4 book-btn d-flex justify-content-between align-items-center">
              <div>
                <h3 class=" font-size-md mb-2 text-white text-center pt-2">
                  BUY NOW
                </h3>
              </div>
              <div>
                <i class="czi-arrow-right-circle ml-2 arrow-button"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-3">
        <div class="text-center pt-3">
          <a class="btn btn-primary  " href="list.php">More Products <span><i style="font-size: 12px;" class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i></span></a></div>
      </div>
  </section>
  <!-- Product for you end-->

  <script>
    document.querySelectorAll('.image-hover-box').forEach(box => {
      const mainImg = box.querySelector('.main-img');
      const hoverImg = box.querySelector('.hover-img');

      if (mainImg && hoverImg && hoverImg.getAttribute('src')) {
        box.classList.add('has-hover');
      }
    });
  </script>

@stop
