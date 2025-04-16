<?php
$title = 'Home';

// Use output buffering to capture the content
ob_start();
?>

<!-- hero section -->
<div class="swiper hero-swiper max-w-[90vw]">
    <div class="swiper-wrapper mt-[90px] md:mt-[100px]">

        <!-- hero slide 1 -->
        <div class="swiper-slide relative rounded-xl overflow-hidden">
            <div
                class="flex items-center relative overflow-hidden bg-[url('/public/img/jumbo-trons/slide1.jpg')] bg-cover md:bg-center bg-[100%] lg:p-12 p-6 min-h-[55vh] lg:min-h-[84vh]">

                <!-- gradient -->
                <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-br from-primary z-0"></div>
                <div>
                    <div class="relative z-10">
                        <h1 class="font-extrabold text-2xl md:text-7xl">
                            <span class="text-white">PT.EQUINOX</span> <br>
                            <span class="text-third">BAHARI UTAMA </span><br>
                            <span class="text-secondary">CRUISE</span>
                        </h1>


                        <p class="text-md text-white w-[50%]">
                            <span class="">Equinox Bahari Utama Cruise</span><br>Official hiring
                            partner of
                            <span class="font-bold">Royal Caribbean Group</span>
                        </p>
                    </div>

                    <div class="flex items-center space-x-4 py-4 text-sm md:text-lg relative z-10">
                        <a href="https://jobs.equinoxshipping.co.id/cruise"
                            class="px-3 py-2 bg-third text-white rounded-3xl hover:bg-secondary">
                            Apply now
                        </a>
                        <a href="contact" class="px-3 py-2 bg-third text-white rounded-3xl hover:bg-secondary">
                            Partner with us
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- hero slide 2 -->
        <div class="swiper-slide relative rounded-xl overflow-hidden">
            <div
                class="flex items-center relative overflow-hidden bg-[url('/public/img/jumbo-trons/slide2.jpg')] bg-cover md:bg-center bg-[60%] lg:p-12 p-6 min-h-[55vh] lg:min-h-[84vh]">

                <!-- gradient -->
                <!-- <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-br from-primary z-0"></div> -->
                <div>
                    <div class="relative z-10">

                        <h1 class="font-extrabold text-2xl md:text-7xl">
                            <span class="text-white">EXCLUSIVE</span><br>
                            <span class="text-third">BRAND</span><br>
                            <span class="text-secondary">AMBASSADOR</span>
                        </h1>

                        <p class="text-sm text-white max-w-[50%]">
                            <span class="block font-bold">Meet Mr.Hariri Sulaiman</span>
                            <span class="block">The First Indonesian 2nd Officer in Royal Caribbean Group</span>

                        </p>
                    </div>

                    <div class="flex items-center space-x-4 py-4 text-sm md:text-lg relative z-10">
                        <a href="hariri" class="px-3 py-2 bg-third text-white rounded-3xl hover:bg-secondary">
                            About Mr.Hariri Sulaiman
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- hero section -->

<!-- intro section -->
<div class="max-w-[90vw] mx-auto my-10 lg:mt-16 rounded-xl overflow-hidden
    ">
    <div class="md:flex md:items-center md:h-[70vh] bg-primary w-full border-y-8 border-third">
        <div class="p-8 md:w-1/2 md:flex flex-col items-center">
            <h1 class="font-extrabold text-3xl lg:text-6xl text-center text-white"><span>WE HELP PEOPLE</span>
                <br> <span class="text-third">ACHIEVE THEIR</span>
                <br> <span class="text-secondary">DREAMS</span>
            </h1>
            <hr class="my-4">
            <p class="text-white text-xl mb-6">
                We help Indonesians achieve their dream jobs on cruise ships, providing access to global
                opportunities,
                personal and professional growth, and a pathway to a brighter and more prosperous future for
                themselves
                and their families.
            </p>
            <a href="about"
                class="hidden md:block text-center w-fit text-white p-2 rounded-xl hover:bg-secondary bg-third">About
                Equinox Cruise</a>
        </div>
        <div class="relative h-full md:w-1/2">
            <img class="object-cover mx-auto w-full h-full" src="public/img/crew/crew1.jpg" alt="">
        </div>
    </div>
