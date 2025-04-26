<?php
$title = 'About us';

// Use output buffering to capture the content
ob_start();
?>
<div
    class="md:flex md:items-end lg:max-w-[90vw] md:mx-auto mx-6 mt-24 rounded-xl h-50 md:min-h-[80vh] bg-[url('/public/img/team/contac.jpg')] bg-cover bg-center">
    <div class="p-4 md:p-12">
        <h1 class="font-extrabold text-3xl md:text-7xl leading-7 text-shadow drop-shadow-xl shadow-black">
            <span class="text-white">CONTACT</span>
            <span class="text-third">US</span><br>
        </h1>
    </div>
</div>
<div class="container mx-auto px-6 py-16">
    <!-- Contact Information -->
    <div class="text-center mb-12">
        <h1 class="md:text-5xl text-2xl font-bold text-primary">Get in touch with us for any inquiries or assistance.
        </h1>
    </div>

    <div class="grid md:grid-cols-2 gap-1">
        <!-- Contact Details -->
        <div class="bg-secondary p-8 rounded-lg shadow-md s space-y-4">
            <h2 class="text-5xl font-bold text-white">Our Office</h2>
            <div>
                <p class="text-3xl font-bold uppercase text-primary">Jakarta Office</p>
                <p class="text-primary">Globe Building, 4th-5th Floor, Jl. Warung Jati Barat Kav. 31-33, South
                    Jakarta, 12740 Indonesia.</p>
                <p class="mt-2 font-semibold">Phone:</p>
                <p class="text-primary">+622179187006-7</p>
            </div>
            <div>
                <p class="text-3xl font-bold uppercase text-primary">Bali Office</p>
                <p class="text-primary">Gedung MNC Vision Lt.3 ,Jl.Diponegoro No.109, Dauh Puri Klod, Kec. Denpasar
                    Bar., Kota Denpasar, Bali 80232</p>
                <p class="mt-2 font-semibold">Phone:</p>
                <p class="text-primary">+62 361 848 8001</p>
            </div>
            <p class="mt-2 font-semibold">Email:</p>
            <a href="mailto:crewing.rccl@equinoxshipping.co.id"
                class="text-white font-bold hover:text-primary cursor-pointer">crewing.rccl@equinoxshipping.co.id</a><br>
            <a href="mailto:support.rccl@equinoxshipping.co.id"
                class="text-white font-bold hover:text-primary cursor-pointer">support.rccl@equinoxshipping.co.id</a>
        </div>

        <!-- Contact Form -->
        <!-- Contact Form -->
        <div class="bg-primary p-8 rounded-lg shadow-md">
            <h2 class="text-4xl font-semibold text-white">For Business Partnership</h2>
            <form class="mt-4 space-y-4" method="POST" action="send.php">
                <input type="text" name="name" placeholder="Full Name"
                    class="w-full p-3 border rounded-md focus:ring-primary focus:border-primary" required>
                <input type="email" name="email" placeholder="Email Address"
                    class="w-full p-3 border rounded-md focus:ring-primary focus:border-primary" required>
                <input type="text" name="phone" placeholder="Phone Number (Optional)"
                    class="w-full p-3 border rounded-md focus:ring-primary focus:border-primary">
                <textarea name="message" placeholder="Your Message" rows="4"
                    class="w-full p-3 border rounded-md focus:ring-primary focus:border-primary" required></textarea>
                <button type="submit" class="w-full bg-third text-white py-3 rounded-md hover:bg-secondary">Send
                    Message</button>
            </form>
        </div>

    </div>

    <!-- Social Media Links -->
    <div class="text-center mt-12">
        <h2 class="text-2xl font-semibold text-primary">Follow Us</h2>
        <div class="flex justify-center mt-8 space-x-6 text-white">
            <a class="hover:opacity-75" href="https://www.instagram.com/ebu.cruise/?hl=en" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> Facebook </span>
                <svg width="30" height="30" viewBox="0 0 24 24" class="fill-primary" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 2H8C4.686 2 2 4.686 2 8V16C2 19.314 4.686 22 8 22H16C19.314 22 22 19.314 22 16V8C22 4.686 19.314 2 16 2ZM20 16C20 18.209 18.209 20 16 20H8C5.791 20 4 18.209 4 16V8C4 5.791 5.791 4 8 4H16C18.209 4 20 5.791 20 8V16ZM12 6C8.686 6 6 8.686 6 12C6 15.314 8.686 18 12 18C15.314 18 18 15.314 18 12C18 8.686 15.314 6 12 6ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16ZM18 7C17.448 7 17 6.552 17 6C17 5.448 17.448 5 18 5C18.552 5 19 5.448 19 6C19 6.552 18.552 7 18 7Z" />
                </svg>
            </a>
            <a class="hover:opacity-75" href="https://www.facebook.com/EquinoxBahariUtamaCruise/?locale=id_ID"
                target="_blank" rel="noreferrer">
                <span class="sr-only"> Facebook </span>
                <svg width="30" height="30" viewBox="0 0 24 24" class="fill-primary" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.014 5.656 21.129 10.438 21.879V14.892H7.898V12H10.438V9.797C10.438 7.292 11.93 5.909 14.212 5.909C15.306 5.909 16.461 6.107 16.461 6.107V8.561H15.205C13.972 8.561 13.563 9.305 13.563 10.045V12H16.348L15.918 14.892H13.563V21.879C18.344 21.129 22 17.014 22 12Z" />
                </svg>
            </a>
            <a class="hover:opacity-75" href="https://www.linkedin.com/company/ebucruisedepartment/" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> Linked-in </span>
                <svg width="30" height="30" viewBox="0 0 24 24" class="fill-primary" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 2H4C2.9 2 2 2.9 2 4V20C2 21.1 2.9 22 4 22H20C21.1 22 22 21.1 22 20V4C22 2.9 21.1 2 20 2ZM8 18H5V9H8V18ZM6.5 7.5C5.67 7.5 5 6.83 5 6C5 5.17 5.67 4.5 6.5 4.5C7.33 4.5 8 5.17 8 6C8 6.83 7.33 7.5 6.5 7.5ZM19 18H16V13.5C16 12.67 15.33 12 14.5 12C13.67 12 13 12.67 13 13.5V18H10V9H13V10.11C13.54 9.42 14.42 9 15.5 9C17.43 9 19 10.57 19 12.5V18Z" />
                </svg>
            </a>
            <a class="hover:opacity-75" href="https://www.tiktok.com/@equinoxshippinggroup" target="_blank"
                rel="noreferrer">
                <span class="sr-only"> Tiktok </span>
                <svg width="30" height="30" viewBox="0 0 24 24" class="fill-primary" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 19.5C6.52 19.5 4.5 17.48 4.5 15C4.5 12.52 6.52 10.5 9 10.5V13.14C8.42 12.92 7.79 13.08 7.38 13.5C6.96 13.92 6.78 14.55 7.02 15.14C7.27 15.75 7.86 16.13 8.5 16.13C9.88 16.13 10.63 15.24 10.63 13.91V4.5H13.5C13.63 5.52 14.02 6.5 14.62 7.34C15.31 8.31 16.28 8.99 17.37 9.35C17.91 9.52 18.47 9.59 19.04 9.61V12.51C18.41 12.46 17.78 12.34 17.17 12.14C16.44 11.91 15.78 11.55 15.2 11.09V15C15.2 17.48 13.18 19.5 10.7 19.5H9Z" />
                </svg>
            </a>
        </div>
    </div>

    <!-- FAQs Section -->
    <div class="mt-20">
        <h1 class="lg:text-4xl font-extrabold text-primary">FREQUENTLY ASKED QUESTIONS</h1>
        <div class="mt-6 grid md:grid-cols-3 gap-6">

            <!-- Recruitment FAQs -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-primary mb-4">Recruitment</h3>
                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How can I apply for a cruise job?
                    </summary>
                    <p class="mt-2 text-gray-600">You can apply by visiting our recruitment page and submitting your
                        application online.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What are the basic requirements to apply?
                    </summary>
                    <p class="mt-2 text-gray-600">Applicants must be at least 21 years old, have relevant
                        experience, and meet medical fitness standards.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Do I need prior cruise ship experience?
                    </summary>
                    <p class="mt-2 text-gray-600">Not always. Some positions require experience, but entry-level
                        roles may accept first-time applicants.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What positions are available?</summary>
                    <p class="mt-2 text-gray-600">We offer various roles in hospitality, entertainment, technical,
                        and deck departments.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How long does the recruitment process
                        take?</summary>
                    <p class="mt-2 text-gray-600">It varies, but typically takes a few months depending on the
                        position and requirements.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Is there an age limit for applicants?
                    </summary>
                    <p class="mt-2 text-gray-600">Most positions require applicants to be between 21 and 45 years
                        old, but some roles may have different requirements.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Will I have to go through an interview?
                    </summary>
                    <p class="mt-2 text-gray-600">Yes, shortlisted applicants must attend interviews and assessments
                        based on their chosen role.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Do I have to pay any recruitment fees?
                    </summary>
                    <p class="mt-2 text-gray-600">No, PT Equinox Bahari Utama does not charge any recruitment fees
                        from candidates.</p>
                </details>
            </div>

            <!-- Visa & Documents FAQs -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-primary mb-4">Visa & Document Services</h3>
                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What documents do I need to apply?
                    </summary>
                    <p class="mt-2 text-gray-600">You need a valid passport, seaman's book, STCW certificates,
                        medical clearance, and other required documents.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How do I apply for a C1/D visa?</summary>
                    <p class="mt-2 text-gray-600">We provide guidance on scheduling your visa interview and
                        gathering necessary documents for a C1/D visa.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How long does visa processing take?
                    </summary>
                    <p class="mt-2 text-gray-600">Visa processing can take several weeks, depending on the country
                        and consulate requirements.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Where can I get my medical examination?
                    </summary>
                    <p class="mt-2 text-gray-600">Medical examinations must be done at accredited clinics recognized
                        by the cruise line.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What is an STCW certificate?</summary>
                    <p class="mt-2 text-gray-600">STCW (Standards of Training, Certification, and Watchkeeping) is a
                        required safety certification for seafarers.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How do I renew my Seaman’s Book?</summary>
                    <p class="mt-2 text-gray-600">You can renew your Seaman’s Book through the proper maritime
                        authority with assistance from our team.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Do I need police clearance for my
                        application?</summary>
                    <p class="mt-2 text-gray-600">Yes, some cruise lines require police clearance as part of the
                        background check.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Who pays for the visa and medical exams?
                    </summary>
                    <p class="mt-2 text-gray-600">Visa and medical costs are generally covered by the candidate, but
                        some employers may reimburse these expenses.</p>
                </details>
            </div>

            <!-- Deployment FAQs -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-primary mb-4">Deployment</h3>
                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How will I be deployed?</summary>
                    <p class="mt-2 text-gray-600">Once you complete all requirements, we coordinate your travel
                        arrangements and ship assignment.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Will my travel to the ship be covered?
                    </summary>
                    <p class="mt-2 text-gray-600">Most cruise lines cover flights and transport to the assigned
                        vessel.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Where do I report on my first day?
                    </summary>
                    <p class="mt-2 text-gray-600">You will receive instructions regarding your reporting location
                        before your departure.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">How long are the contracts?</summary>
                    <p class="mt-2 text-gray-600">Contracts typically last 6-9 months, depending on the position.
                    </p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">Can I extend my contract?</summary>
                    <p class="mt-2 text-gray-600">Yes, contract extensions may be offered based on performance and
                        company needs.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What happens after my contract ends?
                    </summary>
                    <p class="mt-2 text-gray-600">You may apply for a new contract or take a break before
                        reapplying.</p>
                </details>

                <details class="bg-white p-4 rounded-lg shadow-md">
                    <summary class="cursor-pointer font-semibold text-lg">What should I pack for deployment?
                    </summary>
                    <p class="mt-2 text-gray-600">You will receive a packing checklist, including required documents
                        and personal items.</p>
                </details>

            </div>

        </div>
    </div>



</div>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../layout/app.php';