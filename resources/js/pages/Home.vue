<template>
  <div>
    <div class="nav d-flex justify-content-between px-3">
      <div class="d-flex">
        <div class="nav-image p-3">
          <img src="https://www.bmpinfology.xyz/digitalnotice/janakimun/public/uploads/1550px-Emblem_of_Nepal.svg.png"
            alt="">
        </div>
        <div class="d-flex align-items-center">
          <div class="d-block">
            <h4 class="fw-bold">{{ org.name }}</h4>
            <label :style="'position:relative;top:-10px'">{{ org.address }}</label>
          </div>
        </div>
      </div>
      <div class="col-xl-5 d-flex align-items-center">
        <marquee behavior="alternate">
          <h4> {{ org.name }}मा यहाँहरुलाई स्वागत छ</h4>
        </marquee>
      </div>
      <div class="d-flex align-items-center">
        <div class="d-block">
          <h5 class="nav_bs_date">
            {{ year }}-{{ month }}-{{ day }}
          </h5>
          <h5 id="digital-clock" class="nav_digital_clock"></h5><br>
          <h5 id="current_ad_date" class="nav_ad_date"></h5>
        </div>

        <img src="https://www.bmpinfology.xyz/digitalnotice/janakimun/public/assets/images/nepal_flag.gif" alt=""
          :style="'height:80px;widht:80px'">
      </div>
    </div>

    <div class="container-fluid">
      <div class="bg-info notice_board_head mb-3">
        <div class="col-xl-2 bg-success h-100 d-flex align-items-center justify-content-center pt-2">
          <h4 class="text-white fw-bold">सूचना पाटी</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-9">
          <div class="box p-2" style="height: auto;">
            <div class="d-flex" style="height: auto;">
              <!-- <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide " style="width: 100%;" v-for="post in posts" v-bind:key="post.id">
                    <div class="p-3">
                      <h3 class="fw-bold text-center">{{ post.title }}</h3>
                      <label class="col-12 text-center">{{ post.published_date }} {{ post.published_time }}</label>
                    </div>
                  </div>
                </div>


              </div> -->

              <div class="swiper">
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <!-- <div class="swiper-slide" v-for="post in posts" v-bind:key="post.id">
                    <h3 class="fw-bold text-center">{{ post.title }}</h3>
                    <label class="col-12 text-center">{{ post.published_date }} {{ post.published_time }}</label>
                  </div> -->
                  <div class="swiper-slide" v-for="post in posts" v-bind:key="post.id">
                    sdfsdfsd
                  </div>

                  <!-- <div class="swiper-slide">fsdfsdf</div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      'year': '',
      'month': '',
      'day': '',
      'org': '',
      'posts': '',
    }
  },
  methods: {
    getDate() {
      this.year = NepaliFunctions.GetCurrentBsDate().year;
      this.month = NepaliFunctions.GetCurrentBsDate().month;
      this.day = NepaliFunctions.GetCurrentBsDate().day;
    },
    fetchmobileApp() {
      axios
        .get("/api/fetch-data")
        .then((response) => {
          this.org = response.data;
          // console.log(response.data);
        })
        .catch((error) => console.log(error));
    },
    fetchPost() {
      axios
        .get("/api/fetch-post")
        .then((response) => {
          this.posts = response.data;
          // console.log(response.data);
        })
        .catch((error) => console.log(error));
    },
  },
  beforeMount() {
    this.getDate();
    this.fetchmobileApp();
    this.fetchPost();
  }
}
</script>
<style>
.swiper-slide {
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
</style>