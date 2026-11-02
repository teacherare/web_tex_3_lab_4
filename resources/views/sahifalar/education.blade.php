@extends('shablon.layout')
@section('asosiy_qism')
<div class="bg-light container shadow-lg px-4">
  <h2 class="text-info display-6 my-4">Places of study</h2>
  <img src="../rasmlar/education.jpg" alt="Ta'lim xaritam" usemap="#edu" class="img-thumbnail shadow  me-4 mb-3 d-block ms-auto me-auto">
  <map name="edu">
    <area shape="rect" coords="542 267 616 337" href="#maktab" title="Bulung'ur tuman 6-maktab">
    <area shape="rect" coords="474 267 528 337" href="#kollej" title="Bulung'ur Iqtisodiyot va servis kolleji">
    <area shape="rect" coords="270 365 364 385" href="#bakalavr" title="Samarqand davlat universiteti">
    <area shape="rect" coords="168 319 246 346" href="#magistr" title="Samarqand davlat universiteti">
    <area shape="poly" coords="171 271 171 290 92 288 92 309 226 309 226 291 255 291 255 271" href="#phd" title="Samarqand davlat universiteti">
    <area shape="rect" coords="386 46 549 134" href="#phd" title="'Toshkent irrigatsiya va qishloq xo'jaligini mexanizatsiyalash  muhandislari instituti' Milliy tadqiqot universiteti">
    <area shape="circle" coords="466 257 10" href="#maktab" title="Bulung'ur tuman 6-maktab">
    <area shape="circle" coords="458 258 10" href="#kollej" title="Bulung'ur Iqtisodiyot va servis kolleji">
    <area shape="circle" coords="409 270 20" href="#bakalavr" title="Samarqand davlat universiteti">
    <area shape="circle" coords="484 193 20" href="#PhD" title="'Toshkent irrigatsiya va qishloq xo'jaligini mexanizatsiyalash  muhandislari instituti' Milliy tadqiqot universiteti">
  </map>
  <div class="matn_soha">
    <p id="maktab">
      <b>School.</b> I attended School No. 6 in the Bulungur District of the Samarkand Region from 2001 to 2010. I take great pride in my school and the dedicated teachers who guided me throughout those years. I am sincerely grateful to all my teachers for the knowledge, support, and inspiration they provided.
    </p>
    <p id="kollej">
      <b>College.</b> Between 2010 and 2013, I studied Banking at the Bulungur College of Economics and Services in the Bulungur District. My college years were truly a remarkable and formative period of my life. I was dedicated to my studies and successfully graduated with honors. Later, while pursuing my bachelor's degree, the strong foundation I gained in college allowed me to achieve excellent results in economics with ease.
      During my college years, I also attended additional courses in mathematics, physics, and my native language. The support and encouragement of the college administration and teachers played an essential role in my development, for which I express my sincere gratitude.
    </p>
    <p id="bakalavr">
      <b>Bachelor's Degree.</b> In 2013, I was admitted to the Applied Mathematics and Informatics program at Samarkand State University on a state scholarship. I would like to express my special gratitude to my teachers of mathematics, physics, and my native language for their invaluable guidance and support. At that time, being admitted to a university was already considered a great achievement; earning a state-funded place was an even greater honor, and being among the top five highest scorers was truly exceptional. I was fortunate to be one of those few. During my bachelor's studies, I maintained excellent academic performance — receiving top grades in all subjects and consistently earning the highest-level scholarship.
    </p>
    <p id="magistr">
      <b>Master's Degree.</b> Between 2017 and 2019, I pursued a Master's degree in Information Technologies in Education at Samarkand State University. I cannot say that I received the highest grades in every subject, but I excelled in my major courses, where I consistently achieved top marks. In some general subjects, I even had a few lower grades. Nevertheless, this period was a defining stage in my life — a time when I began to shape my future path. It was during these years that I set a clear goal for myself: to become a university lecturer.
    </p>
    <p id="phd">
      <b>PhD.</b> From January 1, 2022, to February 6, 2024, I was a PhD student at Samarkand State University, specializing in System Analysis, Control, and Information Processing (specialty code 05.01.02). On December 27, 2023, I successfully defended my PhD dissertation at the Tashkent Institute of Irrigation and Agricultural Mechanization Engineers - National Research University, which is ranked among the world's Top 500 universities. My dissertation defense was unanimously approved, and I was awarded the degree of Doctor of Philosophy (PhD) with a 100% positive vote.
    </p>
  </div>
</div>
@endsection