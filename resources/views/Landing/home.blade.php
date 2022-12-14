@extends('app')

@include('navbar')
@section('container')

    <div class="container p-4">
        <div class="container mb-3">
            <div class="row col-sm-8">
                <h1 id="headline">Hi Recruiters!</h1>
                <h1 id="headline">Your worth candidate is here</h1>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row col-sm-6">
                <em class="card-text">Exhausted to find a good one? Follow me.</em>
            </div>
        </div>
        <div class="container mb-5">
            <h3 id="headline" class="text-center">Let me tell you <span style="color: #EBDCB2;">who</span> I am</h3>
            <div class="row g-2">
                <div class="col-sm-4 mx-1">
                    <img src="/img/my-profile-pic.png" width="300px" alt="profile-pic-illustration">
                </div>
                <div class="col-sm-7">
                    <p style="margin-top: 50px; text-align:justify;"><span class="fw-bold">I'm A Programmer.</span> My fullname is Rizal Fathurrahman. People call me Rizal. Iam the first child and 23 years old. As a freshgraduate in 2022 I've spent a lot of times to explore my self. Organizations are space where I generate softskills such as <span class="badge text-bg-dark">team-work</span>, <span class="badge text-bg-dark">leadership</span>, <span class="badge text-bg-dark">time-management</span>, and <span class="badge text-bg-dark">adaptability</span>. I realize that These softkills are not genuine, but worth for me to have it. Passionate in programming especially web development has change my vision to a new version of me. <span class="badge text-bg-dark">Laravel</span> is the first framework of <span class="badge text-bg-dark">PHP</span> I learned to navigate my journey as a web programmer. Are you looking for someone who has a strong vision of innovation development to help or educate people's life? <span class="fw-bold">You got one.</span></p>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <h3 id="headline" class="text-center mb-5"> <span style="color: #EBDCB2;">Tools</span> I work with</h3>
            <div class="row g-5 mb-3 d-flex justify-content-center">
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/html-5.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 75%" data-bs-trigger="hover focus" alt="html5-icon">
                    <img src="/img/css-3.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 55%" data-bs-trigger="hover focus" alt="css3-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/php.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 50%" data-bs-trigger="hover focus" alt="php-icon">
                    <img src="/img/js.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 25%" data-bs-trigger="hover focus" alt="javascript-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/github.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 85%" data-bs-trigger="hover focus" alt="github-icon">
                    <img src="/img/google-cloud.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 5%" data-bs-trigger="hover focus" alt="google-cloud-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/laravel.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 70%" data-bs-trigger="hover focus" alt="laravel-icon">
                    <img src="/img/bootstrap.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 75%" data-bs-trigger="hover focus" alt="bootstrap-icon">
                </div>
            </div>
            <p class="col-sm-8 mt-5" style="margin: 0px auto; text-align: justify;">Each of those skills are in different percentage abilities. <span class="fw-bold">I'm not a professional yet,</span> but I'll be a great one soon. Fingercross. Anyway could you please hover or click one or more of those skill icon? Maybe you need the information.</p>
        </div>
        <div class="container mb-5" style="margin-top: 100px;">
            <h3 class="text-center mb-5" id="headline">What <span style="color: #EBDCB2;">projects</span> I've done so far</h3>
            <div class="row g-3 mt-5">
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col mb-3 projects" id="internship">
                        <div class="card">
                            <img src="/img/internship-project.jpg" class="card-img" style="border-radius: 5px 5px 0px 0px;" alt="internship-project-pic" width="150" height="300">
                            <div class="card-img-overlay text-end">
                                <span class="badge text-bg-dark">Alert System</span>
                            </div>
                            <div class="card-body">
                                <p class="card-title fw-bold">Chatbot Sipapa</p>
                                <p class="card-text text-muted"><small>Jun - Jul 2021</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 projects" id="final-project">
                        <div class="card">
                            <img src="/img/final-project.jpg" class="card-img" style="border-radius: 5px 5px 0px 0px;" alt="final-project-pic" width="150" height="300">
                            <div class="card-img-overlay text-end">
                                <span class="badge text-bg-dark">Tracking System</span>
                            </div>
                            <div class="card-body">
                                <p class="card-title fw-bold">D-Tags</p>
                                <p class="card-text text-muted"><small>Feb - Jul 2022</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 projects" id="work-project-1">
                        <div class="card">
                            <img src="/img/job-first-project.jpg" class="card-img" style="border-radius: 5px 5px 0px 0px;" alt="job-first-project-pic" width="150" height="300">
                            <div class="card-img-overlay text-end">
                                <span class="badge text-bg-dark">Administration System</span>
                            </div>
                            <div class="card-body">
                                <p class="card-title fw-bold">School Registration</p>
                                <p class="card-text text-muted"><small>Jul 2022 - Present</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3 projects" id="portfolio">
                        <div class="card">
                            <img src="/img/portfolio-project.jpg" class="card-img" style="border-radius: 5px 5px 0px 0px;" alt="portfolio-project-pic" width="150" height="300">
                            <div class="card-img-overlay text-end">
                                <span class="badge text-bg-dark">Portfolio</span>
                            </div>
                            <div class="card-body">
                                <p class="card-title fw-bold">Personal Web</p>
                                <p class="card-text text-muted"><small>In Progress</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mb-5">
            <div class="row g-1 text-center">
                <div class="col-sm-4">
                    <img src="/img/my-profile-pic-2.png" alt="hire-me-illustration" width="250">
                </div>
                <div class="col-sm-6">
                    <button class="col-sm-12 btn btn-dark fs-3 p-4 rounded-pill" style="margin-top: 100px;" id="headline" onclick="sendMessage()"><i class="fa-brands fa-whatsapp mx-2"></i>Hire Me</button>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 120px;">
            <h2 class="mb-4 text-center" id="headline">Special Thanks to</h2>
            <p class="mb-5 text-center">
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Photo by Volodymyr Hryshchenko on Unsplash</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Photo by Eddie Pipocas on Unsplash</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Photo by Tiffany Tertipes on Unsplash</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Photo by Diego PH on Unsplash</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Photo by Milada Vigerova on Unsplash</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">DrawKit</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Font Awesome</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Institut Teknologi Telkom Surabaya</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Web Programming Unpas</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">PT Mitra Tekno Persada</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Dewan Perwakilan Mahasiswa ITTelkom Surabaya</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Young On Top Surabaya</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Bangkit Academy 2021</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Computer Engineering 1st Generation</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Reiza Nurrafi</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Khairinadiar</span>
                <span class="badge bg-light text-muted border border-1 rounded-pill mx-1 mb-2">Okky Prastyo</span>
            </p>
        </div>
    </div>
    
@endsection

@push('javascript')
    
    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

        const sendMessage = () => {
            document.location.href = 'https://wa.me/6285733721962?text=Hi%20Rizal%20Fathurrahman';
        }

        let intern = document.getElementById('internship');
        intern.addEventListener('click', function(){
            document.location.href = '/internship';
        });

        document.getElementById('portfolio').addEventListener('click', function(){
            alert('Sorry, content is not available yet');
        });
        document.getElementById('work-project-1').addEventListener('click', function(){
            alert('Sorry, content is not available yet');
        });
        document.getElementById('final-project').addEventListener('click', function(){
            alert('Sorry, content is not available yet');
        });

        
    </script>
@endpush