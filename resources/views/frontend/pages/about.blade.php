@extends('frontend.layouts.app')
@section('pageTitle','About Us')
@section('content')
<section class="page-title-area" style="background-image:url('/frontend/banner1.jpeg')">
    <div class="container">
      <div class="title-area-data">
        <h2>Who we are</h2>
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('homepage') }}">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
          <li class="breadcrumb-item active" aria-current="page">Who We Are</li>
      </ol>
    </div>
  </section>

<section class="gap">
  <div class="container">
    <div class="event-details hoverimg">
      <figure>
        <img alt="img" src="/frontend/banner3.jpeg" height="590" width="1290">
      </figure>
      <div class="event-details-text p-100">
       
        <h2>Mujaddadi Care Foundation: Transforming Lives and Communities</h2>
        <div class="row pt-4 pb-4 align-items-center">
   
          <div class="col-lg-6">
            <div class="organizer">
             <img alt="man" src="/garkuwa.jpeg" width="90" height="90">
              <div>
                <h4>Amb. Faruk Mailambu Waziri</h4>
                <h6>Convener</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="organizer">
             <img alt="man" src="/gidado.jpeg" width="90" height="90">
              <div>
                <h4>Gidado Ishaq Muhammad</h4>
                <h6>Program Manager</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <p class="pt-4 pb-4">In the heart of our community, where the noble ideals of reform and compassionate care converge, the "Mujaddadi Care Foundation" emerges as a transformative force. This foundation draws its inspiration from Senator Shehu Buba, a name synonymous with reform and progress, whose unwavering commitment has illuminated our community's path towards a brighter future. With a resolute focus on healthcare and education, Senator Buba's journey from humble beginnings to an advocate for change reflects the core values of compassion and integrity.<br><br>

            </p>
          </div>
          <div class="col-lg-5">
            <div class="event-img-two ">
              <figure>
                <img alt="img" src="/frontend/senator2.jpeg" width="440" height="460">
              </figure>
            </div>
          </div>
          <div class="col-lg-7 ps-sm-5">
            <h5>Pioneering Healthcare Reform</h5>
            <p class="pb-4">Healthcare has been a pivotal focal point in Senator Buba's endeavors. He recognized the challenges faced by many in accessing quality medical care and, with unwavering determination, worked tirelessly to bridge these gaps. His advocacy for improved health facilities, equitable distribution of medical supplies, and health awareness campaigns have made a profound impact on countless lives. Through his actions, the silent humanitarian has sown seeds of hope and healing.

            </p>
            {{-- <ul class="team-list">
            <li><i class="fa-regular fa-circle-check"></i>Watch the Bathroom Sessions</li>
            <li><i class="fa-regular fa-circle-check"></i>Find everything you need to get fundraising from the comfort </li>
            <li><i class="fa-regular fa-circle-check"></i>Order a personalised present</li>
            <li><i class="fa-regular fa-circle-check"></i>What have you given today.</li>
            </ul> --}}
          </div>
        </div>
        <div class="youtube-video mt-5 mb-5 hoverimg">
            <a data-fancybox="" href="https://www.youtube.com/watch?v=1La4QzGeaaQ"><i>
              <svg enable-background="new 0 0 437.499 437.499" height="512" viewBox="0 0 437.499 437.499" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m46.875 437.498c-2.67 0-5.341-.687-7.751-2.06-4.868-2.777-7.874-7.95-7.874-13.566v-406.27c0-5.616 3.006-10.789 7.874-13.566 4.913-2.762 10.88-2.701 15.701.107l343.749 203.136c4.761 2.823 7.675 7.935 7.675 13.459s-2.914 10.636-7.675 13.459l-343.749 203.135c-2.457 1.435-5.204 2.167-7.95 2.166zm15.625-394.521v351.521l297.409-175.76z"></path></svg>
            </i></a>
            <figure>
              <img alt="img" src="/frontend/banner4.jpeg">
            </figure>
        </div>
        <h4>Empowering Minds through Education</h4>
        <p>In tandem with his dedication to healthcare, Senator Buba also recognizes the transformative power of education in shaping the future. With a vision to empower the next generation, he has championed various educational initiatives. From supporting scholarships to fostering vocational training programs, his commitment to educational reform is nothing short of inspiring. Every step he takes is a testament to his belief that education is the cornerstone of progress.</p>
        <div class="obviously">
          <h3>Reform is not a destination; it's a continuous journey toward a better tomorrow." - Senator Shehu Buba</h3>
        </div>
        <div class="row pt-4">
          <div class="col-lg-4 col-md-4 col-sm-6 hoverimg">
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/senator.jpeg" width="349" height="251">
              </figure>
            </div>
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/image1.jpeg" width="349" height="251">
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/image2.jpeg" width="349" height="251">
              </figure>
            </div>
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/image3.jpeg" width="349" height="365">
              </figure>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/image4.jpeg" width="349" height="251">
              </figure>
            </div>
            <div class="event-details-img">
              <figure>
                <img alt="img" class="w-100" src="/frontend/image5.jpeg" width="349" height="365">
              </figure>
            </div>
          </div>
        </div>
        <h5>Purpose, Vision, and Mission of the Mujaddadi Care Foundation</h5>

        <h6>Purpose:</h6>
        
        <p> Mujaddadi Care Foundation embarks on a purpose-driven mission to uplift and empower our community in the domains of healthcare and education. Guided by the indomitable spirit of Senator Shehu Buba, our purpose transcends boundaries to touch the lives of the vulnerable and bring positive change to the forefront.</p>
        
        Vision:
        
      <p> Our vision is crystal clear - to create a society where every individual has access to quality healthcare and equitable education opportunities. We envision a future where the well-being of the community flourishes, nurtured by compassion, innovation, and reform.</p>
        
      <h6>Mission:</h6>
        
      <p>With the legacy of Senator Shehu Buba as our compass, our mission unfolds in threefold:
        
        Reforming Healthcare: We aim to bridge the healthcare divide by introducing modern technology, offering medical services to the underserved, and spreading awareness about preventive care. The foundation is committed to transforming healthcare, making it accessible to all, regardless of social or economic status.
        
        Empowering Education: We believe that education is the cornerstone of progress. Through scholarships, vocational training, and technology-driven learning platforms, we empower minds to dream, aspire, and achieve their fullest potential. Our mission is to unlock the doors of education for every eager soul.
        
        Compassionate Care: At the heart of our foundation lies the spirit of compassion. We reach out to the communities, engage in sensitization campaigns, and extend a caring hand to those in need. Our initiatives are not just programs; they are a testament to the empathy that fuels our endeavors.</p>
      <h4 class="pt-4"> Embodying the Essence of Senator Buba's Vision</h4>
        <p>
          Embodying the essence of Senator Buba's vision, the Mujaddadi Care Foundation stands resolute, channeling our collective energy towards the betterment of the community we cherish. Each endeavor is an embodiment of our commitment to care, upliftment, and progress.
        </p>
        <div class="share-post-icon mt-5">
          <h6>Share Post:</h6>
          <ul class="social-media-icon full">
              <li>
                  <a href="#" id="facebook-share">
                      <i class="fab fa-facebook-f icon"></i>
                  </a>
              </li>
              <li>
                  <a href="#" id="twitter-share">
                      <i class="fab fa-twitter icon"></i>
                  </a>
              </li>
              <li>
                  <a href="#" id="google-share">
                      <i class="fab fa-google-plus-g icon"></i>
                  </a>
              </li>
          </ul>
      </div>
      
      <script>
          // Get the current page URL
          const currentURL = window.location.href;
      
          // Update the href attributes with the current URL
          document.getElementById('facebook-share').href = `https://www.facebook.com/sharer/sharer.php?u=${currentURL}`;
          document.getElementById('twitter-share').href = `https://twitter.com/intent/tweet?url=${currentURL}`;
          document.getElementById('google-share').href = `https://plus.google.com/share?url=${currentURL}`;
      </script>
      
    </div>
  </div>
</section>

@endsection