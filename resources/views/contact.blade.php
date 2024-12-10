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
            widht="505px"
            height="180px"
          />
        </div>
        <div class="perfume-bottle">
          <div>
            <a
              href="/contact"
              style="
                background-color: #fff;
                color: #111111;
                padding: 5px 5px;
                display: inline-block;
                font-size: 40px;
                font-weight: 400;
                text-decoration: none;
              "
              >CONTACT</a
            >
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
    <div class="container contact-section">
      <h2>Contact Us</h2>
      <p>Any question or remarks? Just write us a message!</p>

      <div class="row mt-5">
        <!-- Contact Information -->
        <div class="col-md-4 contact-info">
          <h4>Contact Information</h4>
          <p>Say something to start a live chat!</p>
          <div class="info-item">
            <i class="fas fa-phone"></i> +1012 3456 789
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i> demo@gmail.com
          </div>
          <div class="info-item">
            <i class="fas fa-map-marker-alt"></i> 132 Dartmouth Street Boston,
            Massachusetts 02156 United States
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-8">
          <form>
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  placeholder="First Name"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  placeholder="Last Name"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input
                  type="tel"
                  class="form-control"
                  id="phone"
                  placeholder="+1 012 3456 789"
                />
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                class="form-control"
                id="message"
                rows="4"
                placeholder="Write your message.."
              ></textarea>
            </div>
            <a href="#">
              <button type="submit" class="btn send-btn">Send Message</button>
            </a>
          </form>
        </div>
      </div>
    </div>
</x-layout>