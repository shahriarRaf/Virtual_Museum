{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <title>About Section</title>
</head>
<body>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="tilte">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>this is histric mothe gdvmnmemf smnknvmkfmk msmnfwnkfkwk</h3>
                    <p>
                        The Euro-Mediterranean Human Rights Monitor reports that Israeli forces are intentionally destroying more schools and medical facilities during a ground invasion of the Zeitoun neighbourhood in Gaza City and Jabalia in northern Ga After the Israeli military withdrawal on Wednesday from Zeitoun – which was attacked for a third time – it revealed the destruction of Ain Jalut, Atta al-Shawa and Hassan al-Nakhalah schools, as well as the Zeitoun Medical Clinic, according to the Geneva-based organisationIn the Sabra neighbourhood in Gaza City, Israeli warplanes hit a four-story clinic run by UNRWA, the UN agency for Palestinian refugees.Israeli forces also bombed or opened fire on six UNRWA schools in Jabalia, according to the human rights group.
                    </p>
                    <div class="button">
                       <a href="">Read more</a>
                    </div>
                </div>
                <div class ="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>


                </div>
            </div>
            <div class ="image-section">
               <img src="/images/archelogical1.jpg">
            </div>
        </div>

    </div>
</body>
</html> --}}
@extends('layout')

@section('title', 'About Us')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@endpush

@section('content')
<div class="section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div class="content">
                <h3>This is historic...</h3>
                <p>
                    The Euro-Mediterranean Human Rights Monitor reports that Israeli forces are intentionally destroying more schools and medical facilities during a ground invasion of the Zeitoun neighbourhood in Gaza City and Jabalia in northern Gaza. After the Israeli military withdrawal on Wednesday from Zeitoun – which was attacked for a third time – it revealed the destruction of Ain Jalut, Atta al-Shawa and Hassan al-Nakhalah schools, as well as the Zeitoun Medical Clinic, according to the Geneva-based organisation. In the Sabra neighbourhood in Gaza City, Israeli warplanes hit a four-story clinic run by UNRWA, the UN agency for Palestinian refugees. Israeli forces also bombed or opened fire on six UNRWA schools in Jabalia, according to the human rights group.
                </p>
                <div class="button">
                    <a href="">Read more</a>
                </div>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="image-section">
            <img src="/images/archelogical1.jpg" alt="Archeological Site">
        </div>
    </div>
</div>
@endsection
