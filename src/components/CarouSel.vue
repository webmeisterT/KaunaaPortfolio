<template>
  <v-parallax dark src="comp4.jpg">
    <v-row align="center" justify="center">
      <v-col class="text-center" cols="12">
        <h1
          class="display-3 font-weight-bold mb-4 text-sm-center"
          color="pink--text"
        >
          Web Developer
        </h1>
        <h4 class="subheading">
          <v-btn
            large
            elevation="0"
            class="rounded-0 font-weight-bold px-8"
            color="dark--text"
            href="#contacts"
            >GET IN TOUCH</v-btn
          >
        </h4>
      </v-col>
    </v-row>
  </v-parallax>
</template>

<script>
export default {
  name: "CarouSel",
};
</script>
