@extends('layouts/main')

@section('container')

    <!--Panitia Section Start-->
    <section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
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
                    animate-pulse
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
                    text-paletE
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
                    src="../../assets/team/Arianto Ahmad  A2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Arianto Achmad A
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-2">
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
                    src="../../assets/team/Tyo Riandi2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
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
                    src="../../assets/team/Fredy Pradana Putra2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
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
                    src="../../assets/team/Ilda  Annisa Afifah2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
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
                ><!--Sekre 2-->
                  <img
                    src="..\..\assets\team\Yenny Retno U2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Yenny Retno
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Sekretaris 2
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
                ><!--Sekre 3-->
                  <img
                    src="..\..\assets\team\Nabila Sandy Sinta2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Nabila sandy Sinta
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Sekretaris 3
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
                ><!--Sie Acara (PIC)-->
                  <img
                    src="..\..\assets\team\Nur Afri Azizah2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Nur Afri Azizah
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    SIE Acara(PIC)
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
                ><!--Sie Acara-->
                  <img
                    src="..\..\assets\team\Muhammad Syaiful2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Muhammad Syaiful
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    SIE Acara
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--SIE Acara-->
                  <img
                    src="..\..\assets\team\Nadira Amanda Nisa2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Nadira Amanda Nisa
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    SIE Acara
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Lutfi Putra Hakim Maulidin2.jpg"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Lutfi Putra Hakim Maulidin
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Dep IT Doc & Broadcast (PIC)
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Salma Faradhiba2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Salma Faradhiba
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Dep IT Doc & Broadcast
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Bagus Adianto2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Bagus Adianto
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Dep IT Doc & Broadcast
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Juliana Fitria2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Juliana Fitria
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Dep IT Doc & Broadcast
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Imam Muhannad2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Imam Muhannad
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Dep IT Doc & Broadcast
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Rani Wahyu Lestari2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Rani Wahyu Lestari
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping (PIC)
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Izdihar Callista Nugrahaningtyas2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Izdihar Callista Nugrahaningtyas
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--Nara damping-->
                  <img
                    src="..\..\assets\team\Annas Tassya Ayu Baktiar2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Annas Tassya Ayu Baktiar
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Yunita Windriana2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Yunita Windriana
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Kesya Novita Angel2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Kesya Novita Angel
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Noer Musdalifah Agustin2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Noer Musdalifah Agustin
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--Nara damping-->
                  <img
                    src="..\..\assets\team\Ariya Sanjaya2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Ariya Sanjaya
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Naradamping
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Moch. David Herdiansyah2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Moch. David Herdiansyah
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Komisi Dispilin (PIC)
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Vanessca Vindy Audina Prayogo2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                  <span class="absolute right-0 bottom-0">
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Vanessca Vindy Audina Prayogo
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Komisi Displin
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Thalia Devi Savitri2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Thalia Devi Savitri
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Komisi Disiplin
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--Nara damping-->
                  <img
                    src="..\..\assets\team\Reynaldi.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Reynaldi Nahaz Zamzami
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Komisi Disiplin
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Mokhamad Syihabul Khoir2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Mokhamad Syihabul Khoir
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Perlengkapan (PIC)
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Achmad Ryo Dwi Prastiyo2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Achmad Ryo Dwi Prastiyo
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Perlengkapan
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Krisnanda.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Khrisnanda Putra WR
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Perlengkapan
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--Nara damping-->
                  <img
                    src="..\..\assets\team\Fadilatus Syifa2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Fadilatus Syifa
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Perlengkapan
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
                ><!--IT DOC (PIC)-->
                  <img
                    src="..\..\assets\team\Dewa Ramadhan2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Dewa Ramadhan
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Kreatif (PIC)
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Nur  Rochmawati2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Nur Rochmawati
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Kreatif
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
                ><!--IT Doc-->
                  <img
                    src="..\..\assets\team\Devi Pratiwi2.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Devi Pratiwi
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Kreatif
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
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
                ><!--Nara damping-->
                  <img
                    src="..\..\assets\team\Alvina S.JPG"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  @include('partials/spancircle') 
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Alvina Shanaz Oktavia
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Divisi Kreatif
                  </p>
                  <div class="flex items-center justify-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <br>           
            <a href="/">
                <button type="submit" class="mx-auto w-48 relative flex justify-center py-2 px-4 text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-2 animate-bounce">
            Kembali 
           </button></a></div>
      </section>
<!--Panitia Section End-->

@endsection