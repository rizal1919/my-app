<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS from bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- my logo icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/my-black-logo.png" />

    <!-- my css file -->
    <link rel="stylesheet" href="/css/app.css">

    <title>Rizal De Studio</title>
</head>
<body>
    <div class="container p-4">
        <div class="container mt-5 mb-3">
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
            <div class="row g-3">
                <div class="col-sm-3">
                    <img src="/img/my-profile-pic.png" width="300px" alt="profile-pic-illustration">
                </div>
                <div class="col-sm-9">
                    <p style="margin-top: 50px; text-align:justify;"><span class="fw-bold">I'm A Programmer.</span> My fullname is Rizal Fathurrahman. People call me Rizal. Iam the first child and 23 years old. As a freshgraduate in 2022 I've spent a lot of times to explore my self. Organizations are space where I generate softskills such as <span class="badge text-bg-dark">team-work</span>, <span class="badge text-bg-dark">leadership</span>, <span class="badge text-bg-dark">time-management</span>, and <span class="badge text-bg-dark">adaptability</span>. I realize that These softkills are not genuine, but worth for me to have it. Passionate in programming especially web development has change my vision to a new version of me. <span class="badge text-bg-dark">Laravel</span> is the first framework of <span class="badge text-bg-dark">PHP</span> I learned to navigate my journey as a web programmer. Looking for someone who has a vision for innovation development for better people's life? <span class="fw-bold">You got one.</span></p>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <h3 id="headline" class="text-center mb-5"> <span style="color: #EBDCB2;">Tools</span> I work with</h3>
            <div class="row g-5 mb-3 d-flex justify-content-center">
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/html-5.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 75%" data-bs-placement="top" data-bs-trigger="hover focus" alt="html5-icon">
                    <img src="/img/css-3.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 55%" data-bs-placement="top" data-bs-trigger="hover focus" alt="css3-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/php.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 50%" data-bs-placement="top" data-bs-trigger="hover focus" alt="php-icon">
                    <img src="/img/js.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 25%" data-bs-placement="top" data-bs-trigger="hover focus" alt="javascript-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/github.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 85%" data-bs-placement="top" data-bs-trigger="hover focus" alt="github-icon">
                    <img src="/img/google-cloud.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 5%" data-bs-placement="top" data-bs-trigger="hover focus" alt="google-cloud-icon">
                </div>
                <div class="col-sm-2 d-flex justify-content-around">
                    <img src="/img/laravel.png" width="50" style="margin-right: 40px;" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 70%" data-bs-placement="top" data-bs-trigger="hover focus" alt="laravel-icon">
                    <img src="/img/bootstrap.png" width="50" tabindex="0" data-bs-toggle="popover" data-bs-content="Skill 75%" data-bs-placement="top" data-bs-trigger="hover focus" alt="bootstrap-icon">
                </div>
            </div>
        </div>



    </div>
    
    <!-- JavaScript from bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    </script>
</body>
</html>