</div>
<!-- intro section -->

<!-- hiring partner section -->
<div class="max-w-[90vw] mx-auto relative my-10 rounded-xl overflow-hidden animate-slide-up lg:max-h-[80vh]">

    <div class="flex flex-col items-center md:gap-y-4 justify-center absolute w-full h-full top-0">

        <img class="size-14 md:size-32 border-2 border-third rounded-full"
            src="public/img/assets/brands-logo/rcl-logo-circle.png" alt="" srcset="">

        <h1 class="text-center text-xl md:text-6xl text-white font-bold uppercase">Official Hiring partner Of <br>
            <span
                class="text-xl md:text-5xl p-4 text-center font-extrabold from-pink-500 to-yellow-600 bg-gradient-to-r bg-clip-text text-transparent">Royal
                Caribbean Group</span>
        </h1>

        <div class="flex space-x-4 items-center justify-center py-1 px-4 bg-slate-50 rounded-xl">
            <img class="w-[20px] md:w-[100px]" src="public/img/assets/brands-logo/royal-logo.png" alt="" srcset="">
            <img class="w-[20px] md:w-[100px]" src="public/img/assets/brands-logo/celebrity-logo.png" alt="" srcset="">
            <img class="w-[20px] md:w-[100px]" src="public/img/assets/brands-logo/silversea-logo.png" alt="" srcset="">
            <img class="w-[20px] md:w-[100px]" src="public/img/assets/brands-logo/tui-logo.png" alt="" srcset="">
            <img class="w-[20px] md:w-[100px]" src="public/img/assets/brands-logo/hapag-logo.png" alt="" srcset="">
        </div>

    </div>

    <video playsinline muted class="video-hp" src="public/img/video/icon-intro-video.mp4"></video>
</div>
<!-- hiring partner section -->


<!-- statictic -->
<div class="max-w-[90vw] mx-auto md:min-h-[80vh] relative overflow-hidden rounded-xl px-6 py-12 bg-[url('/public/img/ships/ship2.jpg')] bg-cover bg-right
        ">

    <!-- gradient -->
    <div class="absolute top-0 left-0 w-full h-full bg-primary opacity-50"></div>

    <!-- content -->
    <div class="relative">
        <h1 class="text-xl md:text-6xl font-extrabold uppercase text-center text-white">
            Crew Departure Statistics
            <span class="text-secondary">By Department</span>
        </h1>
        <p class="text-center text-white lg:text-xl">We have deployed total <strong>4.500+</strong> crew members
            onboard form
            various departmnents like
            Culinary,F&B,Housekeeping and Marine.</p>
    </div>
    <div class="hidden md:flex justify-center flex-wrap md:p-6 mx-6 my-4 gap-x-6 gap-y-6">

        <!-- department card -->
        <div
            class="relative flex flex-col justify-end w-[240px] h-[400px] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/1.png')] bg-cover bg-top transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
            <div class="relative">
                <h1 class="text-4xl font-extrabold text-third">1,613+</h1>
                <p class="text-white font-bold text-xl">Culinary</p>
            </div>

        </div>
        <!-- department card -->
        <div
            class="relative flex flex-col justify-end w-[240px] h-[400px] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/3.png')] bg-cover bg-top transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
            <div class="relative">
                <h1 class="text-4xl font-extrabold text-third">1,463+</h1>
                <p class="text-white font-bold text-xl">F&B Services</p>
            </div>

        </div>
        <!-- department card -->
        <div
            class="relative flex flex-col justify-end w-[240px] h-[400px] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/4.png')] bg-cover bg-top transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
            <div class="relative">
                <h1 class="text-4xl font-extrabold text-third">1.158+</h1>
                <p class="text-white font-bold text-xl">Housekeeping</p>
            </div>

        </div>
        <!-- department card -->
        <div
            class="relative flex flex-col justify-end w-[240px] h-[400px] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/5.png')] bg-cover bg-top transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
            <div class="relative">
                <h1 class="text-4xl font-extrabold text-third">548+</h1>
                <p class="text-white font-bold text-xl">Others</p>
            </div>

        </div>


    </div>

