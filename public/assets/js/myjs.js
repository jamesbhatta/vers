window.onload = function () {
    var day=NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD').day;
    var month=NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD').month;
    var year=NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD').year;

    var todayDate=year+"-"+month+"-"+day;
    var mainInput = document.getElementById("darta_miti");
    if (mainInput) {
        mainInput.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });

    }



    var mainInput1 = document.getElementById("dob");
    if (mainInput1) {
        mainInput1.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }
    var mymainInput = document.getElementById("sachi_nepali_datepicker");
    if (mymainInput) {
        mymainInput.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }

    var mainInput2 = document.getElementById("nepali-datepicker");
    if (mainInput2) {
        mainInput2.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }

    var mainInput3 = document.getElementById("nepali-datepicker1");
    if (mainInput3) {
        mainInput3.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }

    var mainInput4 = document.getElementById("nepali-datepicker2");
    if (mainInput4) {
        mainInput4.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }
    var mainInput5 = document.getElementById("nepali-datepicker3");
    if (mainInput5) {
        mainInput5.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200
        });
    }
    var mainInput5 = document.getElementById("nepali-datepicker4");
    if (mainInput5) {
        mainInput5.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 200
        });
    }
    var mainInput5 = document.getElementById("nepali-datepicker5");
    if (mainInput5) {
        mainInput5.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            ndpYearCount: 200
        });
    }


};

function toggleSidebar() {
    document.getElementsByTagName('body')[0].classList.toggle('sidebar-opened')
}
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    if ($('.nepali-date')[0]) {
        $('.nepali-date').nepaliDatePicker({
            disableDaysAfter: 1,
            ndpYear: true,
            ndpMonth: true,
            disableAfter: todayDate,
            ndpYearCount: 200,

        });
    }

    var today = NepaliFunctions.ConvertDateFormat(NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD'),
        'YYYY-MM-DD');
    $(".date-today[value='']").val(today);

});

setTimeout(() => {
    const box = document.getElementById('my_alert');
    if (box) {
        box.style.display = 'none';
    }
}, 2000);
