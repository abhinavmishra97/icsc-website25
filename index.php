<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSC 2025 Conference</title>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="path/to/owl.carousel.css" rel="stylesheet">
    <link href="path/to/owl.theme.default.css" rel="stylesheet">
    <link href="styles/home.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <?php include 'includes.php' ?>
</head>
<style>
    .owl-carousel .owl-item img {
        width: 100%;

        height: 70vh;
        /* Set height to 30% of the viewport height */
        object-fit: cover;
    }

    .new {
        background: url('img/bg4.png');
        background-size: 100% 100%;
    }
</style>

<body>
    <?php
    $carouselItems = [
        [
            'image' => 'img/slider/1.jpg',
            'caption' => 'Image 1',
        ],
        [
            'image' => 'img/slider/2.jpg',
            'caption' => 'Image 2',
        ],
        [
            'image' => 'img/slider/3.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/4.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/5.jpg',
            'caption' => 'Image 5',
        ], [
            'image' => 'img/slider/6.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/7.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/8.jpg',
            'caption' => 'Image 3',
        ],

        [
            'image' => 'img/slider/9.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/10.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/11.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/12.jpg',
            'caption' => 'Image 3',
        ],
        [
            'image' => 'img/slider/13.jpg',
            'caption' => 'Image 3',
        ],
    ];
    ?>



    <div class="relative w-full  mx-auto pb-4">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <!-- <section class="bg-[url('img/frontImg.jpg')] bg-repeat items-center justify-center lg:justify-start flex">
         
            <img src="img/IEEE_up_transparent.png" class="ml-8 w-[16rem] h-[10rem] bg-transparent object-contain" />
        </section> -->
        <!-- <div class="grid grid-cols-7">
            <div class="col-span-7 my-10 flex justify-center">
                <span class="text-3xl font-bold text-center">Sponsoring Organization</span>

            </div>
            <div></div>
            <div class="col-span-5 overflow-hidden">

                <div class="overflow-x-auto">
                    <div class="sponsor">
                        <div>
                            <img src="resources/serb_logo.png" alt="QR code">
                            <p>SERB India</p>
                        </div>
                        <div>
                            <img src="resources/sponser.jpeg" alt="QR code">
                            <p>Mandali Games</p>
                        </div>
                        <div>
                            <img src="resources/new_sponsor.jpeg" alt="QR code">
                            <p>HHV Ltd.</p>
                        </div>
                        <div>
                            <img src="resources/new_sponser.jpeg" alt="QR code">
                            <p>LabIndia Instruments Pvt. Ltd.</p>
                        </div>
                        <div>
                            <img src="resources/Agmatel.jpeg" alt="QR code">
                            <p>Agmatel India Pvt. Ltd.</p>
                        </div>
                    </div>

                    <br><br>
                    <div class="divider"></div>
                </div>




            </div>

        </div> -->

        <div class="px-[5%]">
            <h1 class="text-3xl text-center font-bold m-4">Chief Guest</h1>
            <!-- <div class="new w-[90%] m-auto flex flex-col xl:flex-row justify-between rounded-lg flex-wrap">
                <div class="bg-transparent flex-1">
                    <div class="flex h-full justify-center bg-transparent px-7">
                        <img src="img/chief.jpeg" alt="" class="w-96 h-76 m-auto my-auto rounded-lg  mt-20">
                    </div>
                    <div class="justify-center w-full bg-transparent">
                            <div class="text-white text-xl font-bold text-center bg-transparent">Dr. Amit Sachan</div><br>
                            <div class="text-center bg-transparent my-2">
                                <a href="https://www.linkedin.com/in/dr-amit-sachan-25282813/" target="_blank" class="bg-white px-4 py-2 rounded-full">
                                    View Profile
                                </a>
                            </div>
                            <div class="text-white text-center bg-transparent p-4 m-4">
                                Vice President and Head of Media Intelligence with Jio

                            </div>
                        </div>

                </div>


                <div class="flex-1 bg-transparent">
                    <div class="flex h-full justify-center bg-transparent p-[10%]">
                        <div class="bg-transparent text-white">
                            <h1 class="text-2xl font-bold align-left">Prof. Abhay Karandikar</h1><br>
                            <p class="text-sm text-justify leading-relaxed">Prof. Abhay Karandikar is currently Secretary, Department of Science of Technology (DST). Before joining DST in October 2023, he served as the Director, IIT Kanpur. He also served as Dean (Faculty Affairs) and Head of the Electrical Engineering Department at IIT Bombay. He spearheaded a national effort in setting up and was the founding member of Telecom Standards Development Society of India (TSDSI). He was also Member (Part-Time) of Telecom Regulatory Authority of India (TRAI). Prof Karandikar has several patents issued and pending. His team also won Mozilla Open Innovation challenge prize in March 2017 for his work on rural broadband and digital empowerment in rural India.</p>
                        </div>
                    </div>
                </div>

            </div> -->

            <section>
                <div class="grid grid-cols-4 mx-10 my-10">
                    <div class="col-span-4 text-center">
                        <span class="text-2xl">
                            <?php include 'comingsoon.php' ?>
                        </span>
                    </div>
                </div>
            </section>
        </div>

        <!-- <div class="owl-carousel owl-theme">
            <?php foreach ($carouselItems as $item) : ?>
                <div class="item">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['caption']; ?>">

                </div>
            <?php endforeach; ?>
        </div> -->




        <!-- <img src="img/keynote/allspeakers.jpg" class="object-fit h-full w-full"></img> -->
        <!-- <section class="bg-cover">
         
            <div class=" owl-loaded mx-auto my-auto"> 
                <img src="img/keynote/allspeakers.jpg" class="h-[20vh] lg:h-[40vh] w-full object-fit" />
                 <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item"><img src="img/slider/1.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/2.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/3.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/4.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/5.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/6.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/7.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/8.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/9.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/10.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/11.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/12.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/13.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/14.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/15.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/16.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/17.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/18.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/19.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                    </div>
                </div> 
                <img />
            </div>
        </section> -->
        <section class="border-b border-gray-300">
            <div class="flex flex-col md:flex-row items-start justify-around">
                <div class="pt-8 card-body">
                    <h2 class="text-2xl font-bold card-title">Latest News and Announcements</h2>
                    <ol class="flex flex-col space-y-4 mx-8 mt-4 list-decimal">
                        <li class="flex flex-col space-y-1 animate-pulse">
                            <span class="text-red-500 font-bold">Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplore’s scope and quality requirements</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Program Plan</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="resources/PROGRAM PLAN ICSC 2023_19DEC.pdf" download="resources/PROGRAM PLAN ICSC 2023_19DEC.pdf">HERE</a></span> -->
                            <span>Coming soon</span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Session Plan</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="resources/ICSC 2023 SESSION PLAN 19DEC.pdf" download="resources/ICSC 2023 SESSION PLAN 19DEC.pdf">HERE</a></span> -->
                            <span>Coming soon</span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Inauguration Invitation</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="resources/Inauguration Invitation ICSC-2023.pdf" download="resources/Inauguration Invitation ICSC-2023.pdf">HERE</a></span> -->
                            <span>Coming soon</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Latest Updates</h6>
                            <!-- <span>Visit our facebook page for latest updates! <a class="text-primary" href="https://www.facebook.com/profile.php?id=100079333816857" target="_blank">HERE</a></span> -->
                            <span>Coming soon</span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">IEEE Conference Calender</h6>
                            <!-- <span>Find us on official calender, please click<a class="text-primary" target="_blank" href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/60394">HERE</a></span> -->
                            <span>Coming soon</span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Previous ICSC Conferences</h6>
                            <span>For more details please click <a class="text-primary" href="ICSC23/index.php">HERE</a></span>

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Call for Papers</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="resources/call for papers.pdf" download="resources/call for papers.pdf">HERE</a></span> -->
                            <span>Coming soon</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for the Authors</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="instruction.php">HERE</a></span> -->
                            <span>Coming soon</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">List of Distinguished TPC Members</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="tpc.php">HERE</a></span> -->
                            <span>Coming soon</span>
                        </li>
                        <!-- <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for Attendees</h6>
                            <span><a href="#" class="text-primary" >Coming soon</a></span>
                            <span>For more details please click <a class="text-primary" href="http://localhost/icsc2023-updated/instruction.php" >HERE</a></span> 
                        </li> -->
                    </ol>
                </div>
                <div class="card-body text-justify">
                    <h2 class="card-title text-2xl font-bold">Important Deadlines</h2>
                    <hr>
                    <table class="table table-compact w-full">
                        <tbody>
                            <tr>
                                <td class="text-sm md:text-xl">Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    Coming soon
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Notification of acceptance</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">Coming soon</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Final Paper submission Date</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    Coming soon
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Link to paper submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    <!-- <a href="https://edas.info/N31246" class="rounded font-bold">EDAS</a> -->
                                    Coming soon
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="flex flex-col card-body">
            <h2 class="card-title text-3xl">Conference Organizers</h2>
            <hr class="w-full" />
            <div class="flex flex-col lg:flex-row justify-between items-start space-y-4 lg:space-y-0">
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Chief Patron</h6>
                    <ul>
                        <li>Sh. Jaiprakash Gaur Ji</li>
                        <li>Sh. Manoj Gaur Ji</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Patron</h6>
                    <ul>
                        <li>Prof. S. C. Saxena</li>
                        <li> Prof. B.R. Mehta
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">General Chair</h6>
                    <ul>
                        <li>Prof. Shweta Srivastava</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Organizing Secretary</h6>
                    <ul>
                        <li>Prof. Sajai Vir Singh</li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="w-full" />
        <?php include 'footer.php' ?>
    </div>
    <script src="js/owl.carousel.min.js"></script>

</body>

</html>