</div>
<!--  -->
<div class="animate-slide-up flex md:hidden justify-between flex-wrap mx-6 my-4 gap-y-4">

    <!-- department card -->
    <div
        class="relative flex flex-col justify-end w-[48%] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/1.png')] bg-cover bg-top h-64 transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
        <div class="relative">
            <h1 class="text-4xl font-extrabold text-third">1.920</h1>
            <p class="text-white font-bold text-xl">Culinary</p>
        </div>

    </div>
    <!-- department card -->
    <div
        class="relative flex flex-col justify-end w-[48%] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/3.png')] bg-cover bg-top h-64 transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
        <div class="relative">
            <h1 class="text-4xl font-extrabold text-third">1.712</h1>
            <p class="text-white font-bold text-xl">F&B Services</p>
        </div>

    </div>
    <!-- department card -->
    <div
        class="relative flex flex-col justify-end w-[48%] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/4.png')] bg-cover bg-top h-64 transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
        <div class="relative">
            <h1 class="text-4xl font-extrabold text-third">1.571</h1>
            <p class="text-white font-bold text-xl">Housekeeping</p>
        </div>

    </div>
    <!-- department card -->
    <div
        class="relative flex flex-col justify-end w-[48%] rounded-xl overflow-hidden p-4 bg-[url('/public/img/department/5.png')] bg-cover bg-top h-64 transition-transform duration-500 ease-in-out scale-100 hover:scale-95">

        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
        <div class="relative">
            <h1 class="text-4xl font-extrabold text-third">1.436</h1>
            <p class="text-white font-bold text-xl">Others</p>
        </div>

    </div>


</div>
<!-- statictic -->

<!-- our service -->
<div class=" animate-slide-up relative mt-12 bg-primary py-6 md:px-6
    ">
    <h1 class="text-3xl md:text-5xl md:my-10 font-extrabold text-third mb-4 text-center uppercase">Our Services</h1>
    <div class="swiper default-carousel max-w-[90vw]">
        <div class="swiper-wrapper mb-10">

            <!-- recruitment card -->
            <div onclick="window.location.href='crewing-services#recruitment'"
                class="services-card swiper-slide cursor-pointer">
                <div class=" rounded-2xl h-[520px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-2/3 w-full p-6 space-y-5">
                        <h1 class="text-lg text-secondary">Learn More</h1>
                        <h2 class="text-2xl font-extrabold text-primary uppercase">
                            recruitment
                        </h2>
                        <p class="text-primary">We specialize in sourcing and hiring qualified candidates for
                            various positions in the cruise industry</p>
                        <i class="services-arrow top-2 rounded-full border-2 border-slate-700 right-5 absolute"
                            data-feather="arrow-right"></i>
                    </div>
                    <div
                        class="services-card-bg h-1/2 w-full bg-[url('/public/img/services/recruitment.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- visa card -->
            <div onclick="window.location.href='crewing-services#document'"
                class="services-card swiper-slide bg-secondary rounded-xl cursor-pointer">
                <div class=" rounded-2xl h-[520px] flex flex-col justify-center items-center overflow-hidden">
                    <div class="h-2/3 w-full p-6 space-y-5">
                        <h1 class="text-lg text-white">Learn More</h1>
                        <h2 class="text-2xl font-extrabold text-primary uppercase">
                            visa assistance
                        </h2>
                        <p class="text-white text-lg">We provide guidance and support in obtaining the required
                            visas for
                            your cruise ship employment, ensuring compliance with international regulations.</p>
                        <i class="services-arrow top-2 rounded-full border-2 border-slate-700 right-5 absolute"
                            data-feather="arrow-right"></i>
                    </div>
                    <div
                        class="services-card-bg h-1/3 w-full bg-[url('/public/img/services/visa.png')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- document card -->
            <div onclick="window.location.href='crewing-services#visa'"
                class="services-card swiper-slide cursor-pointer">
                <div class=" rounded-2xl h-[520px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-2/3 w-full p-6 space-y-5">
                        <h1 class="text-lg text-secondary">Learn More</h1>
                        <h2 class="text-2xl font-extrabold text-primary uppercase">
                            Document assistance
                        </h2>
                        <p class="text-primary">We help process essential maritime documents like passports,
                            seaman's books, STCW certificates, and more.
                        </p>
                        <i class=" services-arrow top-2 rounded-full border-2 border-slate-700 right-5 absolute"
                            data-feather="arrow-right"></i>
                    </div>
                    <div
                        class="services-card-bg h-1/2 w-full bg-[url('/public/img/services/document.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- deployement card -->
            <div onclick="window.location.href='crewing-services#deployment'"
                class="services-card swiper-slide cursor-pointer">
                <div class=" rounded-2xl h-[520px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-2/3 w-full p-6 space-y-5 bg-secondary">
                        <h1 class="text-lg text-white">Learn More</h1>
                        <h2 class="text-2xl font-extrabold text-primary uppercase">
                            Deployment
                        </h2>
                        <p class="text-white text-lg">We handle all logistics for your deployment, including travel
                            arrangements, documentation, and pre-departure orientation, ensuring a smooth transition
                            to your new role.</p>
                        <i class="services-arrow top-2 rounded-full border-2 border-slate-700 right-5 absolute"
                            data-feather="arrow-right"></i>
                    </div>
                    <div
                        class="services-card-bg h-1/2 w-full bg-[url('/public/img/services/deployment.jpg')] bg-cover bg-bottom">

                    </div>

                </div>
            </div>

        </div>
        <div class="flex items-center gap-8 lg:justify-start justify-center">

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- our service -->

