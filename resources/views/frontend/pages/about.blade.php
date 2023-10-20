@extends('frontend.layouts.app')
@section('pageTitle','About Us')
@section('content')

    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/img/background/page-banner.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">About Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Client Logo area start -->
    {{-- <div class="client-logo-area py-75"
        style="background-image: url(/frontend/img/client-logo/client-logo-section-bg.jpg);">
        <div class="container">
            <div class="client-logo-wrap">
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo1.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo2.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo3.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo4.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo5.png" alt="Client Logo"></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Client Logo area end -->


    <!-- About area start -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-part">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image">
                                    <img src="/frontend/image1.jpeg" alt="About">
                                </div>
                                <div class="project-complete mb-30">
                                    <div class="project-complete__icon">
                                        <i class="flaticon-charity"></i>
                                    </div>
                                    <div class="project-complete__content">
                                        <h5>We Complate 10+ Project</h5>
                                        <span>Done for charity</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image mt-65 rmt-15 rel">
                                    <img src="/frontend/image2.jpeg" alt="About">
                                    <div class="experiences-years">
                                        <span class="experiences-years__number">5</span>
                                        <span class="experiences-years__text">Years Experiences</span>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="/frontend/image3.jpeg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-part rmt-65">
                        <div class="section-title">
                            <span class="section-title__subtitle mb-10">About us</span>
                            {{-- <h2>Empowering Northern Nigeria Through <span>Sustainable Initiatives</span></h2> --}}
                        </div>
                        <p>El-Habeeb, meaning “the beloved”, is a community-centric foundation that take its root name from enhancing community well-being through comprehensive WASH (Water, Sanitation & Hygiene) programs. Local communities and its “beloved” people are very dear to us, human dignity is paramount and we share in the extreme pains and challenges they face to access WASH as basic necessities. </p>
                        <p>Water, Sanitation, and Hygiene (WASH) are fundamental elements for human well-being and sustainable development. Access to clean water, improved sanitation facilities, and proper hygiene practices are essential for health, dignity, and economic prosperity. All our WASH programs are comprehensive and are aimed at improving the quality of life for communities in need.</p>
                        <div class="section-title">
                            <span class="section-title__subtitle mb-10">Our Vision</span>
                        </div>
                        <p>To create a world where every individual, regardless of their socio-economic background, has equitable access to clean water, improved sanitation, and proper hygiene, ensuring a healthier and more prosperous future for all.</p>
                        <div class="section-title">
                            <span class="section-title__subtitle mb-10">Our Mission</span>
                        </div>
                        <p>E-Habib Foundation is dedicated to addressing Water, Sanitation, and Hygiene (WASH) issues by implementing sustainable and community-centric solutions. Our mission is to: create positive changes in a community's access to safe water, sanitation, and hygiene practices, ultimately leading to improved health, well-being, and quality of life for all.</p>
                        <p>The primary objectives are to ensure access to clean and safe drinking water for our need-based target communities, improve sanitation facilities and hygiene practices to reduce the risk of waterborne diseases in these communities. To also promote community engagement and capacity-building for sustainable WASH management and enhance awareness and behavioral changes related to hygiene and sanitation practices.
                        </p>
                        <p>In collaborations with government agencies, non-governmental organizations (NGOs), donors, and local communities, we will go through successful implementation of our programming. Our partnerships will ensure access to resources, expertise, and a holistic approach to WASH.
                        </p>
                        <p>All our programs mainly target and focus on vulnerable and underserved communities, including rural areas, informal settlements, and schools, where WASH facilities are lacking or inadequate.
                        </p>

                       
                        <a class="btn ml-5 mt-25" href="{{ route('projects.all') }}">See Projects</a>
                    </div>
                </div>



                <div class="section-title">
                    <span class="section-title__subtitle mb-10">Our Key Programming</span>
                </div>
               <ul>
                <li>1. Water Supply: Drilling and maintenance of water wells. Installation of water purification systems. Establishment of water distribution points.
                </li>
                <li>2. Sanitation: Construction of improved latrines and toilets. Implementation of wastewater management solutions. Promotion of safe waste disposal practices.
                </li>
                <li>3. Hygiene Promotion: Hygiene education and awareness campaigns. Distribution of hygiene kits. Training of community health workers.
                </li>
                <li>4. Community Engagement: Formation of WASH committees for local management. Capacity-building workshops for sustainable operation and maintenance. Inclusion of women and marginalized groups in decision-making.
                </li>
                <li>5. Monitoring and Evaluation: Regular assessments of WASH infrastructure and practices. Feedback mechanisms for continuous improvement. Impact assessments to measure the program's effectiveness.
                </li>
                <li>6. Sustainability: Integration of WASH activities into local development plans. Collaboration with government agencies, NGOs, and other stakeholders. Promotion of income-generating activities related to WASH.
                </li>
               </ul>
            </div>
        </div>
    </div>
    <!-- About area end -->

@endsection