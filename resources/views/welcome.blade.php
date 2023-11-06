@extends('layouts.Web')

@section('title', 'Halaman Utama')

@section('content')

        <!-- start of hero -->
        <section class="hero-slider hero-style-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/03.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2><span>Teknologi Hebat</span> Layanan Terbaik</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Kami memiliki teknologi yang hebat sehingga mampu membuat berbagai macam website.
                                        Dan kami selalu memberikan pelayanan terbaik kami</p>
                                </div>
                                <div class="clearfix"></div>
                                
                            </div>
                        </div> <!-- end slide-inner -->
                    </div><!-- end swiper-slide -->
                    
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-1.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2><span>Jasa Pembuatan Website Murah & Profesional</span></h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Nikmati website perusahaan profesional dan murah dari Wokaproject.id! Dengan
                                        jasa web company profile dari kami, Anda akan memiliki situs web menarik yang
                                        memenuhi kebutuhan bisnis, instansi, ataupun organisasi Anda. </p>
                                </div>
                                <div class="clearfix"></div>
                                
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/02.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2><span>Kami Memberikan yang Terbaik</span> Layanan Industri</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Kami selalu memberikan layanan terbaik kami untuk para client yang menggunakan
                                        jasa kami di industri ini</p>
                                </div>
                                <div class="clearfix"></div>
                                
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                   
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start features-section-s2 -->
        <section class="features-section-s2">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="feature-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/features/network.png" alt>
                                </div>
                                <h3>01. Network Administration</h3>
                                <p>Mendesain dan membangun infrastruktur jaringan computer dan perangkat keras computer.
                                </p>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/features/web.png" alt>
                                </div>
                                <h3>02. Web Development</h3>
                                <p>Merancang sebuah website dari awal sekali, menciptakan coding dsb.
                                </p>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/features/design.png" alt>
                                </div>
                                <h3>03. Graphic Design</h3>
                                <p>Menciptakan ilustrasi baik untuk penerbit
                                    maupun media cetak dan elektronik.
                                </p>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/features/it.png" alt>
                                </div>
                                <h3>04. IT Trainer & Consultant</h3>
                                <p>Merancang teknologi digital tepat guna untuk
                                    mendukung kesuksesan bisnis Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end features-section-s2 -->

        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="left-col">
                            <div class="img-holder">
                                <img src="assets/images/contact.png" alt>
                                <div class="call-back">
                                    <h3>500+</h3><span>Call we <br>Back</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form">
                            <div class="section-title">
                                <span>Hubungi</span>
                                <h2>Anda dapat menghubungi kami, <span>jika Anda memiliki pertanyaan</span></h2>
                            </div>
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="No. HP*">
                                </div>
                                <div>
                                    <select name="subject" class="form-control">
                                        <option disabled="disabled" selected>Subjek</option>
                                        <option>Network Administration</option>
                                        <option>Web Development</option>
                                        <option>Graphic Design</option>
                                        <option>IT Trainer & Consultant</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="note" id="note"
                                        placeholder="Pertanyaan anada..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="submit-btn">Kirim Sekarang</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                            <script>
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("contact-form-main");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var subject = document.querySelector('select[name="subject"]').value;
        var note = document.getElementById("note").value;
        
        var message = "Nama: " + name + "\nEmail: " + email + "\nNo. HP: " + phone + "\nSubjek: " + subject + "\nPertanyaan: " + note;
        
        var whatsappLink = "https://api.whatsapp.com/send?phone=6285783986998&text=" + encodeURIComponent(message);
        
        // Redirect to WhatsApp
        window.location.href = whatsappLink;
    });
});
</script>


                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->

        <!-- start latest-projects-section-s2 -->
        <section class="latest-projects-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="section-title-s3">
                            <span>Projects</span>
                            <h2>Projects Client Kami</h2>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All Projects</a></li>
                                @php
$displayedCategories = []; // Array untuk melacak kategori yang sudah ditampilkan
@endphp

@foreach ($projects as $project)
    @if (!in_array($project->category, $displayedCategories))
        <li><a data-filter=".{{$project->category}}" href="#" class="">{{$project->category}}</a></li>
        @php
        $displayedCategories[] = $project->category; // Tandai kategori sebagai sudah ditampilkan
        @endphp
    @endif
