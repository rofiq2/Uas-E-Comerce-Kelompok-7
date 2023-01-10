@extends('layouts.template')
@section('content')

<!-- Breadcrumb Section Begin -->
<section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/p2.webp') }}">
              
          </div>
      </div>
    </section>

<div class="container">
  <!-- carousel -->
  <div class="row">
    <div class="col">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($itemslide as $index => $slide )
          @if($index == 0)
          <div class="carousel-item active">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @else
          <div class="carousel-item">
              <img src="{{ \Storage::url($slide->foto) }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slide->caption_title }}</h5>
                <p>{{ $slide->caption_content }}</p>
              </div>
          </div>
          @endif
          @endforeach          
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end carousel -->
  
  <div class="row mt-4">
  <div class="col-lg-12">
            <div class="section-title">
              <h2> Kategori Product</h2>
            
          </div>
        </div>
    @foreach($itemkategori as $kategori)
    <!-- kategori pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}">
          @if($kategori->foto != null)
          <center>
          <div style="width: 50px; padding-top: 50px;" >
          <img src="{{ \Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
         </div>
         
          @else
          <img src="{{asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/'.$kategori->slug_kategori) }}" class="text-decoration-none">
            <p class="card-text">{{ $kategori->nama_kategori }}</p>
          </a>
        </div>
        </center>
      </div>
    </div>
   
    @endforeach
  <!-- end kategori produk -->
  <!-- produk Promo-->
  <div class="row mt-4">
  
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Product Promo</h2>
            
          </div>
        </div>
    @foreach($itempromo as $promo)
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}">
          @if($promo->produk->foto != null)
          <img src="{{\Storage::url($promo->produk->foto) }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @else
          <img src="{{asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none">
            <p class="card-text">
              {{ $promo->produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
            <a href="{{ URL::to('produk/'.$promo->produk->slug_produk) }}" class="text-decoration-none">
              <button class="btn btn-light">
                <i class="fa fa-shopping-bag"></i>
              </button>
              </a>
            </div>
            <div class="col-auto">
              <p>
                <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                <br />
                Rp. {{ number_format($promo->harga_akhir, 2) }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end produk promo -->
  <!-- produk Terbaru-->
  <div class="row mt-4">
  <div class="col-lg-12">
            <div class="section-title">
              <h2>Product Terbaru</h2>
            
          </div>
        </div>
    @foreach($itemproduk as $produk)
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          @if($produk->foto != null)
          <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
          @else
          <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}" class="card-img-top">
          @endif
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
            <p class="card-text">
              {{ $produk->nama_produk }}
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
            <a href="{{ URL::to('produk/'.$produk->slug_produk ) }}" class="text-decoration-none">
              <button class="btn btn-light">
                <i class="fa fa-shopping-bag"></i>
              </button>
              </a>
            </div>
            <div class="col-lg-6">
              <p>
                Rp. {{ number_format($produk->harga, 2) }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  <!-- end produk terbaru -->
  <!-- end produk promo -->
 
  <!-- end produk terbaru -->
  

  <!-- tentang toko -->
  <hr>
  <div class="row mt-4">
    <div class="col">
      
      <h5 class="text-center">Toko Online SEVEN</h5>
      <p>
      SEVEN merupakan salah satu merek fashion yang diproduksi oleh pelaku usaha berkebangsaan Indonesia, Muhammad Sadad, Founder & 
      CEO SEVEN Store. SEVEN merupakan produk atau merek fashion untuk aktivitas traveling dengan mengedepankan desain dan kenyamanan pemakainya.
      </p>
      <p>
      seven mulai melakukan usahanya pada 28 November 2010. Usaha fashion yang dimulai dengan membuat sebuah brand bernama "Selected and Co". 
      Seiring berjalannya waktu, brand tersebut pun berganti nama menjadi "SEVEN". Di tahun 2016 ini Seven mempunyai visi untuk mendukung campaign traveling with Seven. 
      Dengan tujuan campaign tersebut untuk memperlihatkan kepada negara 
      lain memandang baik terhadap kreatifitas anak bangsa dan juga turut berpartisipasi mengangkat pariwisata Indonesia.
      </p>
      
    </div>
  </div>
  <!-- end tentang toko -->

</div>
<section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/p2.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('frontend/img/p2.jpg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection