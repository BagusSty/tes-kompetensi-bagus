@extends('layouts.app')
@section('title', 'PT Petrokimia Kayaku Official Site')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row" style="padding: 20px 0 100px 0;">
                            <div class="col-md-6">
                                <div class="img-logo">
                                    <img src="{{ asset('images/17022020131323.png') }}" alt="" width="30%">
                                </div>
                            </div>
                            <div class="col-md-6 text">
                                <div class="text-title">
                                    <h1 class="title">Fenite</h1>
                                    <h1>Sang Pembasmi Hama-ahama</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="line-break">
    {{-- Statistic --}}
    <div class="product">
        <div class="statistic-title">
            <h2>Detail Produk</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="text-align: center; margin-bottom: 20px;">
                <img style="width: 100px" src="{{ asset('images/17022020131323.png') }}" alt="">
                <h3 class="jumlah-suara" style="font-weight: bold">Fenite 150 OD</h3>
                <span>( emamektin benzoat 75g/l; lufenuron 75g/l )</span>
                <br>
                <button type="button" class="btn btn-secondary btn-detail"><a
                        href="http://petrokayaku.com/content/produk/insektisida/119/FENITE-150-OD" target="_blank">Detail
                        Produk</a></button>
            </div>
            <div class="col-md-4 sub-title" style="border: 1px solid black">
                <h6 class="product-sub-title text-center" style="font-weight: bold">Deskripsi</h6>
                <p class="product-detail">Insektisida racun kontak dan lambung berbentuk pekatan yang dapat diemulsikan
                    berwarna cokelat muda untuk mengendalikan hama-hama penting pada tanaman kubis & bawang merah.</p>
            </div>
            <div class="col-md-4  sub-title" style="border: 1px solid black">
                <h6 class="product-sub-title text-center" style="font-weight: bold">Manfaat</h6>
                <p class="product-detail">Mengendalikan hama-hama penting pada tanaman cabai dan kubis</p>
            </div>
            <div class="col-md-4  sub-title" style="border: 1px solid black">
                <h6 class="product-sub-title text-center" style="font-weight: bold">Keunggulan</h6>
                <ol>
                    <li>
                        <p class="product-detail"> Cara kerja obat unik, ulat yang terpapar insektisida ini mengalami effect
                            stop feeding yaitu ulat tidak mau makan lagi</p>
                    </li>
                    <li>
                        <p class="product-detail">Double bahan aktif : Emamektin benzoat dan Iufenuron</p>
                    </li>
                    <li>
                        <p class="product-detail">Daya bunuh ulat lebih cepat</p>
                    </li>
                    <li>
                        <p class="product-detail">Aman untuk tanaman</p>
                    </li>
                    <li>
                        <p class="product-detail">Tidak menyebabkan resistensi.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <hr class="line-break">
    {{-- Kontak --}}
    <div class="description">
        <div class="row justify-content-center">
            <div class="title">
                <h2>Tentang Kami</h2>
            </div>
            <div class="col-md-12 desc">
                <p>PT Petrokimia Kayaku adalah Perusahaan yang bergerak di sektor agrokimia yang menghasilkan produk utama
                    berupa pestisida, pupuk hayati, probiotik ternak dan sejumlah produk lain. Produk-produk PT Petrokimia
                    Kayaku telah diakui sesuai Standar Internasional FAO - specified for plant protection products, sehingga
                    memenuhi standar keamanan bagi tanaman pertanian.

                    Komitmen PT Petrokimia Kayaku untuk senantiasa mendukung perkembangan sektor pertanian dan perkebunan di
                    Indonesia diwujudkan dengan pemanfaatan teknologi modern dalam proses produksinya, sehingga menghasilkan
                    produk yang berkualitas dan ramah lingkungan.</p>
            </div>
        </div>
    </div>
    <hr class="line-break">
    {{-- Description --}}
    <div class="description">
        <div class="row justify-content-center">
            <div class="title">
                <h2>Alamat Kami</h2>
            </div>
            <div class="col-md-6">
                <div class="title" style="font-weight: bold; text-align:left;">
                    Kantor Pusat :
                </div>
                <div class="desc">
                    <p> Jl. Jendral Ahmad Yani
                        Gresik 61119, Jawa Timur - Indonesia</p>
                    <p>Telepon (+6231) 3981815</p>
                    <p>Fax (+6231) 3981830</p>
                    <p> info@petrokayaku.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="title" style="font-weight: bold; text-align:left;">
                    Kantor Cabang :
                </div>
                <div class="desc">
                    <p> Jl. Jendral Ahmad Yani
                        Gresik 61119, Jawa Timur - Indonesia</p>
                    <p>Telepon (+6221) 7205453</p>
                    <p>Fax (+6221) 7251244</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="line-break">
    <div class="description">
        <div class="row justify-content-center">
            <div class="title">
                <h2>Pertanyaan</h2>
            </div>
            <div class="col-md-12 desc">
                <form action="">
                    <label style="font-weight: bold;">Pertanyaan</label>
                    <textarea name="" id="" cols="100%" rows="15"></textarea><br>
                    <label style="font-weight: bold;">Email</label>
                    <input type="email" name="" id="">
                    <button class="btn btn-submit" type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>
    <hr class="line-break">
    {{-- Footer --}}
    <footer class="footer mt-auto">
        {{-- Copyright --}}
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy; Bagus Setyo Nurcahyo 2023</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
