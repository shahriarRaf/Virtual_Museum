@extends('layout')

@section('title', 'Gallery')

@section('content')
<style>
    body {
        background-color:burlywood; /* Change the background color as desired */
    }
  </style>
    <div class="container">
       {{--  <h1>Gallery</h1> --}}
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ route('sixTemple') }}">
                        <img src="/images/SixTempleMosque.jpg" class="card-img-top" alt="Sixty Dome Mosque">
                    </a>
                    
                    <div class="card-body">
                        <h5 class="card-title">Sixty Dome Mosque</h5>
                        <div class="card-text-wrapper">
                            <div class="card-text">
                                <p>The Sixty Dome Mosque, is a mosque in Bagerhat, Bangladesh. It is a part of the Mosque City of Bagerhat, a UNESCO World Heritage Site. It is the largest mosque in Bangladesh from the sultanate period. It was built during the Bengal Sultanate by Khan Jahan Ali, the governor of the Sundarbans.</p>
                            </div>
                            <div class="show-more">
                                <a href="#" class="btn btn-link">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ route('mahasthangarh') }}"> <!-- Change 'mahasthangarh' to your actual route name -->
                        <img src="/images/Mahasthangarh.jpg" class="card-img-top" alt="Mahasthangarh">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Mahasthangarh</h5>
                        <div class="card-text-wrapper">
                            <div class="card-text">
                                <p>Mahasthangarh is one of the earliest urban archaeological sites discovered thus far in Bangladesh. The village Mahasthan in Shibganj upazila of Bogra District contains the remains of an ancient city which was called Pundranagara or Paundravardhanapura in the territory of Pundravardhana.</p>
                            </div>
                            <div class="show-more">
                                <a href="#" class="btn btn-link">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{route('mainnamatiRuins')}}">
                        <img src="/images/MainamatiRuins.jpeg" class="card-img-top" alt="Mainnamati Ruins">
                    </a>
                    
                    <div class="card-body">
                        <h5 class="card-title">Mainnamati Ruins</h5>
                        <div class="card-text-wrapper">
                            <div class="card-text">
                                <p>Shalban Bihar (Sanskrit; Bengali: শালবন বিহার Shalban Bihar) is an archaeological site in Moinamoti, Comilla, Bangladesh. The ruins are in the middle of the Lalmai hills ridge, and these are of a 7th-century Paharpur-style Buddhist Bihar with 115 cells for monks. It operated through the 12th century.</p>
                            </div>
                            <div class="show-more">
                                <a href="#" class="btn btn-link">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{route('paharpurBuddhistMonastery')}}">
                        <img src="/images/PaharpurBuddhistMonastery.jpg" class="card-img-top" alt="Paharpur Buddhist Monastery">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Paharpur Buddhist Monastery</h5>
                        <div class="card-text-wrapper">
                            <div class="card-text">
                                <p>Somapura Mahavihara or Paharpur Buddhist Vihara in Paharpur, Badalgachhi, Naogaon, Bangladesh is among the best known Buddhist viharas or monasteries in the Indian Subcontinent and is one of the most important archaeological sites in the country. It was designated as a UNESCO World Heritage Site in 1985.</p>
                            </div>
                            <div class="show-more">
                                <a href="#" class="btn btn-link">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{route('wariBateshwar')}}">    
                      <img src="/images/WariBateshwar.jpg" class="card-img-top" alt="Wari-Bateshwar">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Wari-Bateshwar</h5>
                        <div class="card-text-wrapper">
                            <div class="card-text">
                                <p>The Wari-Bateshwar (Bengali: উয়ারী-বটেশ্বর,Uari-Bôṭeshshor) ruins in Narsingdi, Dhaka Division, Bangladesh is one of the oldest urban archaeological sites in Bangladesh. Excavation in the site unearthed a fortified urban center, paved roads and suburban dwelling. The site was primarily occupied during the Iron Age, from 400 to 100 BCE, as evidenced by the abundance of punch-marked coins and Northern Black Polished Ware (NBPW) artifacts.</p>
                            </div>
                            <div class="show-more">
                                <a href="#" class="btn btn-link">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const showMoreLinks = document.querySelectorAll('.show-more a');
    showMoreLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const cardText = this.closest('.card-body').querySelector('.card-text');
            const isExpanded = cardText.classList.toggle('expanded');
            if (isExpanded) {
                // If expanding, show all text
                cardText.textContent = cardText.dataset.originalText;
                this.textContent = 'Show less';
            } else {
                // If collapsing, show only truncated text
                cardText.textContent = cardText.dataset.originalText.substring(0, 20) + '...'; // Truncate to 200 characters
                this.textContent = 'Show more';
            }
        });
    });

    // Save original text to data attribute
    const cardTexts = document.querySelectorAll('.card-text');
    cardTexts.forEach(text => {
        text.dataset.originalText = text.textContent.trim();
        // Truncate text if it's longer than 200 characters initially
        if (text.textContent.trim().length > 20) {
            text.textContent = text.textContent.trim().substring(0, 20) + '...';
            text.closest('.card-body').querySelector('.show-more a').style.display = 'block'; // Display "Show more" link
        }
    });
});

    </script>
@endsection



