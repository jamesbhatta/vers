<template>

    <section class="my-nav" :style="'background-color:#E8E8DF'">

        <div class="logo">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <a href="index.php">
                                <img :src="'./assets/img/mohrain-logo.png'" width="200px" height="140px" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <h3 class="text-center">{{ firstMessage }} <span class="auto-type">{{secondMessage}} </span> </h3>
                        </div>
                    </div>
                </div>
            </section>
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
            'isActive': true
        }
    },

    methods: {
        new_toggle() {
            let toggle = document.getElementById('toggle');
            let menu = document.getElementById('navbarNav');
            toggle.classList.toggle('active');
            menu.classList.toggle('active');
        }
    },
    mounted() {
        var typed = new Typed(".auto-type", {
            strings: [this.secondMessage,this.secondMessage, this.secondMessage],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
    }
}
</script>
<style>
.my-nav {
    position: sticky;
}

.menu ul li {
    display: flex;
    position: relative;

}

.menu ul li a {
    display: flex;
    text-align: center;
    justify-content: center;
}

.menu ul li a::before {
    content: '';
    height: 3px;
    position: absolute;
    width: 0%;
    border-radius: 20px;
    top: 110%;
    left: 0;
    background: white;
}
.menu ul li a:hover{
    color: #000;
    background-color: aliceblue;
    border-radius: 10px;
}
.menu ul li a:hover::before {
    animation: 1s borderAnim 1;
    width: 100%;
}

@keyframes borderAnim {
    from {
        width: 0%;
    }

    to {
        width: 100%;
    }
}
.sticky .active-sticky .my-nav .navbar{
    background-color: red;
}
</style>
