<?php
$title = 'About us';

// Use output buffering to capture the content
ob_start();
?>

<div class="swiper hero-swiper max-w-[90vw]">
    <div class="swiper-wrapper mt-[90px] md:mt-[100px]">


        <!-- hero slide 1 -->
        <div class="swiper-slide relative rounded-xl overflow-hidden">
            <img class="w-full absolute object-cover md:object-center h-full top-0 left-0"
                src="public/img/trons/about-2.png" alt="">
            <div
                class="flex items-center relative overflow-hidden bg-cover bg-center lg:p-12 p-6 min-h-[40vh] lg:min-h-[84vh]">

                <!-- gradient -->
                <div>
                    <div class="relative z-10">
                        <h1 class="font-extrabold text-2xl md:text-7xl">
                            <span class="text-white">EQUINOX</span> <br>
                            <span class="text-third">SHIPPING</span><br>
                            <span class="text-secondary">GROUP</span>
                        </h1>
                    </div>

                </div>
            </div>
        </div>


        <!-- hero slide 2 -->
        <!-- <div class="swiper-slide relative rounded-xl overflow-hidden">
            <img class="absolute object-cover md:object-center h-full top-0 left-0"
            src="public/img/trons/about-1.jpg" alt="">
            <div
                class="flex items-end relative overflow-hidden bg-cover bg-center lg:p-20 p-2 min-h-[40vh] lg:min-h-[84vh]">

                <div>
                    <div class="relative z-10">
                        <h1 class="font-extrabold text-xl md:text-7xl drop-shadow-md">
                            <span class="text-white">EQUINOX</span> <br>
                            <span class="text-third">BAHARI</span><br>
                            <span class="text-secondary">UTAMA</span><br>
                            <span class="text-white">CRUISE</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div> -->



    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- hero section -->

<!-- about equinox bahari utama -->
<div class="bg-slate-100 lg:max-w-[90vw] mx-auto rounded-xl md:my-10
    ">
    <div class="md:flex md:py-10">
        <div class="mx-6 lg:flex lg:flex-col justify-center p-4  space-y-4 rounded-xl overflow-hidden md:w-1/2">
            <h1 class="text-xl md:text-5xl font-extrabold text-primary uppercase">Equinox <span
                    class="text-secondary">Shipping</span> <span class="text-third">Group</span></h1>
            <p class="md:text-xl">
                <strong>Founded in 2001,</strong> Equinox is a group of companies owned by PSU and include a leading
                fully
                licensed shipowner, ship manager, port agency and crewing manager in Indonesia providing
                services for international shipowners. Equinox offers end to end maritime solutions and services
                tailored to the specific requirements of its clients.
            </p>
            <p class="md:text-xl">
                Putting safety first, Equinox operates to International Standards servicing customers across the
                globe (from Japan to Singapore and from Norway to the USA). Equinox has earned its excellent
                reputation both internationally and in Indonesia as a quality shipowner and for its reliable
                shipping services.
            </p>
            <div class="flex gap-x-4">
                <img class="w-24 object-cover drop-shadow-xl" src="public/img/logo/logo-ppe.png" alt="">
                <img class="w-24 object-cover drop-shadow-xl" src="public/img/logo/logo-ebu.png" alt="">
                <img class="w-24 object-cover drop-shadow-xl" src="public/img/logo/logo-esb.png" alt="">
            </div>
        </div>
        <div class="logo-equinox mx-6 p-4 md:w-1/2">
            <img class=" object-center  rounded-xl overflow-hidden" src="public/img/assets/test4.png" alt="">
        </div>
    </div>
</div>

