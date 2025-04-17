<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

    <img src="{{ asset('frontAssets/img/testimonials-bg.jpg') }}" class="testimonials-bg"
        alt="Testimonials Background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        }
      }
    </script>
            <div class="swiper-wrapper">

                <!-- Testimonial Item 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('frontAssets/img/testimonials/testimonials-2.jpg') }}"
                            class="testimonial-img" alt="Emily Davis">
                        <h3>Emily Davis</h3>
                        <h4>Car Dealer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>The team handled our fleet shipment flawlessly—on time, every time. Their tracking
                                portal gave me total peace of mind.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <!-- Testimonial Item 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('frontAssets/img/testimonials/testimonials-1.jpg') }}"
                            class="testimonial-img" alt="Michael Lee">
                        <h3>Michael Lee</h3>
                        <h4>Private Owner</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>I was nervous about shipping my classic car, but their enclosed transport and
                                insurance coverage exceeded my expectations.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <!-- Testimonial Item 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('frontAssets/img/testimonials/testimonials-3.jpg') }}"
                            class="testimonial-img" alt="Sophia Martinez">
                        <h3>Sophia Martinez</h3>
                        <h4>Collector</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Excellent service from pickup to delivery. My vintage roadster arrived in perfect
                                condition.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <!-- Testimonial Item 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('frontAssets/img/testimonials/testimonials-4.jpg') }}"
                            class="testimonial-img" alt="David Kim">
                        <h3>David Kim</h3>
                        <h4>Manufacturer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>As an OEM partner, their seamless logistics and real‑time updates keep our production
                                schedule on track.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <!-- Testimonial Item 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('frontAssets/img/testimonials/testimonials-5.jpg') }}"
                            class="testimonial-img" alt="Smith Thompson">
                        <h3>Smith Thompson</h3>
                        <h4>Relocation Client</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Moving cross-country was a breeze thanks to their efficient scheduling and
                                professional team.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
<!-- /Testimonials Section -->
