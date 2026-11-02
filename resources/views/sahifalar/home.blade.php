@extends('shablon.layout')
@section('asosiy_qism')
<div class="bg-light container shadow-lg px-4">
  <h2 class="text-info display-6 my-4">
    Short Introduction
  </h2>
  <img src="../rasmlar/bio.jpg" alt="muallif rasmi" class="rounded shadow float-start me-4 mb-3 home_img" />
  <div class="matn_soha">
    <p>
      <b>Rashidov Akbar Ergash ugli</b> - Associate Professor of the Department of Artificial Intelligence and Information Systems at Samarkand State University named after Sharof Rashidov. On December 27, 2023, he successfully defended his PhD dissertation on the topic <b>“Algorithms for Optimal Distribution of Data Flows”</b> at the National Research University "Tashkent Institute of Irrigation and Agricultural Mechanization Engineers institute", which is ranked 469th in the QS World University Rankings.
    </p>
    <p>
      During his scientific career, he has published more than {{$jami}} articles,
      {{$scopus}} of which are indexed in the international Scopus and Web of Science databases. He is also a co-author of 1 handbook and 1 methodological guide for completing laboratory assignments.
    </p>
    <p>
      <b>Email addresses: </b><br />
      For information exchange regarding students and the educational process
      <b>forstudentsand@gmail.com</b>;
      For contact regarding scientific research <b>researcher.are@gmail.com</b>;
      University email address <b>researcher.are@samdu.uz</b><br />
    </p>
  </div>
</div>
@endsection