<div class="bg-white lg:max-w-[90vw] mx-auto rounded-xl mb-4 md:my-10
    ">
    <div class="md:flex md:py-10">
        <div class="mx-6 p-4 md:w-1/2">
            <img class="object-center  rounded-xl overflow-hidden" src="public/img/ships/ship-hero.webp" alt="">
        </div>
        <div class="lg:flex lg:flex-col justify-center mx-6 p-4 md:py-10 space-y-4 rounded-xl overflow-hidden md:w-1/2">
            <h1 class="text-xl md:text-5xl font-extrabold text-primary">PT.EQUINOX <span class="text-secondary">
                    BAHARI UTAMA</span> <span class="text-third">-CRUISE</span></h1>
            <p class="md:text-xl text-primary">Is the crewing unit of Equinox Shipping Group, which
                hires for cruise lines. PT EBU
                is one of the top crewing agencies in Indonesia and has been the official hiring partner for the
                Royal Caribbean Group since 2019. PT EBU boasts of deploying 4000+ new hires from Indonesia onboard
                Royal Caribbean Group ships and will continue to do so in the future.<br>It’s expertise lies in
                recruiting top talent for the Hotel and Marine departments, assisting them with the required
                documentation and visa processes, and finally ensuring they are deployed in a timely manner in
                coordination with the client's scheduling and crew readiness team.
            </p>
            <img class="w-24 object-cover drop-shadow-xl" src="public/img/logo/logo-EBU.png" alt="">
        </div>
    </div>
</div>
<!-- about equinox bahari utama -->

<!-- equinox shipping group -->
<div class="relative bg-primary p-6
    ">
    <h1 class="text-3xl md:text-5xl md:my-10 font-extrabold text-white mb-4 text-center uppercase mx-4">Equinox
        Shipping Group</h1>
    <div class="swiper default-carousel swiper-container lg:max-w-[90vw] mx-6">
        <div class="swiper-wrapper mb-10">

            <!-- slide card white card -->
            <div class="swiper-slide"
                onclick="window.location.href='https://equinoxshipping.co.id/company/ship-management-services/overview'">
                <div class=" rounded-2xl h-[560px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-1/2 w-full p-6 space-y-5">
                        <h1 class="text-xl text-secondary">Learn More</h1>
                        <h2 class="text-3xl font-extrabold text-primary uppercase">
                            Ship management services
                            <span class="block font-bold text-primary text-2xl">Equinox</span>
                        </h2>
                        <img class="w-20" src="public/img/logo/logo-ppe.png" alt="">
                    </div>
                    <div class="h-1/2 w-full bg-[url('/public/img/ships/marine.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- slide card blue card -->
            <div class="swiper-slide" onclick="window.location.href='abouts'">
                <div class=" rounded-2xl h-[560px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-1/2 w-full p-6 space-y-5 bg-secondary">
                        <h1 class="text-xl text-white">Learn More</h1>
                        <h2 class="text-3xl font-extrabold text-primary uppercase">
                            crewing <br>services
                            <span class="block font-bold text-white text-2xl">PT.EBU-Cruise</span>

                        </h2>
                        <img class="w-20 bg-white rounded-[50%]" src="public/img/logo/logo-ebu.png" alt="">
                    </div>
                    <div class="h-1/2 w-full bg-[url('/public/img/ships/4.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- slide card blue card -->
            <div class="swiper-slide"
                onclick="window.location.href='https://equinoxshipping.co.id/company/crew-management-services/overview'">
                <div class=" rounded-2xl h-[560px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-1/2 w-full p-6 space-y-5 bg-white">
                        <h1 class="text-xl text-secondary">Learn More</h1>
                        <h2 class="text-3xl font-extrabold text-primary uppercase">
                            crewing <br>services
                            <span class="block font-bold text-primary text-2xl">PT.EBU-Marine</span>

                        </h2>
                        <img class="w-20 bg-white rounded-[50%]" src="public/img/logo/logo-ebu.png" alt="">
                    </div>
                    <div class="h-1/2 w-full bg-[url('/public/img/equinox/bridge.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

            <!-- slide card blue card -->
            <div class="swiper-slide"
                onclick="window.location.href='https://equinoxshipping.co.id/company/shipping-agency-services/overview'">
                <div class=" rounded-2xl h-[560px] flex flex-col justify-center items-center overflow-hidden bg-white">
                    <div class="h-1/2 w-full p-6 space-y-5 bg-secondary">
                        <h1 class="text-xl text-white">Learn More</h1>
                        <h2 class="text-3xl font-extrabold text-primary uppercase">
                            Port Agency
                            <span class="block font-bold text-white text-2xl">PT.Equinox Sentra Bahari</span>

                        </h2>
                        <img class="w-20 rounded-[50%]" src="public/img/logo/logo-esb.png" alt="">
                    </div>
                    <div class="h-1/2 w-full bg-[url('/public/img/offices/jakarta3.jpg')] bg-cover bg-center">

                    </div>

                </div>
            </div>

        </div>
        <div class="flex items-center gap-8 lg:justify-start justify-center">

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- equinox shipping group -->

