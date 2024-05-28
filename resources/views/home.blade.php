@extends('layout')
@section('title', "Home Page")
@section('content')
<header>
    <div class="logo"></div>
    <main>
        <section>
            <h3>Welcome To Bangladesh</h3><br>
            <h3>SERENITY'S EMBRACE: <span class="change_content"> </span> <span style="margin-top: -10px;"> INVITES.
                </span> </h3><br>
            <p>" Rich, Diverse, Ancient, Unearthed"</p>
        </section>
    </main>
</header>

   
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header');
    const animatedText = document.querySelector('.change_content');
    const mainSection = document.querySelector('main');

    const images = [
        "/images/SixTempleMosque.jpg",
        "/images/Mahasthangarh.jpg",
        "/images/PaharpurBuddhistMonastery.jpg",
        "/images/MainamatiRuins.jpeg",
        "/images/WariBateshwar.jpg"
    ];

    let currentIndex = 0;

    function changeBackground() {
        header.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)), url('${images[currentIndex]}')`;
    }

    function changeText() {
        const places = [
            "Sixty Dome Mosque",
            "Mahasthangarh",
            "Paharpur Buddhist Monastery",
            "Mainamati Ruins",
            "Wari-Bateshwar"
        ];
        animatedText.textContent = places[currentIndex];
        animatedText.style.color = "red";
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Initial call to change background and text
    changeBackground();
    changeText();

    // Set interval to change background and text every 10 seconds
    const intervalId = setInterval(function() {
        changeBackground();
        changeText();
    }, 3000);

    // Display the about section after the image has loaded
    window.onload = function() {
        document.getElementById("about-section").style.display = "block";
    };

    // Adjust main section position when navigation bar is clicked
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            clearInterval(intervalId); // Stop the interval
            changeBackground(); // Change background immediately
            changeText(); // Change text immediately
            mainSection.style.top = `${header.offsetHeight}px`; // Adjust top position of main section
        });
    });
});


</script>


@endsection




