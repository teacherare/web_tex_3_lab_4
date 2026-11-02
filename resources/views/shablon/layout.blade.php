<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ARE</title>
  <link rel="icon" href="{{ asset('rasmlar/my_favicon.png') }}" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Audiowide&effect=outline" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" />
  <link rel="stylesheet" href="{{ asset('css/boots_style.css') }}">
</head>

<body>
  <!-- sayt sarlavhasi -->
  <header class="p-3 mb-1 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="d-flex align-items-center mb-2 mb-lg-0">
          <b>Rashidov Akbar Ergash ugli </b>
        </div>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-link px-2 link-dark">PhD, Associate Professor</li>
          <li class="nav-link px-2 link-dark">tel: +998941816422</li>
          <li class="nav-link px-2 link-dark">email: forstudentsand@gmail.com</li>
        </ul>
        <form class="col-10 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
        </form>
        <div class="dropdown text-end col-2 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fi fi-gb"></span>
          </a>
          <ul class="dropdown-menu text-small" style="z-index: 9999;">
            <li>
              <a class="dropdown-item" href="#"><span class="fi fi-gb"></span> English</a>
            </li>
            <li>
              <a class="dropdown-item" href="../uz/index.html"><span class="fi fi-uz"></span> Uzbek</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- sayt navbari -->
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top" aria-label="Twelfth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-sm-center" id="navbarsExample10">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('edu')}}">Education</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('exp')}}">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('pub')}}">Publications</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('teach')}}">Teaching</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('stud')}}">Students</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('other')}}">Others</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('conn')}}">Connection</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="d-flex flex-nowrap">
    <!-- Sidebar -->
    <div>
      <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#side">
        =
      </button>
      <div class="flex-shrink-0 p-3 bg-secondary offcanvas offcanvas-start" style="width: 200px" id="side">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#edu-collapse">
              Education
            </button>
            <div class="collapse show" id="edu-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('edu')}}#maktab" class="link-light">School</a>
                </li>
                <li>
                  <a href="{{route('edu')}}#kollej" class="link-light">College</a>
                </li>
                <li>
                  <a href="{{route('edu')}}#bakalavr" class="link-light">Bachelor</a>
                </li>
                <li>
                  <a href="{{route('edu')}}#magistr" class="link-light">Master</a>
                </li>
                <li>
                  <a href="{{route('edu')}}#phd" class="link-light">PhD</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#exp-collapse">
              Experience
            </button>
            <div class="collapse" id="exp-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('exp')}}#asosiy_1" class="link-light">Main activity</a>
                </li>
                <li>
                  <a href="{{route('exp')}}#qoshimcha_1" class="link-light">Additional activities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#pub-collapse">
              Publications
            </button>
            <div class="collapse" id="pub-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('pub')}}#scopus_j" class="link-light">Scopus Journals</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#scopus_k" class="link-light">Scopus Conferences</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#xalqaro_j" class="link-light">International Journals</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#respublika_j" class="link-light">Local Journals</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#xalqaro_k" class="link-light">International Conferences </a>
                </li>
                <li>
                  <a href="{{route('pub')}}#respublika_k" class="link-light">Local Conferences</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#dgu" class="link-light">Software License</a>
                </li>
                <li>
                  <a href="{{route('pub')}}#qullanma" class="link-light">Handbooks</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#teach-collapse">
              Teaching
            </button>
            <div class="collapse" id="teach-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('teach')}}#asosiy_2" class="link-light">Main subjects</a>
                </li>
                <li>
                  <a href="{{route('teach')}}#qoshimcha_2" class="link-light">Additional subjects</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#stud-collapse">
              Students
            </button>
            <div class="collapse" id="stud-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('stud')}}#bakalavr_1" class="link-light">Bachelor</a>
                </li>
                <li>
                  <a href="{{route('stud')}}#magistr_1" class="link-light">Master</a>
                </li>
                <li>
                  <a href="{{route('stud')}}#boshqa" class="link-light">Others</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn collapsed" data-bs-toggle="collapse" data-bs-target="#other-collapse">
              Others
            </button>
            <div class="collapse" id="other-collapse">
              <ul class=" list-unstyled pb-1 small">
                <li>
                  <a href="{{route('other')}}#oila" class="link-light">Family</a>
                </li>
                <li>
                  <a href="{{route('other')}}#yutuqlar" class="link-light">Achievements</a>
                </li>
                <li>
                  <a href="{{route('other')}}#qiziqishlar" class="link-light">Interests</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- asosiy qism -->
    
      @yield('asosiy_qism')
    
  </main>

  <div class="container">
    <footer class="py-5 border-top">
      <div class="row">
        <div class="col-12 col-md-4 mb-1">
          <h6>Rashidov Akbar Ergash ugli</h6>
          <ul class="nav flex-column">
            <li class="nav-item mb-1">
              <a href="https://orcid.org/0000-0001-7510-5841" target="_blank" class="nav-link p-0 text-body-secondary">
                <p>Orcid Id: 0000-0001-7510-5841</p>
              </a>
            </li>
            <li class="nav-item mb-1">
              <a href="{{ asset('files/cv.pdf')}}" target="_blank" class="nav-link p-0 text-body-secondary">
                <p>Download CV</p>
              </a>
            </li>
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary">forstudentsand@gmail.com</p>
            </li>
          </ul>
        </div>

        <div class="col-12 col-md-4  mb-1">
          <h6>TeachProfile</h6>
          <ul class="nav flex-column">
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary">Last Update Date: <i>dd.mm.yyyy</i></p>
            </li>
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary"> Number of Messages/Comments Left: <i>xxxxx</i></p>
            </li>
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary"> Latest Commenter (or Last User): <i>_______</i></p>
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-4  mb-1">
          <h5 style="visibility:hidden;">.</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-1">
              <p class=" text-body-secondary">Site Launch Date: <i>dd.mm.yyyy</i></p>
            </li>
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary"> Total Visits (or Pageviews): <i>xxxxx</i></p>
            </li>
            <li class="nav-item mb-1">
              <p class="nav-link p-0 text-body-secondary">Real-time Online Users: <i>xxxxx</i></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2025 ARE, All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3">
            <a href="https://t.me/a_r_e_22" target="_blank" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;" title="Telegram">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M23.91 3.79L20.3 20.84c-.25 1.21-.98 1.5-2 .94l-5.5-4.07-2.66 2.57c-.3.3-.55.56-1.1.56-.72 0-.6-.27-.84-.95L6.3 13.7l-5.45-1.7c-1.18-.35-1.19-1.16.26-1.75l21.26-8.2c.97-.43 1.9.24 1.53.94" />
              </svg>
            </a>
          </li>
          <li class="ms-3">
            <a href="https://wa.me/998941816422" target="_blank" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
              style="width:44px; height:44px;" title="WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M20.52 3.48A11.86 11.86 0 0 0 12 .02 11.9 11.9 0 0 0 .02 12c0 2.1.55 4.08 1.6 5.85L.01 24l6.4-1.65A11.9 11.9 0 0 0 12 24a11.86 11.86 0 0 0 8.52-3.48A11.9 11.9 0 0 0 24 12a11.9 11.9 0 0 0-3.48-8.52zM12 21.5a9.4 9.4 0 0 1-5-1.35l-.36-.2-3.8.98.98-3.7-.22-.37A9.4 9.4 0 1 1 12 21.5z" />
                <path d="M17.5 14.2c-.3-.15-1.78-.88-2.05-.98-.28-.1-.48-.15-.68.15s-.78.98-.96 1.18c-.18.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.49-.9-.8-1.5-1.78-1.68-2.08-.18-.3-.02-.46.13-.61.13-.13.3-.34.45-.52.15-.18.2-.3.3-.5.1-.2 0-.37-.05-.52-.05-.15-.68-1.63-.93-2.23-.24-.59-.49-.51-.68-.52l-.58-.01c-.2 0-.52.07-.8.37-.28.3-1.06 1.04-1.06 2.52s1.09 2.93 1.24 3.14c.15.22 2.14 3.36 5.2 4.71 3.05 1.35 3.05.9 3.6.85.56-.05 1.78-.72 2.04-1.41.26-.7.26-1.3.18-1.41-.07-.1-.27-.15-.57-.3z" />
              </svg>
            </a>
          </li>
          <li class="ms-3">
            <a href="https://www.scopus.com/authid/detail.uri?authorId=57463410100" target="_blank" class="btn btn-outline-warning rounded-circle d-inline-flex align-items-center justify-content-center"
              style="width:44px; height:44px;" title="Scopus">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <text x="50%" y="65%" text-anchor="middle" font-weight="700" font-size="20" fill="currentColor" dominant-baseline="middle">
                  SC
                </text>
              </svg>
            </a>
          </li>
          <li class="ms-3">
            <a href="https://scholar.google.com/citations?user=_zl-wjYAAAAJ&hl=ru" target="_blank" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;" title="Google Scholar">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zM7 14.2V20h2v-4.8l-2-.99zM11 17v3h2v-3h-2zM15 14.2V20h2v-5.8l-2 .8z" />
              </svg>
            </a>
          </li>
          <li class="ms-3">
            <a href="https://www.samdu.uz/en/pages/suniy_intellekt_va_axborot_tizimlari_kafedrasi1" target="_blank" class="btn btn-outline-info rounded-circle d-inline-flex align-items-center justify-content-center"
              style="width:44px; height:44px;" title="University web link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 64 64" fill="currentColor" aria-hidden="true">
                <path d="M8 50v4h48v-4H8zm4-8h8v-8h-8v8zm12 0h8v-8h-8v8zm12 0h8v-8h-8v8zM6 44l26-22 26 22v6H6v-6zM32 12L6 34h52L32 12z" />
                <path d="M30 40h4v6h-4z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>