@extends('layouts.app') 
@section('title')
Store Detail Product
    
@endsection
@section('content')
  <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Beranda</a>
                  </li>
                  <li class="breadcrumb-item active">Detail Produk</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{active: index == activePhoto}"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Clemira Shop</div>
                <div class="price">$1,999</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3"
                  >Add to Cart</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Ini adalah deskripsi produk lorem ipsum Lorem ipsum dolor sit
                  amet consectetur adipisicing elit. Numquam ipsum placeat vel
                  voluptates! Dicta, ex rerum. Officiis nostrum quae aliquam,
                  vitae, quas obcaecati quis dicta omnis odit dolores dolorem
                  corrupti.
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Cumque quos voluptatum eum magni, odit dolorum vitae quisquam
                  iusto recusandae sit sunt nesciunt, quia aspernatur numquam
                  eveniet. Non cupiditate consequatur aspernatur!
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-1.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-buddy">
                      <h5 class="mt-2 mb-1">Berlian</h5>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Rerum repudiandae tenetur vitae dolores, quidem quam id
                      nemo est eum quibusdam natus animi dicta magnam. Nesciunt
                      dicta culpa dolores maxime illo.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-2.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-buddy">
                      <h5 class="mt-2 mb-1">Clemira</h5>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Rerum repudiandae tenetur vitae dolores, quidem quam id
                      nemo est eum quibusdam natus animi dicta magnam. Nesciunt
                      dicta culpa dolores maxime illo.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icon-testimonial-3.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-buddy">
                      <h5 class="mt-2 mb-1">Liana</h5>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Rerum repudiandae tenetur vitae dolores, quidem quam id
                      nemo est eum quibusdam natus animi dicta magnam. Nesciunt
                      dicta culpa dolores maxime illo.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>    
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 4,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    
@endpush