        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="container">
                    <div class="row fullscreen align-items-center justify-content-center">
                        <div class="banner-content col-lg-6 col-md-12">
                            <h1 class="text-uppercase">
                                Herstel <br>
                                Jakarta Selatan
                            </h1>
                            <p>
                                Covid-19  Test Directory
                            </p>
                            <button class="primary-btn2 mt-20 text-uppercase ">
                                <span class="">
                                    <a class="" href="/daftar">Login</a>
                                </span> 
                            </button>
                        </div>
                

                        <div class="col-lg-6 d-flex align-self-end img-right">
                            <img class="img-fluid" src="{{ asset('medical-colorlib') }}/img/header-img.png" alt="">
                        </div>
                    </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start feature Area -->
        <section class="blog-area section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 pb-30 header-text">
                        <h1>Highlight</h1>
                        <p>
                            Directory Tempat yang Menyediakan Tes Covid-19 di Jakarta Selatan
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="single-blog col-lg-4 col-md-4">

                        <img class="f-img img-fluid mx-auto" src="{{ asset('medical-colorlib') }}/img/download (2).jpg" alt="">
                        <h4>
                            <a href="#">AIC Medical Clinic</a>
                        </h4>
                        <p>
                            14, No.18, Jl. Prof. DR. Satrio, Kuningan, Karet Kuningan, Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta
                            
                        </p>
                    
                    </div>
                    <div class="single-blog col-lg-4 col-md-4">
                        <img class="f-img img-fluid mx-auto" src="{{ asset('medical-colorlib') }}/img/medizen.jpeg" alt="">
                        <h4>
                            <a href="{{ asset('medical-colorlib') }}/">Medizen Clinic</a>
                        </h4>
                        <p>
                            Menara Standard Chartered, Lt.
                            LG Podium Blok 004B, Jl Prof Dr Satrio No 64, 
                            Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta
                        </p>
                        
                    </div>
                    <div class="single-blog col-lg-4 col-md-4">
                        <img class="f-img img-fluid mx-auto" src="{{ asset('medical-colorlib') }}/img/parahita.jpg" alt="">
                        <h4>
                            <a href="{{ asset('medical-colorlib') }}/">Parahita Diagnostic Center Jakarta</a>
                        </h4>
                        <p>
                            Jalan Warung Buncit Raya No. 150, Mampang Prapatan, 
                            RT.5/RW.2, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760, Indonesia
                        </p>
                    
                    </div>
                </div>
            </div
        </section>
        <!-- End feature Area -->


        <!-- Start about Area -->
        <section class="about-area" id="appoinment">
            <div class="container-fluid">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-lg-6 col-md-12 about-left no-padding">
                        <img class="img-fluid" src="{{ asset('medical-colorlib') }}/img/about-img.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 about-right no-padding">
                        <h1> Belum Punya Akun? <br> </h1>
                        <form class="booking-form" id="myForm" action="donate.php">
                                 <div class="row">
                                     <div class="col-lg-12 d-flex flex-column">
                                         <input name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class="form-control mt-20" required="" type="text" required>
                                     </div>
                                     <div class="col-lg-6 d-flex flex-column">
                                        <input name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" class="form-control mt-20" required="" type="text" required>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column">
                                        <input id="datepicker2" name="app-date" class="single-in mt-20"  onblur="this.placeholder = 'Email'" type="text" placeholder="Alamat" required>
                                    </div>
                                

                                    <div class="col-lg-12 d-flex justify-content-end send-btn">
                                        <button class="submit-btn primary-btn mt-20 text-uppercase ">
                                            daftar
                                            <span class="lnr lnr-arrow-right"></span></button>
                                    </div>

                                    <div class="alert-msg"></div>
                                </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about Area -->

        <!-- Start consultans Area -->
    

        <!-- End consultans Area -->

        <!-- Start fact Area -->
        <section class="facts-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h2 class="counter">400</h2>
                        <p class="text-uppercase">klien di tangani</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h2 class="counter">59</h2>
                        <p class="text-uppercase">Pasien Reactive</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h2 class="counter">24</h2>
                        <p class="text-uppercase">Pasien Positive</p>
                    </div>
                    <div class="col-lg-3 col-md-6 single-fact">
                        <h2 class="counter">23</h2>
                        <p class="text-uppercase">Pasien Negative</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end fact Area -->

        <!-- Start blog Area -->
        <section class="consultans-area section-gap" id="consultant">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Referensi Lain</h1>
                        <p>
                        Rumah Sakit daerah Jakarta Selatan Penyedia Test Covid-19
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-con">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="{{ asset('medical-colorlib') }}/img/Laboratorium Klinik Prodia Bukit Tinggi.jpg" alt="dist-img">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Laboratorium klinik </h4>
                                          <p>
                                              Prodia Pasar Minggu
                                              Pejaten Bar., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-con">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="{{ asset('medical-colorlib') }}/img/beautylogica.jpg" alt="dist-img">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Clinic</h4>
                                          <p>
                                              Beautylogica Pejatan
                                              No.033, Jl. Pejaten Raya, Jati Padang, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-con">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="{{ asset('medical-colorlib') }}/img/haha.jpg" alt="dist-img">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>RS Mayapada</h4>
                                          <p>
                                          Jakarta Selatan
                                          Jl. Lebak Bulus 1, Kav. 29, Lebak Bulus - Cilandak, Jakarta Selatan, Jakarta, Indonesia 12440
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-con">
                            <div class="content">
                                <a href="{{ asset('medical-colorlib') }}/" target="_blank">
                                  <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="{{ asset('medical-colorlib') }}/img/Tampak Depan Rumah Sakit Asri Mampang.jpg.jpg" alt="dist-img">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Siloam clinic</h4>
                                          <p>
                                              Bona Indah
                                              Ruko Bona Indah Bisnis Centre B1 No.8K, Jl Karang Tengah Raya Kel. Lebak Bulus, Kec. Cilandak Jakarta Selatan
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end blog Area -->