<!-- company video -->
<div class="relative md:flex md:justify-center md:items-center md:gap-x-6 md:min-h-[80vh] p-4
    ">
    <div class="lg:p-6 md:w-1/2">
        <h1 class="text-2xl md:text-5xl font-extrabold uppercase md:text-left text-center text-primary">
            Equinox Bahari Utama<br><span class="text-third"> Navigating Your Future</span></h1>
        <p class="md:text-xl">we are a dedicated team committed to ensuring a seamless journey for seafarers and
            maritime
            professionals. Our experienced specialists understand the unique challenges of the maritime industry and
            provide personalized assistance to make visa applications, document verification, and interview
            scheduling as smooth as possible.</p>
    </div>
    <video controls class="mb-6 md:w-[700px] md:h-[400px] rounded-xl shadow-lg" src="public/img/video/profile-video.mp4"
        poster="public/img/team/vision3.png">
    </video>
</div>
<!-- company video -->


<!-- ivan pereira -->
<div class="lg:max-w-[90vw] mx-auto rounded-xl md:bg-[url(/public/img/team/ivan-portrait.jpg)] bg-cover bg-center p-6 md:py-20 md:flex gap-x-6
    ">
    <div class="mb-4 md:w-1/3 md:p-10 sm:block md:hidden">
        <img class="border-4 border-white w-full object-cover object-top mx-auto rounded-xl"
            src="public/img/team/ivan-portrait.jpg" alt="">
    </div>
    <div class="space-y-2 md:w-1/2 md:p-10 py-5 bg-primary rounded-xl md:bg-opacity-75">

        <div class="px-4">
            <h1 class="text-3xl md:text-5xl font-bold text-white">Ivan <span class="text-third">Pereira</span></h1>
            <h2 class="text-secondary">General Manager of Cruise Department</h2>
        </div>
        <div class="p-4 md:text-base">
            <p class="space-y-4 text-white">
                With 25 years in the cruise industry, including 15 years in food service onboard Royal Caribbean
                Group (RCG) ships, I have dedicated my career to talent acquisition and helping Indonesians achieve
                their dreams of working on cruise ships.
                <span class="block">
                    Throughout my career, I have served as a Lead Trainer, Global Recruiter for RCG, and Cruise
                    Department Manager for RCG’s official hiring partner in Indonesia. I have also led the cruise
                    department for MSC Cruises, Explora Journeys, and Scylla AG River Cruises hiring partner in
                    Indonesia.
                </span>
                <span class="block">
                    My expertise lies in managing high-volume hiring processes, from sourcing to deploying
                    high-quality
                    candidates onboard. I am passionate about strategic planning to ensure efficient and effective
                    recruitment operations for contemporary, luxury, and river cruise lines. My deep understanding
                    of
                    the industry allows me to identify and recruit top talent.
                </span>
                <span class="block">
                    I am committed to continuing my mission of helping Indonesians secure rewarding careers on
                    cruise
                    ships, both now and in the future. My passion for this work drives me to make a positive impact
                    on
                    the lives of many, ensuring they have the opportunity to thrive in the cruise industry.
                </span>

            </p>
        </div>
    </div>