@endforeach

                            </ul>
                        </div>
                        <div class="gallery-container project-grids"  style="position: relative; height: 909.312px;">
                        @foreach ($projects as $project)
                            <div class="grid {{$project->category}}" style="position: absolute; left: 0px; top: 0px;">
                                <div class="inner">
                                    <div class="img-holder">
                                        <img src="{{ asset('project/' . $project->image) }}" alt="">
                                    </div>
                                    <div class="details">
                                        <div class="arrow"><a href="#"><i class="fi flaticon-next"></i></a></div>
                                        <div class="info">
                                            <h3><a href="#">{{$project->title}}</a></h3>
                                            <p class="cat">{{$project->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach    
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end latest-projects-section-s2 -->
        <script>
document.addEventListener("DOMContentLoaded", function() {
    // Mengambil semua elemen proyek
    var projectElements = document.querySelectorAll(".grid");

    // Iterasi melalui setiap elemen proyek
    projectElements.forEach(function(project, index) {
        project.addEventListener("click", function() {
            // Mengambil konten proyek yang sesuai
            var projectContent = project.innerHTML;

            // Membuat elemen pop-up
            var popup = document.createElement("div");
            popup.classList.add("popup");
            popup.innerHTML = projectContent;

            // Menambahkan latar belakang gelap
            var overlay = document.createElement("div");
            overlay.classList.add("overlay");
            document.body.appendChild(overlay);

            // Menambahkan pop-up ke body dokumen
            document.body.appendChild(popup);

            // Membuat tombol tutup di pop-up
            var closeButton = document.createElement("button");
            closeButton.classList.add("close-button");
            closeButton.innerHTML = "Tutup";
            popup.appendChild(closeButton);

            // Menambahkan event listener untuk tombol tutup
            closeButton.addEventListener("click", function() {
                // Menghapus pop-up dan overlay saat tombol tutup diklik
                document.body.removeChild(popup);
                document.body.removeChild(overlay);
            });
        });
    });
});
</script>
<style>
.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.popup .inner {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    text-align: center; /* Pusatkan konten */
    max-width: 80%;
}

.popup .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    cursor: pointer;
}
</style>



        <!-- start why-choose-us-section -->
        <section class="why-choose-us-section section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="inner-area">
                            <div class="section-title">
                                <span>MENGAPA MEMILIH KAMI</span>
                                <h2>Kami berpengalaman, <span>Dalam industri ini</span></h2>
                            </div>
                            <div class="details">
                                <p>"Menjadi perusahaan yang terkemuka dalam solusi teknologi informasi, memberikan inovasi, kualitas, solusi teknologi dan konsultasi it bagi perusahaan."</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="img-holder">
                            <img src="assets/images/skill.JPG" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end why-choose-us-section -->


        <!-- start team-section -->
        <section class="team-section section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="section-title-s4">
                            <span>Members</span>
                            <h2>Tim Kami yang Berdedikasi <span>Untuk layanan Anda</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/ardi.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Rahman Ardi Saputra</h3>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/akbar.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Muhammad Akbar</h3>
                                    <span>Network Administrator</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/ubay.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Ahmad Ubaid Rizcon</h3>
                                    <span>IT Trainer & Consultant</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/bayu.jpg" alt>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Bayu Fahrizal</h3>
                                    <span>Designer Graphic</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->


        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
            <div class="row">
                    <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="section-title-s3">
                            <span>Partner</span>
                            <h2>Kerja Sama Kami</h2>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                        @foreach ($partners as $partner)
                            <div class="grid">
                                <img src="{{ asset('partner/' . $partner->image_path) }}" alt>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->


        <section class="latest-projects-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="section-title-s3">
                            <span>Gabung Dengan Kami</span>
                            <h2>Woka Academy</h2>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                    <div
  loading="lazy"
  data-mc-src="9d9b90eb-e79b-4818-a4d7-d5eb32dae7da#null"></div>
        
<script 
  src="https://cdn2.woxo.tech/a.js#642ad922d1c6300eee783455" 
  async data-usrc>
</script>         
                </div>
                </div>
            </div> <!-- end container -->
        </section>


        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="section-title">
                            <span>Recent news</span>
                            <h2>Lihat yang baru <span>di blog kami</span></h2>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <div class="title-text">
                            <p>Selalu pantau website kami untuk mendapatkan informasi terbaru.</p>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        <div class="view-all">
                            <a href="#" class="theme-btn">View all post</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids">
                        @foreach ($blogs as $blog)
    
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="img/{{ $blog->img }}" style="width: 550px;height: 464px;" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">{{ $blog->title }}</a></h3>
                                    <p class="date">Jun 18, 2019</p>
                                    <p>{{ $blog->content }}</p>
                                    <a href="#" class="more">Read more</a>
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->

        @endsection