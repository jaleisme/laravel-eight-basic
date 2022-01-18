<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Jale's Resume</title>
  </head>
  <body style="background-color: #efefef; font-family: 'Raleway', sans-serif; font-size: 12pt;">

    {{-- Desktop --}}
    <div class="container">
        <div class="row mt-3 align-items-center">
            <div class="col-8">
                <h1 class="fw-bold">Jale's Resume</h1>
            </div>
            <div class="col-4">
                <a href="/" class="btn btn-danger float-end">Back to home</a>
            </div>
        </div>
        <div class="row bg-white mt-3 mb-5">
            <div class="col-3 bg-dark text-white py-5 px-3">
                <div class="row">
                    <div class="col-12 mb-5">
                        <center>
                            <img src="https://source.unsplash.com/random/200x200/?avatar,person" class="img-thumbnailborder-0 rounded-circle" alt="...">
                        </center>
                    </div>
                </div>

                {{-- Section Contact --}}
                <section>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="fw-bold text-danger border-bottom border-1 border-danger pb-2">Contact</h5>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-2">
                            <a class="btn btn-sm btn-outline-danger bg-dark text-danger fw-bold rounded-circle">
                                <i class="bi bi-geo-alt"></i>
                            </a>
                        </div>
                        <div class="col-10">
                            <small class="text-white">Bandung, West Java, Indonesia</small>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-2">
                            <a class="btn btn-sm btn-outline-danger bg-dark text-danger fw-bold rounded-circle">
                                <i class="bi bi-telephone"></i>
                            </a>
                        </div>
                        <div class="col-10">
                            <small class="text-white">(+62) 851-5791-5115</small>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-2">
                            <a class="btn btn-sm btn-outline-danger bg-dark text-danger fw-bold rounded-circle">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                        <div class="col-10">
                            <small class="text-white">jaleisme.id@gmail.com</small>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-2">
                            <a class="btn btn-sm btn-outline-danger bg-dark text-danger fw-bold rounded-circle">
                                <i class="bi bi-globe"></i>
                            </a>
                        </div>
                        <div class="col-10">
                            <small class="text-white">jaleisme.github.io</small>
                        </div>
                    </div>
                </section>

                {{-- Section Education --}}
                <section class="mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="fw-bold text-danger border-bottom border-1 border-danger pb-2">Education</h5>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-12">
                            <span class="fw-bold text-white">Informatics Engineering</span>
                            <br>
                            <small class="text-white">UIN Sunan Gunung Djati Bandung</small>
                            <br>
                            <small class="text-danger">2020 - now</small>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-12">
                            <span class="fw-bold text-white">Software Engineering</span>
                            <br>
                            <small class="text-white">SMKN 1 Katapang Bandung</small>
                            <br>
                            <small class="text-danger">2017 - 2020</small>
                        </div>
                    </div>
                </section>

                {{-- Section Skills --}}
                <section class="mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="fw-bold text-danger border-bottom border-1 border-danger pb-2">Skills</h5>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center mt-3">
                        <div class="col-12">
                            <small class="text-white">PHP Laravel</small>
                        </div>
                        <div class="col-12 mt-1">
                            <small class="text-white">MySQL</small>
                        </div>
                        <div class="col-12 mt-1">
                            <small class="text-white">Javascript / ES6 / JQuery</small>
                        </div>
                        <div class="col-12 mt-1">
                            <small class="text-white">HTML / CSS</small>
                        </div>
                        <div class="col-12 mt-1">
                            <small class="text-white">SASS / SCSS</small>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-7 offset-1 text-dark py-5">
                <div class="row">
                    <div class="col-12"></div>
                </div>
                <h1 class=""><span class="fw-bold">Faizal</span> Ramadhan</h1>
                <a class="fw-bold mb-3 btn btn-danger">Web Developer</a>
                <p><span class="fw-bold">My name is Faizal Ramadhan.</span> People called me 'Jale'. I'm a vocational high school graduates and also a sophomore at UIN Sunan Gunung Djati Bandung, majoring in Informatics Engineering. I love to learn everything about technology and based on that alone, i'm eager to learn and develop a technology that not only useful for myself, but also for everyone in the entire world.</p>

                {{-- Working Experiences --}}
                <div class="row">
                    <div class="col-12 mt-3 mb-3">
                        <h5 class="fw-bold text-dark border-bottom border-2 border-danger pb-2">Working Experiences</h5>
                    </div>
                    <div class="col-12">
                        <div class="list-group mb-5">
                            <a class="list-group-item text-dark d-flex gap-3 py-3 align-items-center" aria-current="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                </svg>
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-0">Junior Web Developer</h6>
                                        <small class="opacity-75">JPP Project Bandung</small>
                                    </div>
                                    <small class="opacity-50 text-nowrap">2020 - now</small>
                                </div>
                            </a>
                            <a class="list-group-item text-dark d-flex gap-3 py-3 align-items-center" aria-current="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                </svg>
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-0">UI/UX Designer</h6>
                                        <small class="opacity-75">Simple School</small>
                                    </div>
                                    <small class="opacity-50 text-nowrap">2019 - 2020</small>
                                </div>
                            </a>
                            <a class="list-group-item text-dark d-flex gap-3 py-3 align-items-center" aria-current="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                </svg>
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-0">Junior Web Developer</h6>
                                        <small class="opacity-75">Sociocaster</small>
                                    </div>
                                    <small class="opacity-50 text-nowrap">2018 - 2019</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Organizational Experiences --}}
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5 class="fw-bold text-dark border-bottom border-2 border-danger pb-2">Organizational Experiences</h5>
                    </div>
                    <div class="col-12">
                        <div class="list-group">
                            <a class="list-group-item text-dark d-flex gap-3 py-3 align-items-center" aria-current="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-0">UI/UX Designer</h6>
                                        <small class="opacity-75">Google Developer Student Club UIN SGD</small>
                                    </div>
                                    <small class="opacity-50 text-nowrap">2021 - now</small>
                                </div>
                            </a>
                            <a class="list-group-item text-dark d-flex gap-3 py-3 align-items-center" aria-current="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="fw-bold mb-0">General Secretary</h6>
                                        <small class="opacity-75">BSO Android Informatics Engineering UIN SGD</small>
                                    </div>
                                    <small class="opacity-50 text-nowrap">2021 - now</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
