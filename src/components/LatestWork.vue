<template>
  <v-container>
    <v-row no-gutters>
      <v-col
        cols="12"
        md="4"
        lg="4"
        sm="6"
        v-for="card in cards"
        :key="card.id"
      >
        <v-hover v-slot="{ hover }">
          <!-- <v-container> -->
          <v-card outlined tile :elevation="6" color="grey lighten-4">
            <v-img :src="card.src"> </v-img>
            <v-expand-transition>
              <div
                v-if="hover"
                class="d-flex transition-fast-in-fast-out pink darken-5 v-card--reveal display-2 text-center"
                style="height: 100%"
              >
                <a
                  :href="card.avail ? card.url : ''"
                  class="text-decoration-none white--text"
                >
                  {{ card.name }}
                </a>
              </div>
            </v-expand-transition>
          </v-card>
        </v-hover>
        <!-- </v-container> -->
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "LatestWork",
  data: () => ({
    cards: [
      {
        id: 1,
        name: "Calculator App",
        url: "https://calculator-zeta-eight.vercel.app/",
        src: "calculator.jpg",
        avail: true,
      },
      {
        id: 2,
        name: "Calendar App",
        url: "https://calendar.vercel.app/",
        src: "calendar.jpg",
        avail: false,
      },
      {
        id: 3,
        name: "Todo App",
        url: "https://toduapp.vercel.app/",
        src: "todoapp.jpg",
        avail: false,
      },
    ],
  }),
};
</script>

<style>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.9;
  position: absolute;
  width: 100%;
}
</style>
