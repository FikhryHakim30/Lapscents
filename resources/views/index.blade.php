<x-layout :title="$title">
    <!-- Main Section -->
    <section class="main-section d-flex flex-column overflow-hidden">
      <div class="perfume-bottle align-items-center justify-content-center">
        <img
          src="img/Groupe 1 1.png"
          alt="Perfume Bottle"
          width="176px"
          height="132.11px"
        />
      </div>
      <div
        class="row position-relative align-items-center justify-content-center"
      >
        <div class="perfume-bottlee">
          <img
            src="img/2 TRP 3.png"
            alt="Perfume Bottle"
            width="505px"
            height="180px"
          />
        </div>
        <div
          class="overlay position-absolute top-0 bottom-o start-0 end-0 w-100 h-100"
        >
          <div>
            <p>
              L.A.P (Last and Pure) offers long-lasting, pure fragrances that
              blend beauty, softness, and harmony. With natural essences and
              premium quality, each L.A.P product <br />
              delivers a sensual and elegant experience, leaving a lasting
              impression—a timeless embodiment of purity in every drop.
            </p>
            <a href="/about">DISCOVER NOW ></a>
          </div>
        </div>
      </div>
      <div class="perfume-bottle align-items-center justify-content-center">
        <img
          src="img/Calque 3 1.png"
          alt="Perfume Bottle"
          width="368.27px"
          height="334.9px"
        />
      </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section text-center d-flex flex-column">
      <div class="welcome-title align-items-center justify-content-center">
        <h1 class="display-5">WELCOME TO THE WORLD OF LASTANDPURE</h1>
      </div>
      <div class="welcome-text mt-4" style="font-family: JetBrains Mono">
        <p>
          L.A.P embodies the essence of luxury through fragrances that
          seamlessly blend elegance, purity, and durability. Each scent is
          thoughtfully crafted using high-quality natural ingredients,
          harmonized with innovative techniques to create a sensory experience
          that lingers beautifully on the skin and enriches the ambiance of any
          space.
        </p>
        <p>
          With a focus on timeless sophistication, L.A.P products reflect the
          perfect balance between brilliance and gentleness, capturing vibrant
          notes that radiate femininity and charm. Every detail, from the
          formula to the packaging, is designed to evoke a sense of harmony and
          authenticity, ensuring an unforgettable experience.
        </p>
        <p>
          L.A.P’s mission is to provide more than just a fragrance—it offers a
          lasting treasure, a moment of beauty, and a connection to purity that
          transcends trends and enhances everyday life.
        </p>
      </div>
    </section>

    <!-- Carousel Section -->
    <x-carousel></x-carousel>

    <!-- product cards -->
    <section id="product-cards">
      <div class="container mt-5">
        <h1 class="text-center mb-4">Our Fragrances</h1>
        <div class="row" style="margin-top: 50px">
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <a href="/product"
                ><img
                  src="img/Group 5.png"
                  alt=""
                  style="width: 100%; height: auto"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- product cards end-->

      <!-- Individual Reviews -->
    <x-review></x-review>

    <!-- Icon Section -->
    <div class="discover-section">
      <a href="/about"><div class="title">DISCOVER MORE</div></a>
      <div
        class="icon-row d-flex justify-content-center align-items-center mt-3"
      >
        <a
          href="https://www.instagram.com/lapscents?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target= "_blank"
          ><img src="img/instagram.png" alt="Instagram" class="img-icon"
        /></a>
        <a href="https://id.shp.ee/ue2N1Vb" target= "_blank"
          ><img src="img/pngwing.com 1.png" alt="Shopee" class="img-icon"
        /></a>
        <a href="https://tokopedia.link/l6MdGPMO1Nb" target= "_blank"
          ><img src="img/Tokped 1.png" alt="Tokopedia" class="tokped-img"
        /></a>
        <a
          href="https://www.tiktok.com/@lartisan_parfumeur?is_from_webapp=1&sender_device=pc" target= "_blank"
          ><img src="img/TIkTok 1.png" alt="TikTok" class="tiktok-img"
        /></a>
      </div>
    </div>

    </x-layout>