<!-- seafarer travel package -->
<div class="">
    <div
        class="max-w-[90vw] lg:max-w-[70vw] lg:min-h-[90vh] mx-auto flex flex-col-reverse md:flex-row md:justify-center">
        <div class="md:w-2/3 flex flex-col md:p-4 gap-y-4 justify-center lg:items-start items-center">
            <h1 class="lg:text-5xl md:text-left text-center text-3xl font-extrabold text-primary">SEAFARER <span
                    class="text-secondary">VISA</span> <span class="text-third">PACKAGE</span></h1>
            <p class="lg:text-xl lg:max-w-[80%] md:text-left text-center">Our Seafarer Visa Package is designed to
                make your departure process as stress-free as possible. Whether you're a first-timer or an
                experienced crew member, we take care of everything you need to get you onboard smoothly and on
                time.</p>
            <p class="text-xl font-bold text-primary">What's included:</p>
            <ul class="list-disc text-gray ml-5">
                <li><strong>Visa Application Form & Guidance</strong></li>
                <li><strong>Interview Appointment Booking</strong></li>
                <li><strong>Full Assistance During Submission</strong></li>
                <li><strong>Document Completeness Check</strong></li>
                <li><strong>Flight Booking</strong></li>
                <li><strong>Ground Transport</strong></li>
                <li><strong>Hotel Accommodation</strong></li>
                <li><strong>Snacks & Souvenirs</strong></li>
            </ul>

            <div x-data="{ open: false }">
                <!-- Button -->
                <button @click="open = true"
                    class="text-lg bg-primary py-2 px-4 rounded-lg text-white hover:bg-third cursor-pointer">
                    Book now, contact our admin
                </button>

                <!-- Modal -->
                <div x-show="open"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50" x-cloak>
                    <div class="lg:flex lg:items-center bg-white p-6 rounded-lg shadow-lg lg:w-[60vw] text-center">

                        <div class="lg:w-1/2">
                            <img class="w-24 mx-auto my-5" src="img/logo/logo1.png" alt="">
                            <h2 class="text-xl font-semibold mb-4">Contact Our Admin</h2>
                            <p><strong>Bali Admin:</strong>
                                <a href="https://wa.me/6281119231513" target="_blank"
                                    class="text-primary font-medium">+62 811-1923-1513</a>
                            </p>
                            <p><strong>Jakarta Admin:</strong>
                                <a href="https://wa.me/6281113016465" target="_blank"
                                    class="text-primary font-medium">+62 811-1301-6465</a>
                            </p>

                            <button @click="open = false"
                                class="mt-4 px-4 py-2 bg-primary text-white rounded-md hover:bg-third">
                                Close
                            </button>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="img/services/sea.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="md:w-1/3 flex items-center justify-center">
            <img class="md:w-[350px]" src="img/services/svp.png" alt="">
        </div>
    </div>
