<template>

    <section class="my-nav">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <a href="/" class="d-flex nav-title">
                        <img :src="'./assets/img/mohrain-logo.png'" class="mt-2" width="90px" height="60px" alt="">

                        <h3 class="mt-3 font-weight-bold text-uppercase" :style="'color:#80AA2F'">Mohrain websoft</h3>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->

                        <button class="navbar-toggler" type="button" v-on:click="handler">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home
                                        <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" :style="'color:#000;width:180px; width:100%;'"
                                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="false" aria-expanded="false">
                                        <i class="fa fa-th" aria-hidden="true"></i>&nbsp;Services
                                    </a>
                                    <div class="dropdown-menu" :style="'background-color:#fff'"
                                        aria-labelledby="navbarDropdown">
                                        <!-- <a class="dropdown-item text-center" href=""></a> -->
                                        <a class="dropdown-item" href="/softwaredev">Software Development</a>
                                        <a class="dropdown-item" href="/mobileapp">Mobile App</a>
                                        <a class="dropdown-item" href="/digitalMarketing">Digital Marketing</a>
                                        <a class="dropdown-item" href="/domain-register">Domain Register</a>
                                        <a class="dropdown-item" href="/training-certificate">Training and
                                            Certificate</a>
                                        <a class="dropdown-item" href="/website-design">Website Design</a>
                                        <a class="dropdown-item" href="/website-hosting">Website Hosting</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" :style="'color:#000'" href="/our-team"><i class="fa fa-users" aria-hidden="true"></i>
                                        Teams</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" :style="'color:#000'" href="pages/about-us"><i class="fa fa-users" aria-hidden="true"></i>
                                        About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" :style="'color:#000'" href="/contact"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" :style="'color:#000'" href="https://www.mohrainjobs.com/"><i class="fa fa-yen-sign" aria-hidden="true"></i> Career</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

</template>
<script>
export default {
    name: "Navbar",
    props: {
        firstMessage: String,
        secondMessage: String
    },
    data() {
        return {
            'isActive': true,
            'pages': '',
        }
    },
    beforeMount() {
        this.fetchpage();
    },
    methods: {
        handler() {
            let toggle = document.getElementById('mbl_nav');
            toggle.classList.toggle('active');
        },
        display() {
            document.getElementById('sub-nav').style.display = 'block';
        },
        hide() {
            document.getElementById('sub-nav').style.display = 'none';
        },
        fetchpage: function () {
            axios
                .get("/api/page")
                .then((response) => {
                    this.pages = response.data;
                    console.log("this.pages");
                    console.log(this.pages);
                })
                .catch((error) => console.log(error));
        },
        sendSlug(slug) {
            localStorage.setItem('slug', slug);
        }
    },
}
</script>
<style>
.navbar.active {
    background-color: var(--logo);
    display: block;
    margin: 0;
    padding: 0;
    height: auto;
}

.navbar.active .div-toggle div .btn-toggle {
    position: relative;
    right: 50px;
    top: 10px;
}

.navbar.active div .div-toggle {
    background-color: var(--logo);
    width: 100%;
    padding: 10px;
    display: flex;
    justify-content: right;
}

.navbar.active .div-toggle div {
    height: 50px;
    border-bottom: 1.5px solid #6a8c26;
}

.navbar.active div .menu {
    display: block;
    height: auto;
}

.navbar.active div .menu .navbar-nav {
    padding-left: 20px;
}

.navbar-nav li a {
    font-size: 16px;
    text-transform: uppercase;
}

.nav-title:hover {
    text-decoration: none;
}
</style>