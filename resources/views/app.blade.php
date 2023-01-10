<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} |
        @endisset {{ config('app.name', __('appname')) }}


    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link href="{{ asset('mystyle.css') }}" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Noto+Serif&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@1,300&display=swap');
    </style>

</head>

<body class="sidebar-opened" style="background-color: #ECF0F3">

    <div id="app">

        <router-view></router-view>
    </div>

    @include('layouts.partials.scripts')
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function(event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/nepali-date-converter/dist/nepali-date-converter.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<script>
    function Time() {
        var date = new Date();
        // document.getElementById('current_ad_date').innerText = date;
        var hour = date.getHours();
        var minute = date.getMinutes();
        var second = date.getSeconds();

        var period = "";
        if (hour >= 12) {
            period = "PM";
        } else {
            period = "AM";
        }

        if (hour == 0) {
            hour = 12;
        } else {
            if (hour > 12) {
                hour = hour - 12;
            }
        }
        hour = update(hour);
        minute = update(minute);
        second = update(second);

        document.getElementById("digital-clock").innerText = hour + " : " + minute + " : " + second + " " + period;

        setTimeout(Time, 1000);
    }

    function update(t) {
        if (t < 10) {
            return "0" + t;
        } else {
            return t;
        }
    }

    Time();
</script>

<script>
    let curr = new Date
    let week = []

    for (let i = 1; i <= 7; i++) {
        let first = curr.getDate() - curr.getDay() + i
        let day = new Date(curr.setDate(first)).toISOString().slice(0, 10)
        week.push(day)
    }
    let i = 0;

    while (i < week.length) {
        console.log(week[i]);
        var todayDate = new Date().toISOString().slice(0, 10);        
        if(week[i]==todayDate){
            break;
        }
        i++;
    }
    if(i+1==1){
        document.getElementById('current_ad_date').innerHTML='Mon ' + todayDate;
    }
    if(i+1==2){
        document.getElementById('current_ad_date').innerHTML='Tue ' + todayDate;
    }
    if(i+1==3){
        document.getElementById('current_ad_date').innerHTML='Wed ' + todayDate;
    }
    if(i+1==4){
        document.getElementById('current_ad_date').innerHTML='Thu ' + todayDate;
    }
    if(i+1==5){
        document.getElementById('current_ad_date').innerHTML='Fri ' + todayDate;
    }
    if(i+1==6){
        document.getElementById('current_ad_date').innerHTML='Sat ' + todayDate;
    }
    if(i+1==7){
        document.getElementById('current_ad_date').innerHTML='Sun ' + todayDate;
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  autoplay:{
    delay:300,
    disableOnInteraction:false,
  },
  loop: true,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40
    }
  }
});
</script>
</html>
