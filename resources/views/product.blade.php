<x-layout :title="$title">
    <!--product-->
    <section style="background-color: #111111; min-height: 210vh">
      <div class="container" style="padding-top: 3%">
        <div class="row">
          <div class="col-md-6">
            <img
              src="img/Old_fashion_balck_and_gold_color_perfume__3_-removebg-preview 1 (1).png"
              alt="Luxurious Elixir"
              class="img-fluid"
            />
          </div>
          <div class="col-md-6">
            <h2 class="product-title">Luxurious Elixir</h2>
            <p class="product-description" style="text-align: justify">
              Step into a world of unparalleled opulence with Luxurious Elixir,
              an exquisite fragrance that weaves an enchanting symphony of gold
              and luxury. This gilded elixir is a celebration of sophistication,
              crafted with the finest essences and imbued with the allure of
              precious golden hues.
            </p>
            <div class="d-flex align-items-center">
              <span class="rating">★★★★☆</span>
              <span class="rating-1 ms-2">100+ Reviews and Ratings</span>
            </div>
            <div class="my-3">
              <button>30 ml</button>
            </div>
            <p class="price">RP. 69.000</p>
            <a href="https://id.shp.ee/f746CuY" target= "_blank">
              <button class="btn btn-light btn-lg w-50 shop-now-btn">
                Shop Now <i class="bi bi-bag"></i></button
            ></a>
          </div>
        </div>

        <div class="product-details">
          <h3>Product Details</h3>
          <p class="product-details">
            Step into a world of unparalleled opulence with Luxurious Elixir, an
            exquisite fragrance that weaves an enchanting symphony of gold and
            luxury. This gilded elixir is a celebration of sophistication,
            crafted with the finest essences and imbued with the allure of
            precious golden hues. From the first spritz to the lingering
            dry-down, Luxurious Elixir promises an intoxicating experience that
            embodies the essence of lavish indulgence.
          </p>
        </div>
        <div class="Key-notes">
          <h3>Key Notes</h3>
          <div class="row">
            <div class="menu-note col-md-4 text-center">
              <h5>Top Note</h5>
              <p>Citrus Accord, Sun-kissed Fruits</p>
              <img
                src="img/digital_diner_Plate_of_fruits_and_vegetables_inthe_style_of_van_0a826d82-759e-40b7-8f9f-f0c6729866da-removebg-preview 1.png"
                alt="Top Note"
                class="img-fluid rounded-circle"
              />
            </div>
            <div class="menu-note col-md-4 text-center">
              <h5>Heart Note</h5>
              <p>Golden Roses, Rare Blooms</p>
              <img
                src="img/pexels-dalia-alrefai-17131049 1.png"
                alt="Heart Note"
                class="img-fluid rounded-circle"
              />
            </div>
            <div class="menu-note col-md-4 text-center">
              <h5>Base Note</h5>
              <p>Amber, Vanilla, Sandalwood</p>
              <img
                src="img/pexels-karolina-grabowska-4198430 1.png"
                alt="Base Note"
                class="img-fluid rounded-circle"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- Individual Reviews -->
      <x-review></x-review>
</x-layout>