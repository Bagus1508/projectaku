@extends('layouts/main')

@section('container')
<h1 class="font-bold justify-center mx-auto flex mt-8 text-3xl text-gray-600 text-center">TENTANG PKKMB UNIVERSITAS NAROTAMA</h1>
<section class="mx-8 my-8">
<div class="mb-4 border-b border-gray-200 dark:border-gray-700 bg-gray-200 rounded-md">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tujuan & Sasaran</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="logoUN-tab" data-tabs-target="#logoUN" type="button" role="tab" aria-controls="logoUN" aria-selected="false">Universitas Narotama</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="PKKMB-tab" data-tabs-target="#PKKMB" type="button" role="tab" aria-controls="PKKMB" aria-selected="false">PKKMB</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="Agenda-tab" data-tabs-target="#Agenda" type="button" role="tab" aria-controls="Agenda" aria-selected="false">Agenda Kegiatan</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <ol class="list-decimal ml-2">
            <h1 class="font-bold">TUJUAN</h1>
            <li>
                Meningkatkan kesadaran berbangsa, bernegara, dan bela negara serta kepedulian terhadap lingkungan sosial dengan landasan Pancasila, Undang – Undang Dasar Negara Republik Indonesia tahun 1945, Negara Kesatuan Republik Indonesia, dan Bhineka Tunggal Ika.
            </li>
            <li>
                Mengenalkan Studi Akademik (Masa Studi, Pembelajaran, E–Lina, Pembayaran 
                Kuliah, Beasiswa Pemerintah PPA/Luar Negeri/Beasiswa Atlet Berprestasi, 
                Praktikum, Perwalian, KHS, KRS, KKN, Pengajuan Skripsi atau Tesis, Program 
                Magang, Studi Lanjut Ke luar Negeri sampai Peluang kerja).
            </li>
            <li>
                Mengenalkan kehidupan ORMAWA meliputi organisasi, birokrasi, kultur dan 
                budaya Universitas Narotama (BEM, HIMA, dan UKM). 
            </li>
            <li>
                Memberikan edukasi perguruan tinggi di era revolusi, industri 4.0 dan kehidupan 
                kampus pada masa pandemi.                
            </li>
            <li>
                Memberikan edukasi dan pengenalan program Kemendikbud yaitu Pusat Prestasi 
                Nasional.
            </li>
            <li>
                Memberikan pembekalan dan karakter mahasiswa yang mengedepankan sikap 
                sebagai intelektual yang mengandalkan kecerdasan berpikir, kedewasaan dalam 
                bertutur kata dan bertindak, anti kekerasan (anti perundungan), berbudaya, 
                bermartabat, dan inspiratif.
            </li>
            <li>
                Mewujudkan kampus Narotama sebagai kampus yang ramah, aman, dan sehat.
            </li>
            <li>
                Memperkenalkan kiat sukses belajar dan mengembangkan diri di perguruan tinggi 
                melalui konsepsi dan praktik Merdeka Belajar - Kampus Merdeka.
            </li>
            <li>
                Mewujudkan mahasiswa mandiri, bertanggung jawab, serta pembelajar yang 
                tangguh.
            </li>
        </ol>
        <ol class="my-4">
            <h1 class="font-bold">SASARAN</h1>
            <li>
                Mahasiswa baru Reguler A, B, Profesional dan Internasional serta Mahasiswa yang 
                belum mengikuti PKKMB Universitas Narotama Surabaya.
            </li>
        </ol>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="logoUN" role="tabpanel" aria-labelledby="logoUN-tab">
        <h1 class="font-bold mb-4">ARTI LAMBANG UNIVERSITAS NAROTAMA</h1>
        <ul>
            <a href='https://narotama.ac.id/' target='_blank'><img src='https://i.postimg.cc/DynbxBZQ/logo-unnar.png' alt='logo-unnar' class="w-48 justify-center mx-auto"/></a>
            <p>
                Huruf U dan N ditengah merupakan singkatan dari Universitas Narotama dengan warna 
                Kuning Emas dan Biru Muda, terletak diatas daun Pancasila yang bersudut 5 (lima) dan 
                berwarna Biru. Diatas Daun Biru terdapat tulisan PRO PATRIA warna Putih yang artinya Cinta 
                Tanah Air. Di luar terdapat lingkaran kuning bertuliskan Universitas Narotama berwarna biru 
                tua, serta tertera tulisan tanda seru, koma, titik koma dan tanda seru yang berarti tahun berdirinya 
                Universitas Narotama pada tahun 1981 dan merupakan tanda-tanda pokok dalam mewujudkan 
                tulisan/ilmu. ARTI KESELURUHAN warna kuning adalah warna kebesaran dan biru adalah 
                warna yang kekal abadi. Universitas Narotama mempunyai harapan dapat menjadi sarana 
                pendidikan tinggi yang ber-Pancasila yang penuh kebesaran dan keabadian serta membentuk 
                insan-insan Pancasila yang senantiasa Cinta Tanah Air (Pro Patria) dan Bangsa.
            </p>
        </ul>
        <h1 class="font-bold mb-4 -ml-2 mt-4">VISI DAN MISI UNIVERSITAS NAROTAMA</h1>
        <ol class="list-disc">

            <li class="ml-4">
                <p class="font-bold">Visi</p>
                Terwujudnya Universitas yang Modern dan Bermutu berbasis Teknologi Informasi dan 
                Komunikasi pada tahun 2025.
            </li>

            <li class="ml-4">
                <p class="font-bold">Misi</p>
                Memberikan kontribusi nyata dalam pengembangan ilmu pengetahuan dan teknologi 
                sesuai dengan perkembangan zaman melalui, kegiatan pendidikan, penelitian, dan 
                pengabdian kepada masyarakat yang bermutu dan berdaya saing global dengan 
                memanfaatkan teknologi informasi dan komunikasi.
            </li>
        </ol>

    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="PKKMB" role="tabpanel" aria-labelledby="PKKMB-tab">
        <h1 class="font-bold mb-4">ARTI LAMBANG UNIVERSITAS NAROTAMA</h1>
            <a href="/" class="">
                <img src="https://i.postimg.cc/QM3SxMKd/logo.png" class="w-48 justify-center mx-auto"/>
            </a>
                <ol class="list-disc ml-4">
                    <li class="font-bold">
                        Filosofi Logo
                    </li>
                    <p>
                        Huruf U dan N ditengah merupakan singkatan dari Universitas Narotama yang diambil 
                        dari Logo Universitas dengan warna Kuning Emas dan Biru Muda.
                    </p>
                    <li class="font-bold mt-2">
                        Filosofi Ring Logo
                    </li>
                    <p>
                        Ring yang memutari Logo UN menggambarkan keberagaman yang ada pada diri Panitia 
                        PKKMB untuk saling berkolaborasi dalam satu naungan Universitas Narotama sehingga 
                        nantinya mewujudkan kesatuan karya yang indah.
                    </p>
                </ol>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="Agenda" role="tabpanel" aria-labelledby="Agenda-tab">
        <h1 class="font-bold">AGENDA KEGIATAN</h1>
        <ul class="mt-4">
            <li class="font-bold">
                Technical Meeting PKKMB
            </li>
        </ul>
        <ol class="list-disc ml-6">
            <li>
                <div class="font-bold">WAKTU KEGIATAN</div>
            Hari & Tanggal : Jumat, 9 September 2022
            <p>Pukul          : 13.00 - 15.50 WIB</p>
            </li>
            <li>
                <div class="font-bold mt-2">TEMPAT KEGIATAN</div>
            Universitas Narotama Surabaya

            <p>Zoom Meeting(Online)</p>
            </li>
        </ol>
        <ul class="mt-4">
            <li class="font-bold">
                Pelaksanaan PKKMB
            </li>
        </ul>
        <ol class="list-disc ml-6">
            <li>
                <div class="font-bold">WAKTU KEGIATAN</div>
            Hari & Tanggal : Senin-Sabtu, 19-24 September 2022
            <p>Pukul          : 07.00 - 16.30 WIB</p>
            </li>
            <li>
                <div class="font-bold mt-2">TEMPAT KEGIATAN</div>
            Universitas Narotama Surabaya

            <p>Zoom Meeting(Online)</p>

            <p>Selasar Gedung E</p>

            <p>Djoko Soemadijo Hall</p>
            </li>
        </ol>    
    </div>
</div>
</section>
@endsection