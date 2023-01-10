<script type="text/javascript" src="{{ asset('assets/mdb/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mdb/js/addons/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/nepali.datepicker.v3.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/js/myjs.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $('#summernote').summernote({
        height: 200,
        width:1500
    });
</script>
@stack('scripts')
<script src="{{ mix('js/app.js') }}"></script>
