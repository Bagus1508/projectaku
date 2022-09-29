@extends('layouts/main')

@section('container')
    <!-- ====== Welcome Section Start -->
    <section
      id="welcome"
      class="
       w-full mx-auto"
    >
    <div class=" bg-transparent">
      <div class="">
          <img src="/assets/banner/spanduk.jpeg" alt="" class=" mx-auto">
          <a href="#about" class="flex --btn mt-5 mb-5 px-10 py-2 rounded-md mx-12 bg-orange-500 text-white font-semibold animate-bounce mx-auto justify-center">Gas!</a>
      </div>
  </div>
    </section>
    <!-- ====== Welcome Section End -->

    <!--Tema Section Start-->
    <section class="pt-5 pb-10 lg:pb-20 bg-white">
      <div class="justify-center flex-auto" id="about">
        <div class=" ">
          <div class="w-full px-4">
            <div class="text-center justify-center flex-auto">
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-5 
                  text-paletE
                  justify-center
                  mx-auto
                  text-blue-800
                "
              >
                Tema PKKMB 2022 Universitas Narotama
              </h2>
              <h3 class="font-bold mx-auto justify-center text-gray-600 text-xl underline">
                “Mahakarya Punggawa Narotama Pilar Patriot Nusantara”
              </h3>
                  <p class="mt-3 lg:mx-12">
                    Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi melakukan 
                    berbagai strategi untuk menerapkan Kebijakan Merdeka Belajar - Kampus Merdeka (MBKM). 
                    Sejak pertama kali diluncurkan di awal tahun 2020, program Merdeka Belajar-Kampus Merdeka 
                    mendapatkan respon positif dari berbagai kalangan, termasuk mahasiswa. Berdasarkan 
                    Peraturan Menteri Pendidikan dan Kebudayaan Nomor 3 tahun 2020 tentang Standar Nasional 
                    Pendidikan Tinggi, mahasiswa mendapatkan hak belajar di luar program studinya selama 3 
                    (tiga) semester. Perguruan Tinggi wajib memberikan layanan terhadap penggunaan hak 
                    tersebut. Kebijakan MBKM bertujuan untuk meningkatkan kompetensi mahasiswa dan 
                    memperkaya pengalaman belajar mahasiswa di masyarakat atau luar kampus yang dapat
                    dikonversi menjadi 20 sks per semester. Kebijakan ini tentu harus terus disosialisasikan tak 
                    terkecuali kepada mahasiswa baru disetiap perguruan tinggi. Salah satu momen yang tepat untuk 
                    mendiseminasi informasi mengenai program ini adalah Pengenalan Kehidupan Kampus Bagi 
                    Mahasiswa Baru (PKKMB).
                  </p>
                  <p class="mt-2 lg:mx-12">
                    Melalui PKKMB, mahasiswa diberikan bekal agar mampu berproses dalam 
                    melaksanakan tridharma perguruan tinggi, sehingga kelak menjadi lulusan yang memiliki 
                    kedalaman ilmu, keluhuran akhlak, cinta tanah air, dan mampu berkarya secara optimal. 
                    Kegiatan PKKMB diharapkan menjadi wadah untuk menanamkan 4 pilar kebangsaan meliputi 
                    Pancasila, Undang-Undang Dasar 1945, Negara Kesatuan Republik Indonesia, dan Bhineka 
                    Tunggal Ika. PKKMB ini diharapkan dapat mengembangkan adat istiadat, seni budaya dan 
                    kearifan lokal, sehingga mampu membentuk karakter mahasiswa yang mengedepankan sikap 
                    sebagai intelektual yang mengandalkan kecerdasan berpikir, kedewasaan dalam bertutur kata 
                    dan bertindak, berbudaya, bermartabat, serta inspiratif.
                  </p>
                  <p class="mt-2 lg:mx-12">
                    Tujuan pelaksanaan kegiatan ini adalah menyiapkan mahasiswa baru melewati proses 
                    transisi menjadi mahasiswa yang dewasa dan mandiri, serta mempercepat proses adaptasi 
                    mahasiswa dengan lingkungan yang baru dan memberikan bekal untuk keberhasilannya 
                    menempuh pendidikan di perguruan tinggi. Kegiatan ini dapat dijadikan titik tolok ukur 
                    pembinaan idealisme, penguatan rasa cinta tanah air, dan kepedulian terhadap lingkungan, juga 
                    5
                    dalam rangka menciptakan generasi yang berkarakter, religius, nasionalis, mandiri, gotong 
                    royong, dan berintegritas.
                  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Tema Section End-->

    <!--Tab Card Start-->
      

    <!--Tab Card Stop-->


    <!--Video Section Start-->
