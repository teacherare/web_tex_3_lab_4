@extends('shablon.layout')
@section('asosiy_qism')
<div class="bg-light container shadow-lg px-4">
  <h2 class="text-info display-6 my-4">My Students</h2>
  <div class="toast show matn_soha">
    <div class="toast-header">
      <strong>
        This page provides brief information about students whom I taught during their bachelor's, master's, or pre-university (applicant) periods and who, either formally or informally, have maintained a mentor-mentee relationship with me.
      </strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <p>A request to students:
        The information presented on this page is based on the data currently available to me.
        If there are any inaccuracies in your information, or if your details have not been included at all, please send the correct information (your full name, your photo — preferably both from your study period and your current one, when and where I supervised or assisted you, and information about your current occupation).
        You may submit your details through the form on the “Contact” page, or via Telegram or email.
        By doing so, you will help improve and enrich the content of our website.
      </p>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 my-2" id="bakalavr_1">
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Rifat_1.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Mavlonov Rifat</h4>
          <p class="card-text small">Informatics (Computer Science) Teacher at School No. 53, Oqdaryo District, Samarkand Region</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Rifat">
            See Profile
          </button>
        </div>
      </div>
    </div>

    <!-- The Modal Rifat-->
    <div class="modal" id="Rifat">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Mavlonov Rifat</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body matn_soha">
            <div class="col-12 col-sm-6 col-md-3">
              <img src="../rasmlar/shogirdlar/Rifat_2.jpg" class="float-start img-thumbnail m-2">
            </div>
            Mavlonov Rifat graduated in the 2024-2025 academic year with a bachelor's degree in Computer Science and Programming Technologies. I supervised his Bachelor's Graduation Thesis titled “Design and Development of a Parking Management Web Application.” Rifat was a quiet, humble, and hardworking student. During the preparation of his graduation thesis, he achieved notable results: he published one article in a national journal included in the Higher Attestation Commission (HAC) list, and he received an official Certificate from the Intellectual Property Agency for the web application he developed.
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Javohir.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Qurbonov Javohir</h4>
          <p class="card-text small">Fourth-Year Undergraduate Student in Computer Science and Programming Technologies</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Javohir">
            See Profile
          </button>
        </div>
      </div>
    </div>

    <!-- The Modal Javohir -->
    <div class="modal" id="Javohir">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Mavlonov Rifat</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body matn_soha">
            <div class="col-12 col-sm-6 col-md-3">
              <img src="#" class="float-start img-thumbnail m-2">
            </div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit repellat ullam voluptates expedita fugiat, vel modi dignissimos sapiente delectus eum molestias aperiam autem voluptatum, nobis nisi cumque quas dolores veniam?
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/odam.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text small">Informatics (Computer Science) Teacher at School No. 53, Oqdaryo District, Samarkand Region</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/odam.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text small">Fourth-Year Undergraduate Student in Computer Science and Programming Technologies</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 my-2" id="magistr_1">
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Sherzod_1.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Tursunov Sherzod</h4>
          <p class="card-text small">Second-Year Master's Degree Student in the Artificial Intelligence Program</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Sherzod">
            See Profile
          </button>
        </div>
      </div>
    </div>

    <!-- The Modal Sherzod -->
    <div class="modal" id="Sherzod">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tursunov Sherzod</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body matn_soha">
            <div class="col-12 col-sm-6 col-md-3">
              <img src="#" class="float-start img-thumbnail m-2">
            </div>
            Tursunov Sherzod was admitted to the Master's program in Artificial Intelligence on a state grant in 2024. Since then, I have been supervising his Master's dissertation titled “Methods for Form Transformation in Textual Data for Artificial Intelligence Algorithms.” To date, his research has resulted in publications in two international journals under the jurisdiction of the Higher Attestation Commission (HAC), two national journals, and two conference proceedings. In addition, he has obtained an official Certificate from the Intellectual Property Agency for the software product developed within the scope of his research. In April-July 2025, he successfully completed one semester at Free Berlin University-which is ranked among the world's Top 100 universities—through an academic exchange program.
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Eshtemirova.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Eshtemirova Feruza</h4>
          <p class="card-text small">First-Year Master's Degree Student in Information Systems</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/odam.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text small">Fourth-Year Undergraduate Student in Computer Science and Programming Technologies</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/odam.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text small">Fourth-Year Undergraduate Student in Computer Science and Programming Technologies</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

  </div>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 my-2" id="boshqa">
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Quvoncbek_1.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Holboyev Quvonchbek</h4>
          <p class="card-text small">Senior Lieutenant of the National Guard of the Republic of Uzbekistan</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Quvonchbek">
            See Profile
          </button>
        </div>
      </div>
    </div>

    <!-- The Modal Quvonchbek -->
    <div class="modal" id="Quvonchbek">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Holboyev Quvonchbek</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body matn_soha">
            <div class="col-12 col-sm-6 col-md-3">
              <img src="#" class="float-start img-thumbnail m-2">
            </div>
            I taught Khollboyev Quvonchbek during 2018-2019 while conducting mathematics classes at the Bulungur Education Learning Center. In 2019, he was admitted to the University of Public Security of the Republic of Uzbekistan, which he successfully graduated from in 2023. During his applicant years, he stood out for his discipline and strong work ethic.
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Nodir.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Rashidov Nodir</h4>
          <p class="card-text small">Teacher of Mathematics and Informatics at the Specialized School in Samarkand District</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Jasur.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Togayev Jasurbek</h4>
          <p class="card-text small">Third-Year Student at the University of World Economy and Diplomacy</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="../rasmlar/shogirdlar/Akmal.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Omonov Akmal</h4>
          <p class="card-text small">Referent at the Bulungur District Administration of Samarkand Region</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection