
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

    <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
        <img src="assets_landing/img/about.jpg" class="img-fluid" alt="">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
        <h3>About Us</h3>
        <p>
            Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
        </p>
        @foreach ($aboutus as $item)
            <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                    <div>{!! $item->icon !!}</div>
                    <div>
                        <h5>{{$item->tittle}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                </li>
            </ul>
        @endforeach
        </div>
    </div>
    </div>
</section>
<!-- End About Us Section -->