<section id="mars" class="pb-14 bg-blue-600 flex justify-center">
  <div class="justify-center flex-auto lg:mx-16">
    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="text-center ">
          <h1 class="mx-auto justify-center font-bold text-white text-4xl pb-8 pt-12 underline">MARS & HYMNE NAROTAMA</h1>
          <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-6 w-full">

          <div class="shadow hover:shadow-md w-full bg-white hover:bg-gray-200 rounded-lg overflow-hidden cursor-pointer">
              <iframe class="w-full h-96"
              src="https://www.youtube.com/embed/8h5HCz-qlUE"
              alt="Mars Narotama"></iframe>
                <div class="relative p-4">
                  <h3 class="text-base md:text-2xl font-extrabold text-black py-4  ">
                    MARS NAROTAMA
                  </h3>
                </div>
          </div>
          
            <div class="shadow hover:shadow-md w-full bg-white hover:bg-gray-200 rounded-lg overflow-hidden cursor-pointer">
                <iframe class="w-full h-96"
                src="https://www.youtube.com/embed/A5dB8j5IWDI"
                alt="Hymne Narotama"></iframe>
                  <div class="relative p-4">
                    <h3 class="text-base md:text-2xl font-extrabold text-black py-4 ">
                      HYMNE NAROTAMA
                    </h3>
                  </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="mars" class="pb-14 bg-blue-600 flex justify-center">
  <div class="justify-center flex-auto lg:mx-16">
    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="text-center ">
          <h1 class="mx-auto justify-center font-bold text-white text-4xl pb-8 underline">AFTER MOVIE MOM</h1>
          <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-6 w-full">

          <div class="shadow hover:shadow-md w-full bg-white hover:bg-gray-200 rounded-lg overflow-hidden cursor-pointer">
              <iframe class="w-full h-96"
              src="https://www.youtube.com/embed/ZCj1iMsjOcU"
              alt="MOM 2018"></iframe>
                <div class="relative p-4">
                  <h3 class="text-base md:text-2xl font-extrabold text-black py-4 ">
                    MOM 2018
                  </h3>
                </div>
          </div>
          
            <div class="shadow hover:shadow-md w-full bg-white hover:bg-gray-200 rounded-lg overflow-hidden cursor-pointer">
                <iframe class="w-full h-96"
                src="https://www.youtube.com/embed/6t0n2v-FRBQ"
                alt="MOM 2019"></iframe>
                  <div class="relative p-4">
                    <h3 class="text-base md:text-2xl font-extrabold text-pblack py-4 ">
                      MOM 2019
                    </h3>
                  </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="mars" class="pb-14 bg-blue-600 flex justify-center">
  <div class="justify-center flex-auto lg:mx-16">
    <div class="flex flex-wrap">
      <div class="w-full px-4">
        <div class="text-center ">
          <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-6 w-full">
          
            <div class="shadow hover:shadow-md w-full bg-white hover:bg-gray-200 rounded-lg overflow-hidden cursor-pointer">
                <iframe class="w-full h-96"
                src="https://drive.google.com/file/d/1lomZOyMgNeIKfkAIU4_OgHrYBU6gKPIK/preview"
                alt="PKKMB 2021"></iframe>
                  <div class="relative p-4">
                    <h3 class="text-base md:text-2xl font-extrabold text-black py-4 ">
                      PKKMB 2021
                    </h3>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Video Section End-->

    <!-- ====== Team Section Start -->
    <section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-gray-100">
      <div class="justify-center mx-auto">
        <div class="flex flex-wrap">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] max-w-[620px]">
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                  text-paletE
                  text-blue-800
                  
                "
              >
                Team PKKMB 2022
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                  text-gray-600
                  underline
                "
              >
                Yuk kita lihat team dari PKKMB Narotama 2022!
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center">
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              ><!--Steering 1-->
                <img
                  src="/assets/team/Arianto Ahmad  A2.JPG"
                  alt="image"
                  class="w-full rounded-full"
                />
              @include('partials/spancircle')
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Arianto Achmad A
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Steering Committee 1
                </p>
                <div class="flex items-center justify-center">
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".15s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              ><!--Steering 2-->
                <img
                  src="/assets/team/Tyo Riandi2.JPG"
                  alt="image"
                  class="w-full rounded-full"
                />
                @include('partials/spancircle')
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">Tyo Riyandi</h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Steering Committee 2
                </p>
                <div class="flex items-center justify-center">
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".2s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              ><!--Ketua Pelaksana-->
                <img
                  src="/assets/team/Fredy Pradana Putra2.JPG"
                  alt="image"
                  class="w-full rounded-full"
                />
                @include('partials/spancircle')
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Fredy Pradana Putra
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Ketua Pelaksana
                </p>
                <div class="flex items-center justify-center">
                </div>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
            <div class="mb-10 wow fadeInUp" data-wow-delay=".25s">
              <div
                class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                "
              ><!--sekretaris 1(PIC)-->
                <img
                  src="/assets/team/Ilda  Annisa Afifah2.JPG"
                  alt="image"
                  class="w-full rounded-full"
                />
                @include('partials/spancircle')
              </div>
              <div class="text-center">
                <h4 class="font-medium text-lg text-dark mb-2">
                  Ilda Annisa Afifah
                </h4>
                <p class="font-medium text-sm text-body-color mb-5">
                  Sekretaris 1 (PIC)
                </p>
                <div class="flex items-center justify-center">
                </div>
              </div>
            </div>
          </div>
          <a href="/panitia">            
            <button type="link" class="py-2 px-12 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">Lihat Selengkapnya</button>
          </a>
        </div>
      </section>
    <!-- ====== Team Section End -->

