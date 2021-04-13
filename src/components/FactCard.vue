<template>
  <v-container fluid>
    <v-row no-gutters>
      <v-col
        cols="12"
        md="3"
        lg="2"
        sm="4"
        xs="6"
        v-for="card in cards"
        :key="card.id"
      >
        <v-card
          class="pa-3 text-center py-10"
          color="rgba(209, 106, 185,1)"
          outlined
          tile
          elevation="6"
        >
          <!-- <v-card-text> </v-card-text> -->
          <v-card-text class="white--text">
            <h3>{{ card.title }}</h3>
            <p class="display-1">
              {{ card.number }}
            </p>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "FactCard",
  data: () => ({
    cards: [
      { id: 1, title: "Websites", number: 5 },
      { id: 2, title: "Repositories in Git", number: 8 },
      { id: 3, title: "Years of Experience", number: 1 },
      { id: 4, title: "Mobile App", number: 0 },
      { id: 5, title: "Desktop App", number: 5 },
      { id: 6, title: "Happy Client", number: 3 },
    ],
  }),
};
</script>
