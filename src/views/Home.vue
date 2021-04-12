<template>
  <div class="abs">
    <!-- <vue-particles color="#dedede"></vue-particles> -->
    <!-- <div class="abss"> -->
    <CarouSel id="home" />
    <h2
      class="pt-15 mt-md-8 text-center font-weight-bold grey lighten-5 black--text text-uppercase display-1"
      id="about"
    >
      About Me
    </h2>
    <FactCard class="py-15 mb-md-16 grey lighten-5" />
    <h2
      class="pt-15 mt-md-16 text-center font-weight-bold grey darken-3 white--text text-uppercase display-1"
      id="portfolio"
    >
      Portfolio
    </h2>
    <v-container fluid class="grey darken-3">
      <LatestWork class="py-15 mb-md-16 grey darken-3" />
    </v-container>
    <!-- <h2 class="pt-15 text-center font-weight-bold">What Clients Say</h2>
    <TestiMonia class="py-15 white" /> -->
    <h2
      class="pt-15 my-md-16 text-center font-weight-bold text-uppercase display-1"
      id="contacts"
    >
      Contact Us
    </h2>
    <ConTact class="py-8 px-lg-16 mb-md-16" />

    <!-- </div> -->
  </div>
</template>

<script>
import CarouSel from "@/components/CarouSel.vue";
import LatestWork from "@/components/LatestWork.vue";
import FactCard from "@/components/FactCard.vue";
// import TestiMonia from "@/components/TestiMonia.vue";
import ConTact from "@/components/ConTact.vue";

export default {
  name: "Home",
  components: {
    CarouSel,
    LatestWork,
    FactCard,
    // TestiMonia,
    ConTact,
  },
  data: () => ({}),
};
</script>
<style scoped>
/* .abss {
  position: absolute;
  top: 0;
  left: 0;
  
} */
</style>
