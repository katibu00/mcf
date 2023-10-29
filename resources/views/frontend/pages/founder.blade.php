@extends('frontend.layouts.app')
@section('pageTitle', 'Our Founder')
@section('content')
    <section class="page-title-area" style="background-image:url('/frontend/banner1.jpeg')">
        <div class="container">
            <div class="title-area-data">
                <h2>Our Founder</h2>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                <li class="breadcrumb-item active" aria-current="page">Our Founder</li>
            </ol>
        </div>
    </section>


    <section class="gap no-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="team-img">
                        <img alt="img" src="/frontend/senator2.jpeg" width="669" height="526">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="team-data-page">
                        <h2>Senator Shehu Buba</h2>
                        <span>Founder and Donor - Mujaddadi Care Foundation</span>
                        {{-- <div class="contact-info mt-4">
              <i>
                <svg height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m12 22c-.3632813 0-.6972656-.1967773-.8740234-.5141602l-2.3066406-4.1518555c-2.897461-1.2597655-4.819336-4.1606445-4.819336-7.3339843 0-4.4111328 3.5888672-8 8-8s8 3.5888672 8 8c0 3.1733398-1.921875 6.0742188-4.8193359 7.3339844l-2.3066406 4.1518555c-.1767579.3173828-.5107422.5141601-.8740235.5141601zm0-18c-3.3085938 0-6 2.6914063-6 6 0 2.4736328 1.5576172 4.7265625 3.8769531 5.605957.2207031.0839844.4052734.2431641.5195313.4492188l1.6035156 2.8857422 1.6035156-2.8857422c.1142578-.2060547.2988281-.3652344.5195313-.4492188 2.3193359-.8793945 3.8769531-3.1323242 3.8769531-5.605957 0-3.3085937-2.6914062-6-6-6zm0 9c-1.6542969 0-3-1.3457031-3-3s1.3457031-3 3-3 3 1.3457031 3 3-1.3457031 3-3 3zm0-4c-.5517578 0-1 .4487305-1 1s.4482422 1 1 1 1-.4487305 1-1-.4482422-1-1-1z"/></g></svg>
              </i>
              <h5>1199 N. Fairfax St. Suite 300<br> Alexandria, VA 22314</h5>
            </div> --}}
                        {{-- <div class="contact-info mt-3">
              <i>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M437.15,74.817C388.895,26.571,324.561,0,256,0C187.587,0,123.279,26.65,74.92,75.041
                      C26.559,123.435-0.048,187.766,0,256.184c0.048,68.507,27.005,132.938,75.905,181.425C124.335,485.629,188.219,512,255.997,512
                      c0.677,0,1.357-0.002,2.035-0.008c44.288-0.345,87.858-12.192,126.001-34.262l-15.024-25.967
                      c-33.653,19.472-72.109,29.925-111.21,30.23c-60.48,0.456-117.575-22.858-160.77-65.688C53.847,373.49,30.043,316.616,30,256.163
                      C29.958,195.762,53.447,138.97,96.141,96.247C138.832,53.527,195.605,30,256,30c124.595,0,225.979,101.365,226,225.959
                      c0.008,49.387-15.621,96.298-45.198,135.661c-2.573,3.424-6.37,5.478-10.692,5.784c-4.368,0.308-8.658-1.291-11.756-4.388
                      l-20.406-20.406l9.06-9.06l-70.711-70.711l-28.284,28.284c-58.885-7.935-105.202-54.252-113.137-113.137l28.284-28.284
                      l-70.711-70.711l-39.054,39.054c-3.826,66.249,19.552,133.776,70.167,184.391s118.142,73.993,184.391,70.167l8.782-8.781
                      l20.406,20.406c9.247,9.247,22.033,14.022,35.082,13.1c12.935-0.913,24.803-7.36,32.563-17.688
                      C494.3,365.039,512.01,311.895,512,255.954C511.988,187.393,485.406,123.064,437.15,74.817z"/>
                </svg>
              </i>
              <h5>Phone:</h5><a href="callto:800-836-4620">800-836-4620</a>
            </div> --}}
                        <div class="contact-info mt-3">
                            <i>
                                <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 34">
                                        <path
                                            d="m30 9v14a3 3 0 0 1 -3 3h-22a3 3 0 0 1 -3-3v-14a2.87 2.87 0 0 1 .19-1l12.15 8.1a3 3 0 0 0 3.32 0l12.15-8.1a2.87 2.87 0 0 1 .19 1zm-13.45 5.43 12-8a3 3 0 0 0 -1.55-.43h-22a3 3 0 0 0 -1.54.44l12 8a1 1 0 0 0 1.09-.01z" />
                                    </g>
                                </svg>
                            </i>
                            <h5>Email:</h5><a href="mailto:info@mujaddifoundation.com">info@mujaddifoundation.com</a>
                        </div>
                        <div class="share-post-icon mt-4 pt-3">
                            <a href="#" class="btn m-0"><span>Send Message</span></a>
                            <ul class="social-media-icon full ms-4">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f icon"></i> </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gap no-top">
        <div class="container">
            <div class="details-or-information">
                <h3>The Early Years and Educational Pursuits</h3>
                <p class="pb-5">
                    Senator Shehu Buba: A Visionary Leader's Humble Beginnings<br>

                    Born in 1977 in Bauchi state, Nigeria, Senator Shehu Buba's journey toward becoming a prominent
                    politician and philanthropist began with humble roots. His primary and secondary education was obtained
                    in his hometown, setting the foundation for his lifelong commitment to education and positive
                    change.<br><br>

                    Seeking to expand his knowledge and impact, Senator Buba embarked on a remarkable educational journey.
                    He enrolled in the prestigious Ahmadu Bello University in Zaria, where he pursued a degree in Adult
                    Education. This early academic choice revealed his dedication to learning and laid the groundwork for
                    his future role as a reformer and educator.<br><br>

                    After completing his degree at Ahmadu Bello University, Senator Buba's unwavering commitment to
                    education led him to earn a bachelor's degree in Education from the University of Jos. Although he was
                    unable to serve as a formal educator due to age restrictions, his passion for education continued to
                    shine through his philanthropic endeavors and initiatives to uplift the underprivileged through
                    scholarships and vocational training programs.
                </p>
            </div>
            <div class="details-or-information">
                <h3>Champion of Healthcare and Education</h3>
                <p class="pb-5">
                    Senator Shehu Buba: Bridging Gaps and Alleviating Suffering<br>

                    Beyond his educational journey, Senator Buba's identity extends beyond being a politician. He emerged as
                    a true humanitarian who silently worked behind the scenes, extending lifelines of hope without seeking
                    recognition. His commitment to the well-being of his constituents, especially in the domains of
                    healthcare and education, made a profound impact on the lives of countless individuals.<br><br>

                    Senator Buba recognized the challenges faced by many in accessing quality medical care. His tireless
                    efforts led to advocacy for improved health facilities, medical supplies distribution, and health
                    awareness campaigns. His work bridged the gaps in healthcare access, leaving a lasting mark on the
                    healthcare landscape of his community and improving the lives of many.<br><br>

                    Equally passionate about education, Senator Buba's vision was to empower the next generation. He
                    championed initiatives that nurtured young minds, offering scholarships and vocational training
                    programs. His commitment to educational reform provided aspiring individuals with opportunities to
                    pursue their dreams and aspirations, breaking down barriers created by poverty and social inequality.


                </p>
            </div>
            <div class="details-or-information">
                <h3>The Mujaddadi Care Foundation: Honoring a Visionary Leader's Legacy</h3>
                <p class="pb-5">
                    Senator Shehu Buba: Inspiring a Future of Compassion and Reform<br>

                    The creation of the Mujaddadi Care Foundation stands as a testament to Senator Buba's dedication to
                    uplifting lives. The foundation embodies his vision of a reformed society where healthcare and education
                    serve as transformative catalysts. Through innovative solutions, technology integration, and strategic
                    collaborations, the foundation aims to unlock the potential of the community, empowering them with
                    health, knowledge, and hope.<br><br>

                    Senator Shehu Buba's selfless efforts and commitment to the betterment of society continue to inspire
                    and guide the work of the Mujaddadi Care Foundation. With his legacy as a true reformer, the foundation
                    is on a transformative path, building on his vision and honoring his identity as a visionary leader and
                    philanthropist. Together, they strive to sow the seeds of positive change that will flourish for
                    generations to come.
                </p>
            </div>

            <div class="row mt-lg-5 align-items-center">
                <div class="col-lg-6">
                    <div class="heading two">
                        <p>how can we help?</p>
                        <h2>Have Any Questions Please Feel Free to Contact!</h2>
                    </div>
                    {{-- <div class="team-info volunteer-for">
                  <ul>
                  <li>A stream side litter clean-up</li>
                  <li>storm drain stenciling</li>
                  <li>a tree planting event</li>
                  <li>installing a dog waste station in a public area</li>
                  <li>plant a rain garden or install a rain barrel</li>
                </ul>
              </div> --}}
                </div>
                <div class="col-lg-6">
                    <form class="teme-from">
                        <input type="text" name="name" placeholder="Complete Name">
                        <input type="text" name="Email" placeholder="Email Address">
                        <input type="number" name="Phone" placeholder="Phone No">
                        <textarea placeholder="Question"></textarea>
                        <button class="btn"><span>Send Message</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
