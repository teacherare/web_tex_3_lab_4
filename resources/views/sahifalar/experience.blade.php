@extends('shablon.layout')
@section('asosiy_qism')
<div class="bg-light container shadow-lg px-4">
  <h2 class="text-info display-6 my-4">Work Experience</h2>
  <div class="matn_soha">
    <h3 id="asosiy_1">Main Professional Activity</h3>
    <div class="bg-success p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#m1">
      <b>Associate Professor </b>
      <span class="badge bg-info  float-end p-2">July 2025 - Present</span>
    </div>
    <div id="m1" class="collapse show">
      <h5>Samarkand State University named after Sharof Rashidov</h5>
      <h6 class="mt-2 text-primary">Main activities and responsibilities</h6>
      <ul>
        <li>Conducting lectures and classes for students</li>
        <li>Supervising and providing guidance on students' scientific and creative projects</li>
        <li>Carrying out scientific research within my own research field</li>
        <li>
          Supporting young teachers by offering advice and guidance to help them improve their teaching performance and confidence in the classroom
        </li>
      </ul>
    </div>

    <div class="bg-success p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#m2">
      <b>Head of the Department </b>
      <span class="badge bg-info  float-end p-2">February 2024 - July 2025</span>
    </div>
    <div id="m2" class="collapse">
      <h5>Samarkand State University named after Sharof Rashidov</h5>
      <h6 class="mt-2 text-primary">Main activities and responsibilities</h6>
      <ul>
        <li>
          Assisting in the organization of educational and scientific activities of the department and regular control
        </li>
        <li>
          Organization of international relations of the department
        </li>
        <li>
          Giving lectures to students and giving advice on their professional development
        </li>
        <li>
          Organization of various spiritual educational events held in the department
        </li>
        <li>
          Supporting young teachers by offering advice and guidance to help them improve their teaching performance and confidence in the classroom
        </li>
        <li>Carrying out scientific research within my own research field</li>
      </ul>
    </div>

    <div class="bg-success p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#m3">
      <b>PhD Student</b>
      <span class="badge bg-info  float-end p-2">January 2022 - February 2024</span>
    </div>
    <div id="m3" class="collapse">
      <h5>Samarkand State University named after Sharof Rashidov</h5>
      <h6 class="mt-2 text-primary">Main activities and responsibilities</h6>
      <ul>
        <li>
          Conducting research within the topic of optimal distribution of data flow
        </li>
        <li>
          Supporting the head of the department and academic staff in organizing and enhancing the department's scientific and educational activities
        </li>
      </ul>
    </div>

    <div class="bg-success p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#m4">
      <b>Assistant Teacher</b>
      <span class="badge bg-info  float-end p-2">September 2019 - January 2022</span>
    </div>
    <div id="m4" class="collapse">
      <h5>Samarkand State University named after Sharof Rashidov</h5>
      <h6 class="mt-2 text-primary">Main activities and responsibilities</h6>
      <ul>
        <li>
          Giving lectures to students and giving advice on their professional development
        </li>
        <li>
          Assisting the head of the department in organizing the activities of the department
        </li>
      </ul>
    </div>

    <!--  Slaydlar -->
    <div class="row">
      <div class="col-12 col-md-6 mb-1">
        <!-- Asosiy ish Slayd -->
        <div id="m_work" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#m_work" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#m_work" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#m_work" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#m_work" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#m_work" data-bs-slide-to="4"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="500">
              <img src="../rasmlar/ish_tajriba/Fakultet jamoasi.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>Members of our faculty</h4>
                <p>10.05.2023</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
              <img src="../rasmlar/ish_tajriba/KAFEDRA BAYRAM.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4> Our department teachers are on holiday </h4>
                <p>28.12.2022</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="1500">
              <img src="../rasmlar/ish_tajriba/KAFEDRA BMI HIMOYA_2023.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>Bachelors' Thesises Defense</h4>
                <p>17.06.2022</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="../rasmlar/ish_tajriba/KAFEDRA.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>Department Meeting</h4>
                <p>14.01.2025</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2500">
              <img src="../rasmlar/ish_tajriba/mag himoya 2025.JPG" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h3>Defense of the Masters' Thesises</h3>
                <p>26.06.2025</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#m_work" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#m_work" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-1">
        <!-- Qo'shimcha ish Slayd -->
        <div id="e_work" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#e_work" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#e_work" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#e_work" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#e_work" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#e_work" data-bs-slide-to="4"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="500">
              <img src="../rasmlar/ish_tajriba/qushimcha/ICABICS FEVRAL.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4> ICABCS 2023 </h4>
                <p>24-25.02.2023</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
              <img src="../rasmlar/ish_tajriba/qushimcha/ICABICS FEVRAL_1.jpg" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4> ICAIIT-2023 </h4>
                <p>3-4.11.2023</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="1500">
              <img src="../rasmlar/ish_tajriba/qushimcha/VIT SPEAKER_1200.JPG" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>VITTechLead 24</h4>
                <p>8-9.10.2024</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="../rasmlar/ish_tajriba/qushimcha/VIT SPEAKER_400.JPG" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>VITTechLead 24</h4>
                <p>8-9.10.2024</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2500">
              <img src="../rasmlar/ish_tajriba/qushimcha/VIT interview.JPG" class="d-block mx-auto w-100">
              <div class="carousel-caption">
                <h4>VITTechLead 24</h4>
                <p>8-9.10.2024</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#e_work" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#e_work" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>

    <h3 class="mb-2" id="qoshimcha_1">
      Additional Activities Performed in Parallel with Main Professional Responsibilities
    </h3>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew0">
      <b>Peer Reviewer for MDPI Journals</b>
      <span class="badge bg-light text-dark float-end p-2">August 2025 - Present</span>
    </div>
    <div id="ew0" class="collapse show">
      <h5 class="mt-2 text-primary">MDPI Journals</h5>
      <p>
        To date, I have reviewed nearly ten manuscripts submitted to Mathimatics, Process, and Symmetry journals, which are published by MDPI. For my contributions as a peer reviewer, I have also been awarded special vouchers by the publisher.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew5">
      <b>International Summit Speaker</b>
      <span class="badge bg-light text-dark float-end p-2">October 8-9 2024</span>
    </div>
    <div id="ew5" class="collapse">
      <h5 class="mt-2 text-primary">VIT Technology Leadership Summit (VITTechLead 24)</h5>
      <p>
        I was invited as a speaker to the VIT Technology Leadership Summit (VITTechLead 24), organized by the Chennai campus of the Vellore Institute of Technology (VIT), India, and participated with my presentation titled “Innovating Teaching Strategies Using Technology”.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew6">
      <b>Secretary of the Scientific Seminar</b>
      <span class="badge bg-light text-dark float-end p-2">January 2024 - Present</span>
    </div>
    <div id="ew6" class="collapse">
      <h5 class="mt-2 text-primary">Secretary of the Interdepartmental Scientific Seminar of the Faculty of Artificial Intelligence and Digital Technologies, Samarkand State University named after Sharof Rashidov</h5>
      <p>
        Within this interdepartmental seminar, researchers of our faculty, as well as scholars from other universities and institutes, present the results of their research, receive feedback and recommendations, and obtain guidance on whether their research can proceed to the next stage of scientific defense (or whether an additional seminar is required).
        My primary responsibilities include assisting researchers in preparing the required documents for participation in the seminar and preparing the official seminar minutes. I am also responsible for disseminating seminar announcements, informing faculty members about the upcoming sessions, and providing participants with relevant information about the presenting researchers. To date, I have served as secretary for seminars involving the following researchers: Narkulov Odil Oltinbekovich (PhD), Jalelova Malika Moyatdin qizi (PhD), Yarmatov Sherzodjon Shokir og'li (PhD), Khuramov Latif Yakubboy og'li (PhD), Turakulov Otabek Kholmirzayevich (PhD), Asrayev Muhammadmullo Abdullajon og'li, Babadjanov Elmurod Satimbayevich (DSc), Matlatipov San'atbek G'ayratovich (PhD), Abdiyeva Habiba (PhD), Gaybulov Qodirjon Murtozoyevich (PhD), Jamalova Gulchexra Babakulovna (PhD), Nosirov Khabibullo Khikmatullo og'li (DSc), Djabbarov Botirjon Begimovich (PhD), Safarov Rustam Abdullayevich (PhD), Yarashov Inomjon Kakhramon og'li (PhD), Boyjumanov Abdusattor Abduqodirovich (PhD), Dusanov Khurshid Toshpulotovich (PhD), Kuvandikov Jo'ra Tursunabyevich (PhD), Umarov Abdumannon Abdullaevich (PhD), Abdurazzoqov Javohir Rustamovich (PhD), Shaazizova Madina Eldarovna (PhD), Muldanov Fayzi Riskulovich (PhD), …
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew7">
      <b>Reviewer of Scientific and Educational-Methodological Works</b>
      <span class="badge bg-light text-dark float-end p-2">March 2024 - Present</span>
    </div>
    <div id="ew7" class="collapse">
      <h5 class="mt-2 text-primary">Reviewer of Scientific Research Projects, Dissertation Abstracts, and Educational Textbooks/Manuals</h5>
      <p>
        I served as a reviewer at the scientific (problem-based) seminar under the academic council for the PhD dissertation of
        Kuvandikov Jo'ra Tursunbayevich, titled “Logical inference models and algorithms for representing knowledge based on learning indicators in managing the teaching process,” written for the degree of Doctor of Philosophy (PhD) in Technical Sciences, specialty 05.01.02 - System Analysis, Control, and Information Processing.
      </p>
      <p>
        I reviewed the dissertation abstract of Kayumov Oybek Achilovich, titled “Methodology for creating and using an interactive intelligent electronic educational resource,” submitted for the PhD degree in Pedagogical Sciences, specialty 13.00.06 - Theory and Methodology of E-learning (by fields and levels of education).
      </p>
      <p>
        I also reviewed the dissertation abstract of Hasanov Umid Jumayevich, titled “Improving the methodology for developing students' information-technological competence in a virtual learning environment (on the example of the subject 'Information Technologies in Technical Systems'),” submitted for the PhD degree in Pedagogical Sciences, specialty 13.00.02 - Theory and Methodology of Education and Training (Technical Sciences).
      </p>
      <p>
        Additionally, I reviewed the dissertation abstract of Tuxtamurodov Nozir Ulmas og'li, titled “Algorithms for intelligent data analysis under singularity conditions,” written for the PhD degree in Technical Sciences, specialty 05.01.11 - Digital Technologies and Artificial Intelligence.
      </p>
      <p>
        Furthermore, I have provided reviews for several educational manuals, master's theses, and bachelor's graduation projects.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew8">
      <b>Commission Member</b>
      <span class="badge bg-light text-dark float-end p-2">March 2024 - Present</span>
    </div>
    <div id="ew8" class="collapse">
      <h5 class="mt-2 text-primary">Member of the commission responsible for attestation processes within the system of higher and postgraduate education.</h5>
      <p>
        By Order No. 179-ij dated May 7, 2024, issued by Sharof Rashidov Samarkand State University,
        I served as a member of the examination board for administering the qualification exam in the specialty
        05.01.01 - Engineering Graphics and Computer Graphics; Audio and Video Technologies.
      </p>
      <p>
        By Order No. 449-ij dated November 19, 2024, of Sharof Rashidov Samarkand State University,
        I served as a member of the commission conducting interview examinations for admission to basic doctoral studies
        (05.01.02 - System Analysis, Control, and Information Processing).
      </p>
      <p>
        By Order No. 500-ij dated December 19, 2024, titled
        “On monitoring the performance of doctoral students, trainee researchers, and independent researchers,”
        I served as a member of the working group for the field 05.00.00 - Technical Sciences.
      </p>
      <p>
        By Order No. 69-ij dated February 25, 2025,
        I served as a member of the working group for administering the independent researcher admission examinations
        in the field 05.00.00 - Technical Sciences for the second quarter of 2025.
      </p>
      <p>
        By Resolution No. 347/2 of the Presidium of the Higher Attestation Commission of the Republic of Uzbekistan
        dated December 29, 2023, I am a member of the scientific seminar under the Scientific Council
        PhD.03/29.12.2023.T.02.12 at Samarkand State University.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew2">
      <b>Junior Researcher</b>
      <span class="badge bg-light text-dark float-end p-2">November 2022 - November 2024</span>
    </div>
    <div id="ew2" class="collapse">
      <h5 class="mt-2 text-primary">Jizzakh Branch of the National University of Uzbekistan named after Mirzo Ulugbek</h5>
      <p>
        Junior Researcher of the project “Sound and Text Transcript” (Project No. IL-412104529), aimed at developing an intelligent software product for recognizing and processing speech signals to generate text transcripts, under the Jizzakh Branch of the National University of Uzbekistan named after Mirzo Ulugbek.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew3">
      <b>Conference Technical Support Staff</b>
      <span class="badge bg-light text-dark float-end p-2">February 24-25 2023 </span>
    </div>
    <div id="ew3" class="collapse">
      <h5 class="mt-2 text-primary">International Conference on Artificial Intelligence, Blockchain, Computing and Security (ICABCS 2023)</h5>
      <p>
        I served as a technical staff member (volunteer) for an international Scopus-indexed conference organized by Galgotias University (India), within its special session hosted at Samarkand State University: “Solutions for Application of Machine Learning and Blockchain Technologies.” My primary responsibilities included providing Uzbek participants and authors with information regarding the conference requirements and submission guidelines, as well as assisting in facilitating the afternoon presentation sessions. Additionally, I was responsible for preparing and delivering reports on participants' presentations to the Indian organizing committee as required.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew4">
      <b>Conference Technical Support Staff</b>
      <span class="badge bg-light text-dark float-end p-2">November 3-4 2023</span>
    </div>
    <div id="ew4" class="collapse">
      <h5 class="mt-2 text-primary">International Conference on Artificial Intelligence and Information Technologies (ICAIIT-2023)</h5>
      <p>
        I served as a technical staff member (volunteer) at this international conference organized by the Faculty of Intelligent Systems and Computer Technologies of Samarkand State University. Although it was initially intended to be indexed in the Scopus database, it unfortunately did not proceed as planned. My main responsibilities included assisting Indian presenters in participating in the conference, providing other authors with information regarding the conference submission requirements and participation guidelines, offering general support during the event, and facilitating the afternoon presentation sessions.
      </p>
    </div>

    <div class="bg-primary p-3 text-light mb-2 kursor" data-bs-toggle="collapse" data-bs-target="#ew1">
      <b>Mathematics Tutor</b>
      <span class="badge bg-light text-dark float-end p-2">September 2017 - July 2019 & September 2020 - July 2021</span>
    </div>
    <div id="ew1" class="collapse">
      <h5 class="mt-2 text-primary">Bulungur Education</h5>
      <p>
        My primary responsibility was preparing my applicants for the university entrance examinations conducted by the State Testing Center (DTM). This included providing intensive instruction based on school and lyceum mathematics textbooks. In fact, this has been one of the main professional activities I have consistently performed — and truly enjoyed — throughout my teaching experience.
      </p>
    </div>

  </div>
</div>
@endsection