</div>
<!-- seafarer travel package -->

<!-- what we do -->
<div class="animate-slide-up bg-slate-200 md:py-10 md:px-6 my-10
    ">
    <div class="mx-6 py-6 space-y-8">
        <h1 class="text-3xl md:text-5xl font-extrabold uppercase text-primary text-center">What We Do</h1>

        <div class="container mx-auto flex flex-col md:flex-row md:items-center md:justify-center gap-x-6 gap-y-6">
            <!-- wwd slide card -->
            <div class="cursor-pointer p-6 flex flex-col justify-end relative w-full h-96 md:h-[500px] bg-[url('/public/img/crew/2.jpg')] bg-cover bg-bottom rounded-xl overflow-hidden hover:shadow-lg hover:shadow-black transition duration-300 ease-in"
                onclick="window.location.href='https://jobs.equinoxshipping.co.id/cruise'">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
                <div class="relative">
                    <h1 class="text-2xl md:text-4xl text-white font-bold">Hotel
                        <span class="text-third">Recruitment</span>
                    </h1>
                    <p class="text-base text-slate-300">Equinox Bahari Utama provides tailored crewing solutions for
                        the
                        cruise line industry, including
                        Culinary, F&B Services, Housekeeping and more.</p>

                </div>
                <i class="absolute top-5 left-5 text-white border-2 rounded-[50%] border-white mt-2"
                    data-feather="arrow-right"></i>
            </div>
            <!-- wwd slide card -->
            <!-- wwd slide card -->
            <div class="cursor-pointer p-6 flex flex-col justify-end relative w-full h-96 md:h-[500px] bg-[url('/public/img/crew/marine.jpg')] bg-cover bg-right rounded-xl overflow-hidden hover:shadow-lg hover:shadow-black transition duration-300 ease-in"
                onclick="window.location.href='https://jobs.equinoxshipping.co.id/cruise'">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent"></div>
                <div class="relative">
                    <h1 class="text-2xl md:text-4xl text-white font-bold">Marine
                        <span class="text-secondary">Recruitment</span>
                    </h1>
                    <p class="text-base text-slate-300">Specializing in maritime crew placement, Equinox Bahari
                        Utama
                        connects qualified seafarers with leading cruise line company</p>

                </div>
                <i class="absolute top-5 left-5 text-white border-2 rounded-[50%] border-white mt-2"
                    data-feather="arrow-right"></i>
            </div>
            <!-- wwd slide card -->
        </div>

    </div>
</div>
<!-- what we do -->


