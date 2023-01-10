<template>
    <div class="div-main position-relative mt-3">
        <!-- footer -->
        <footer class="footer">
            
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="d-block">
                        <div class="d-inline pl-2">
                            <a href="https://mijhni.com" target="_blank"><img
                                    src="https://mijhni.com/assets/img/mijhni-logo-green-sm.jpg" alt="mijhni.com"
                                    height="70px" :style="'width:40%'" /></a>
                        </div>
                        <div class="d-inline" style="left: 5px">
                            <a href="https://mohrainjobs.com" target="_blank">
                                <img :src="'./assets/img/logo-white-transparent copy.jpg'" alt="mohrainjobs.com" height="70px"
                                    :style="'width:40%'" />
                            </a>
                        </div>
                        <p class="col-12 mt-2 mb-2" style="color:#000;"> We're creative Web Design &
                            Development
                            Company in
                            Dhangadhi, Kailali, Nepal. We build amazing websites and robust software applications.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 footer-list1">
                    <h4 class="font-weight-bold text-uppercase">Useful Links</h4>
                    <ul class="pl-2">
                        <li> <a href="https://mohrain.com">Home</a></li>
                        <li> <a href="/career">Career</a></li>
                        <li> <a href="/contact">Contact</a></li>
                        <li> <a href="/our-team">Our Team</a></li>
                        <li> <a href="/our-team">Terms and sonditions</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 footer-list">
                    <h4 class="fw-bold text-uppercase  font-weight-bold">Address</h4>
                    <span style="line-height:4px; list-style: none; color: black;">
                        <li>
                            <h6 class="">Mohrain Websoft Pvt. Ltd.</h6>
                        </li>
                        <li>
                            <small style="color: #000;">
                                <i class="bi bi-geo-alt-fill">&nbsp;Near Kailali Pool, Dhangadhi</i></small>
                        </li>
                    </span>

                    <ul class="pl-1 mt-2">

                        <li>
                            <a href="tel:091-524243"><i class="bi bi-telephone-fill">&nbsp;091-524243</i></a>
                        </li>
                        <li>
                            <a href="tel:9858427288"><i class="bi bi-phone-flip">&nbsp;9858427288</i></a>
                        </li>
                        <li>
                            <a href="mailto:info@mohrain.com"><i
                                    class="bi bi-envelope-fill">&nbsp;info@mohrain.com</i></a>
                        </li>
                    </ul>
                    <div class="social-site mb-3 h3">
                        <a href="https://www.facebook.com/mohrainWebsoft" target="_blank"> <i
                                class="fab fa-facebook"></i></a>
                        <a href="https://np.linkedin.com/company/mohrain-technologies-p-ltd-" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="/" target="_blank"> <i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 ">
                    <h4 class="text-uppercase" :style="'color:black;'">Visit Us</h4>
                    <iframe class="pr-3"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.4984443087624!2d80.57763731456171!3d28.704646382389384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ecda89a76dc1%3A0xb1064adbfdda32ce!2sMohrain%20websoft!5e0!3m2!1sen!2snp!4v1656070878531!5m2!1sen!2snp"
                        width="100%" height="100%" style="border:0;" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
    </div>
</template>
<style>
.social-site a {
    color: #000;
}

.social-site a:hover {
    color: blue;
}

#particles {
    height: 500px;
    width: 500px;
}

.footer{
    overflow: hidden;
}
.footer-list h4 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #000;

}

.footer-list ul li,
.footer-list ul li a {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    list-style: none;
    color: #000;
}

.footer-list ul li a:hover {
    color: blue;
}

.footer-list1 ul li,
.footer-list1 ul li a {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    list-style: none;
    color: black;
}

.footer-list1 h4 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #000;

}

.footer-list1 ul li a:hover {
    color: blue;
}

@media screen and (max-width:768px) {
    .footer .row div {
        text-align: center
        /* display: flex;
        justify-content: center */
    }
}

;
</style>
