<link rel="icon" href="{{ asset('image/Nepal.png') }}">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="{{ asset('assets/mdb/css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
<link href="{{ asset('assets/mdb/css/addons/datatables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/nepali.datepicker.v3.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
<link rel="stylesheet" href="{{ asset('assets/fonts/font.css') }}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
{{-- <link href="{{ asset('assets/mdb/css/mdb.min.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<style>
    @font-face {
        font-family: Kalimati;
        src: url("{{ asset('assets/fonts/Kalimati.ttf') }}") format('truetype');

    }

    .sidebar-header {
        width: 96%;
        height: 60px;
        background-color: #fff;
        position: relative;
        left: 2%;
        top: 3px;
    }

    .my-nav {
        height: 65px;
        align-items: center;
        width:100%;
        /* margin-left: 1.5%; */
        background-color: #1C4267;
    }


    /* .unicode-font {
        /* font-family: 'noto';
    } */
</style>



<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@stack('styles')