<!-- testimonial -->
<div class="animate-slide-up mx-6 md:mx-10
    ">

    <div
        class="relative text-center font-extrabold text-3xl md:text-5xl uppercase bg-cover bg-center py-6 rounded-xl overflow-hidden">
        <h1 class="relative z-20 drop-shadow-sm text-primary">What People Said <span class="text-third">about
                us</span></h1>
        <!-- <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-primary to-primary"></div> -->
    </div>

    <div class="swiper container mx-auto testimoni swiper-container">
        <div class="swiper-wrapper mb-10">


            <!-- testimoni card -->
            <div class="swiper-slide relative ">
                <div
                    class="bg-primary flex flex-col gap-y-2 items-center text-center p-6 rounded-xl shadow-md shadow-slate-600 transition-all duration-300 ease-linear">
                    <img class="size-40 object-cover bg-white rounded-[50%]" src="img/testimoni/hariri.png" alt="">
                    <h1 class="font-bold text-third text-3xl">Hariri Sulaiman</h1>
                    <p class="text-secondary font-semibold">Second Officer</p>
                    <div x-data="{ expanded: false }" class="max-w-lg p-4 text-white rounded-lg">
                        <p>
                            {{ Str::limit('Equinox Bahari Utama provided an exceptional service in handling my seafarer
                            visa process, making everything smooth and hassle-free.', 100, '...') }}
                            <span x-show="expanded" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                Equinox Bahari Utama guided me every step of the way, ensuring my documents were in
                                order and the process was stress-free. Highly recommended!
                            </span>
                        </p>

                        <!-- Read More / Read Less Button -->
                        <button @click="expanded = !expanded" class="text-blue-600 mt-2">
                            <span class="text-slate-400" x-show="!expanded">Read More</span>
                            <span class="text-slate-400" x-show="expanded">Read Less</span>
                        </button>
                    </div>
                    <img class="w-40" src="img/brands-logo/royal-logo-white.png" alt="">
                </div>
            </div>

            <!-- testimoni card -->
            <div class="swiper-slide relative ">
                <div
                    class="bg-primary flex flex-col gap-y-2 items-center text-center p-6 rounded-xl shadow-md shadow-slate-600 transition-all duration-300 ease-linear">
                    <img class="size-40 object-cover bg-white rounded-[50%]" src="img/testimoni/2.jpg" alt="">
                    <h1 class="font-bold text-third text-3xl">Ida Bagus Kerta Adi</h1>
                    <p class="text-secondary font-semibold">Galley Steward</p>
                    <div x-data="{ expanded: false }" class="max-w-lg p-4 text-white rounded-lg">
                        <p>
                            {{ Str::limit('"EBU truly goes above and beyond. The staff was responsive, helpful, and made
                            sure I had all my', 100, '...') }}
                            <span x-show="expanded" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                documents in order. I didn’t even have to worry about the visa interview—they prepped me
                                well. Definitely recommended for any crew joining the cruise line!"
                            </span>
                        </p>

                        <!-- Read More / Read Less Button -->
                        <button @click="expanded = !expanded" class="text-blue-600 mt-2">
                            <span class="text-slate-400" x-show="!expanded">Read More</span>
                            <span class="text-slate-400" x-show="expanded">Read Less</span>
                        </button>
                    </div>
                    <img class="w-40" src="img/brands-logo/royal-logo-white.png" alt="">
                </div>
            </div>

            <!-- testimoni card -->
            <div class="swiper-slide relative ">
                <div
                    class="bg-primary flex flex-col gap-y-2 items-center text-center p-6 rounded-xl shadow-md shadow-slate-600 transition-all duration-300 ease-linear">
                    <img class="size-40 object-cover bg-white rounded-[50%]" src="img/testimoni/3.jpg" alt="">
                    <h1 class="font-bold text-third text-3xl">Kadek Sana Susila</h1>
                    <p class="text-secondary font-semibold">Utility Bar</p>
                    <div x-data="{ expanded: false }" class="max-w-lg p-4 text-white rounded-lg">
                        <p>
                            {{ Str::limit('“ Big Thanks untuk Equinox Bahari Utama and all team for helping me to step
                            on this amazing places and make my dream come true ,', 100, '') }}
                            <span x-show="expanded" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
                                we hope Equinox Bahari utama always success in the future to help all of us who want to
                                get a best experience and beautifull journey “
                            </span>
                        </p>

                        <!-- Read More / Read Less Button -->
                        <button @click="expanded = !expanded" class="text-blue-600 mt-2">
                            <span class="text-slate-400" x-show="!expanded">Read More</span>
                            <span class="text-slate-400" x-show="expanded">Read Less</span>
                        </button>
                    </div>
                    <img class="w-40" src="img/brands-logo/celebrity-logo-white.png" alt="">
                </div>
            </div>



        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- testimonial -->

<!-- our offices -->
<div class="animate-slide-up md:mx-10 mx-6
    ">
    <h1 class="text-center font-extrabold text-3xl md:text-6xl uppercase text-primary py-6">Jakarta <span
            class="text-third">Office</span> </h1>
    <div class="container mx-auto md:flex gap-x-8">
        <div class="swiper office-slider swiper-container md:w-1/2">
            <div class="swiper-wrapper mb-10">
                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/jakarta-office.png" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/jkt.jpg" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/jkt2.jpg" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/jakarta3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="md:w-1/2 bg-primary md:p-6 p-4 rounded-xl md:h-[500px]">
            <ul class="space-y-2 text-white">
                <li>
                    <span class="block text-xl font-bold text-secondary">Strategic Position:</span>
                    <p>Situated in Indonesia's capital, the Jakarta office is at the heart of the nation's
                        maritime
                        industry, providing easy access to major shipping companies and regulatory bodies.</p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-secondary">Comprehensive Services:</span>
                    <p>As the head office, it offers a full range of services, including recruitment, training,
                        and
                        crew management, ensuring efficient operations and support for seafarers.</p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-secondary">Professional Network:</span>
                    <p>Proximity to various maritime organizations and institutions facilitates strong industry
                        connections and opportunities for collaboration.</p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-secondary">Address:</span>
                    <p>Globe Building, 4th-5th Floor, Jl. Warung Jati Barat Kav. 31-33, South Jakarta, 12740
                        Indonesia.</p>
                    <br>
                    <a target="_blank" href="https://maps.app.goo.gl/E533nwuaHryeb7YZ9"
                        class="px-4 py-2 rounded-xl bg-third mt-4 hover:bg-secondary">
                        Open Map
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>

<div class="animate-slide-up md:mx-10 mx-6 mb-6
    ">
    <h1 class="text-center font-extrabold text-3xl md:text-6xl uppercase text-primary py-6">Bali <span
            class="text-third">Office</span> </h1>
    <div class="container mx-auto md:flex gap-x-8">
        <div class="swiper office-slider swiper-container md:w-1/2">
            <div class="swiper-wrapper mb-10">
                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/bali1.jpg" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/bali2.jpg" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/bali3.jpg" alt="">
                </div>

                <!-- slide card white card -->
                <div class="swiper-slide rounded-xl overflow-hidden md:h-[500px]">
                    <img class="h-full object-cover" src="img/offices/bali4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="md:w-1/2 bg-third md:p-6 p-4 rounded-xl md:h-[500px]">
            <ul class="space-y-2">
                <li>
                    <span class="block text-xl font-bold text-primary">Regional Accessibility:</span>
                    <p class="text-white">The Bali office caters to seafarers in the eastern regions of Indonesia,
                        making it
                        convenient
                        for local applicants to access recruitment and training services.</p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-primary">Focused Recruitment:</span>
                    <p class="text-white">Specializes in conducting walk-in interviews and onboarding processes,
                        streamlining the
                        hiring experience for candidates.</p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-primary">Cultural Hub:</span>
                    <p class="text-white"> Located in a major tourist destination, the Bali office benefits from a
                        rich cultural
                        environment, enhancing the hospitality training provided to cruise ship crew members.
                    </p>
                </li>
                <li>
                    <span class="block text-xl font-bold text-primary">Address:</span>
                    <p class="text-white">Gedung MNC Vision Lt.3 ,Jl.Diponegoro No.109, Dauh Puri Klod, Kec.
                        Denpasar Bar., Kota
                        Denpasar, Bali 80232</p>
                    <br>
                    <a href="https://maps.app.goo.gl/naZRzKVxQt657DUj9" target="_blank"
                        class="px-4 py-2 rounded-xl bg-primary text-white hover:bg-secondary mt-4">
                        Open Map
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- our offices -->

<?php
$content = ob_get_clean();
include __DIR__ . '/../layout/app.php';