<!-- ====== Maps Section Start -->
<section id="team" class=" pb-10 lg:pb-20 border-b-2 bg-gray-100">
  <div class="w-full" style="background-color: #F3F5FA !important;">
    <div class=" md:px-14 md:py-10 py-5 m-auto">
        <div class="flex mx-auto justify-center text-center">
            <h1 class="font-bold text-4xl pb-8 pt-12 underline text-blue-800">LOKASI UNIVERSITAS NAROTAMA</h1>
        </div>
        <article class="my-16 grid md:grid-cols-2 grid-cols-1 gap-x-24">
            <div>
                <div class="container  w-100 p-0">
                        <div class="ml-5 mb-4">
                            <h3 class="text-2xl font-bold uppercase text-base text-gray-600">ALAMAT :</h3>
                            <p class="text-grey text-lg text-gray-600">Jl. Arief Rachman Hakim 51, Sukolilo Surabaya (60117)</p>
                        </div>
                </div>
            </div>
            <div>
                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Jl.%20Arief%20Rahman%20Hakim%20No.51,%20Klampis%20Ngasem,%20Kec.%20Sukolilo,%20Kota%20SBY,%20Jawa%20Timur%2060117+(Universitas%20Narotama)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </article>
    </div>
</div>
  </section>
<!-- ====== Maps Section End -->
@endsection