</div>
<!-- ivan pereira -->

<!-- cruise department leader -->
<div class="md:py-24 md:items-center gap-y-4 lg:max-w-[90vw] lg:mx-auto bg-third my-10 rounded-xl
    ">

    <h1 class="text-3xl md:my-8 md:text-5xl font-extrabold uppercase text-center text-white">Cruise
        <span class="text-white">Department leader</span>
    </h1>


    <div class="flex flex-col md:flex-row items-center gap-x-2 gap-y-5">

        <!-- leader card -->
        <div
            class="bod-card bg-white relative flex items-end rounded-xl overflow-hidden md:w-72 box-shadow-sm w-64 h-96 m-auto">
            <img class="bod-img w-full h-full absolute top-0 left-0 bottom-0 object-cover"
                src="public/img/team/toar.jpg" alt="">
            <div class="w-full h-1/2 absolute left-0 bottom-0 bg-gradient-to-t from-primary z-0"></div>
            <div class="relative text-white p-4">
                <h1 class="text-xl font-bold">Toar B Sumanti</h1>
                <p class="text-third font-bold">Head of Bali Branch</p>
            </div>
        </div>
        <!-- leader card -->

        <!--  leader card -->
        <div class="bod-card relative flex items-end rounded-xl overflow-hidden md:w-72 box-shadow-sm w-64 h-96 m-auto">
            <img class="bod-img w-full h-full absolute top-0 left-0 bottom-0 object-cover"
                src="public/img/team/raissa.png" alt="">
            <div class="w-full h-1/2 absolute left-0 bottom-0 bg-gradient-to-t from-primary z-0"></div>
            <div class="relative text-white p-4">
                <h1 class="text-xl font-bold">Raissa Humaira</h1>
                <p class="text-third font-bold">Recruitment Section Head</p>
            </div>
        </div>
        <!-- leader card -->

        <!-- leader card -->
        <div class="bod-card relative flex items-end rounded-xl overflow-hidden md:w-72 box-shadow-sm w-64 h-96 m-auto">
            <img class="bod-img w-full h-full absolute top-0 left-0 bottom-0 object-cover"
                src="public/img/team/agni.png" alt="">
            <div class="w-full h-1/2 absolute left-0 bottom-0 bg-gradient-to-t from-primary z-0"></div>
            <div class="relative text-white p-4">
                <h1 class="text-xl font-bold">Agni Aditya</h1>
                <p class="text-third font-bold">Deployment Section Head</p>
            </div>
        </div>
        <!-- leader card -->

        <!-- leader card -->
        <!-- <div
                class="bod-card relative flex items-end rounded-xl overflow-hidden md:w-72 box-shadow-sm w-64 h-96 m-auto">
                <img class="bod-img w-full h-full absolute top-0 left-0 bottom-0 object-cover" src="img/team/ruth.png"
                    alt="">
                <div class="w-full h-1/2 absolute left-0 bottom-0 bg-gradient-to-t from-primary z-0"></div>
                <div class="relative text-white p-4">
                    <h1 class="text-xl font-bold">Ruth Aprillia</h1>
                    <p class="text-third font-bold">Visa Section Head</p>
                </div>
            </div> -->
        <!-- leader card -->

    </div>




</div>
<!-- cruise department leader -->

