<template>

    <section class="my-mbl-nav" id="mbl_nav">
        <div class="m-nav px-4">
            <p class="m_nav_item">
                <a class="" data-toggle="collapse">
                    <i class="fa fa-home" aria-hidden="true"></i> Home
                </a>
            </p>
            <p class="m_nav_item">
                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <i class="fa fa-th" aria-hidden="true"> </i> Service
                </a>

            </p>

            <div class="collapse" id="collapseExample">
                <div class="card border-0 px-3">
                    <a class="mbl_sub_item" href="/softwaredev"><i class="fa fa-laptop" aria-hidden="true"></i> Software
                        Development</a>
                    <a class="mbl_sub_item" href="/mobileapp"><i class="fas fa-mobile-alt"></i> Mobile App</a>
                    <a class="mbl_sub_item" href="/digitalMarketing"> <i class="fas fa-bullhorn"></i> Digital Marketing</a>
                    <a class="mbl_sub_item" href="/domain-register"><i class="fab fa-connectdevelop"></i> Domain Register</a>
                    <a class="mbl_sub_item" href="/training-certificate"><i class="fas fa-certificate"></i> Training and
                        Certificate</a>
                    <a class="mbl_sub_item" href="/website-design"><i class="fas fa-chalkboard-teacher"></i> Website Design</a>
                    <a class="mbl_sub_item" href="/website-hosting"><i class="fas fa-server"></i> Website Hosting</a>
                </div>
            </div>
            <p class="m_nav_item">
                <a class="" data-toggle="collapse">
                    <i class="fa fa-users" aria-hidden="true"></i> Teams
                </a>
            </p>
            <p class="m_nav_item">
                <a class="" data-toggle="collapse">
                    <i class="fa fa-users" aria-hidden="true"></i> About us
                </a>
            </p>
            <p class="m_nav_item">
                <a class="" data-toggle="collapse">
                    <i class="fa fa-phone-square" aria-hidden="true"></i> Contact
                </a>
            </p>
            <p class="m_nav_item">
                <a class="" data-toggle="collapse">
                    <i class="fa fa-yen-sign" aria-hidden="true"></i> Career
                </a>
            </p>
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
        new_toggle() {
            let toggle = document.getElementById('toggle');
            let menu = document.getElementById('navbarNav');
            toggle.classList.toggle('active');
            menu.classList.toggle('active');
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