<!-- our vision -->
<div class="container mx-auto md:flex relative bg-white py-12 px-10 md:rounded-xl overflow-hidden
    ">
    <div class="space-y-4 md:w-1/2 md:h-[400px] rounded-xl shadow-sm shadow-black overflow-hidden">
        <img class="object-cover w-full md:h-full" src="public/img/assets/vision.jpg" alt="">
    </div>
    <div class="md:p-10 md:w-1/2 p-4 text-center md:text-left rounded-xl overflow-hidden">
        <h1 class="text-3xl md:text-5xl font-extrabold text-primary uppercase">
            Our <span class="text-third"> Vision</span>
        </h1>
        <p class="text-primary md:text-2xl font-semibold">
            "We strive to be amongst the leading Ship Managers in South-East Asia by 2027."
        </p>
        <p>
            At Equinox Bahari Utama, our vision is to establish ourselves as a trusted and innovative ship
            management company in South-East Asia. We are committed to delivering high-quality maritime services,
            ensuring operational excellence, and prioritizing safety, efficiency, and sustainability in every aspect
            of our work.
        </p>
    </div>
</div>
<!-- our vision -->

<!-- our vision -->
<div class="container mx-auto my-10 md:flex relative bg-primary py-12 px-10 md:rounded-xl overflow-hidden
    ">
    <div class="md:p-10 md:w-1/2 p-4 text-center md:text-left rounded-xl overflow-hidden text-shadow">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white uppercase">
            Our <span class="text-third"> Mission</span>
        </h1>
        <p class="text-white md:text-2xl">
            We aim to continue to build long term collaboration with our clients through trust and confidence so as
            to ensure sustainable growth through efficient, safe operations centered around HSSE excellence.
            HSSE excellence is a commitment to continuous improvement, proactive risk management, adherence to
            industry best practices, compliance with relevant regulations, and a strong safety culture that involves
            all levels of the organization. We aim to create a workplace where the health and well-being of
            individuals are paramount, and environmental sustainability is a core consideration in all operations.
        </p>
    </div>
    <div class="space-y-4 md:w-1/2 rounded-xl shadow-sm shadow-black overflow-hidden">
        <img class="object-cover md:h-full" src="public/img/offices/jkt.jpg" alt="">
    </div>

</div>
<!-- our vision -->

<!-- our values -->
<div class="md:flex md:flex-col md:justify-center bg-third py-4 min-h-[80vh]
    ">
    <h1 class="text-center font-extrabold uppercase text-3xl md:text-5xl text-white">Our Values</h1>
    <div class="container mx-auto p-6 flex md:flex-row flex-col gap-x-4 gap-y-5">

        <!-- value card -->
        <div class="w-full rounded-xl h-72 bg-white flex flex-col gap-2 p-6 justify-center items-center text-center">
            <h1 class="text-3xl font-extrabold text-primary uppercase">Safety & <span
                    class="text-third">Environtment</span></h1>
            <p>We strive towards zero incidents for our people, the well-being of crew members, property, and
                sustainability environment compliance.</p>
        </div>
        <!-- value card -->

        <!-- value card -->
        <div class="w-full rounded-xl h-72 bg-white flex flex-col gap-2 p-6 justify-center items-center text-center">
            <h1 class="text-3xl font-extrabold text-primary uppercase">Trans<span class="text-third">parency</span>
            </h1>
            <p>We act with ethical integrity and full open transparency throughout to build trust and confidence
                with our customers. Seek and respond to feedback from stakeholders to continuously improve business
                practices.</p>
        </div>
        <!-- value card -->

        <!-- value card -->
        <div class="w-full rounded-xl h-72 bg-white flex flex-col gap-2 p-6 justify-center items-center text-center">
            <h1 class="text-3xl font-extrabold text-primary uppercase">Relation<span class="text-third">ships</span>
            </h1>
            <p>We have close interaction with our customers, stakeholders and staff inclusively and professionally.
            </p>
        </div>
        <!-- value card -->

        <!-- value card -->
        <div class="w-full rounded-xl h-72 bg-white flex flex-col gap-2 p-6 justify-center items-center text-center">
            <h1 class="text-3xl font-extrabold text-primary uppercase">Qua<span class="text-third">lity</span></h1>
            <p>We ensure quality in everything we do from the top down.</p>
        </div>
        <!-- value card -->


    </div>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layout/app.php';