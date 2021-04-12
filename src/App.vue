<template>
  <v-app>
    <v-app-bar app color="" dark>
      <v-toolbar
        color=""
        flat
      >
        <v-toolbar-title class="red--text font-weight-bold"><h2>KAUNA</h2></v-toolbar-title>
      </v-toolbar>
      <v-spacer></v-spacer>
      <v-toolbar-items v-show="!mobile" class="font-weight-bold">
        <!-- <v-btn
          href="#home"
          text 
          class="mr-2 px-10"
          >
          <v-icon>mdi-home</v-icon>
          Home
        </v-btn> -->
        <v-btn
          v-for="link in links" 
          :href="link.url"  
          :key="link.id"
          text 
          class="mr-2 font-weight-bold"
          >
          <!-- <v-icon>{{ link.icon }}</v-icon> -->
          <span>{{ link.label }}</span>
        </v-btn>
      </v-toolbar-items>
      <v-app-bar-nav-icon v-show="mobile" @click="drawer = !drawer"  class="mr-5"><v-btn text>MENU</v-btn></v-app-bar-nav-icon>
    </v-app-bar>

    <v-navigation-drawer
      color="black lighten-1"
      app
      v-model="drawer"
      temporary
      right
      hide-overlay
    >
        <v-row justify="end" class="mt-5 pr-6">
          <v-btn @click="drawer=false" text><v-icon color="white">mdi-close</v-icon></v-btn>
        </v-row>
    
      <v-list>
        <v-list-item
          v-for="link in links"
          :key="link.label"
          link
          :href="link.url"
        >
          <v-list-item-icon>
            <v-icon size="35px" color="red">{{ link.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="white--text">{{ link.label }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-main class="grey lighten-5">
      <router-view></router-view>
    </v-main>
    <v-footer
      dark
      padless
    >
      <v-card
        class="flex"
        flat
        tile
      >
        <v-card-text 
          class="text-center" 
          >
          <v-btn v-for="link in linking"
          :key="link.id"
            :href="link.href"
            class="mx-5 white--text"
            
            icon
          >
            <v-icon size="30px">
              {{ link.icon }}
            </v-icon>
          </v-btn>
        </v-card-text>
        <v-divider color="white"></v-divider>
        <v-card-title class=" white--text">
           &copy; {{ new Date().getFullYear() }} <span> | Kauna</span>

          <v-spacer></v-spacer>

          <i>Kinplus Technology</i>
        </v-card-title>
      </v-card>
    </v-footer>
  </v-app>
</template>

<script>
// import CarouSel from "./components/CarouSel";

export default {
  name: "App",

  components: {
    // CarouSel,
  },

  data: () => ({
    drawer:false,
    links: [
      {id:1,url:'#',label:'Home',icon:'mdi-home'},
      {id:2,url:'#about',label:'About',icon:'mdi-account-circle'},
      {id:3,url:'#portfolio',label:'Portfolio',icon:'mdi-badge-account-outline'},
      // {id:4,url:'#testimonial',label:'Testimonial',icon:'mdi-like-1'},
      {id:5,url:'#contacts',label:'Contact',icon:'mdi-radio-handheld'}
    ], 
    linking: [
        {id:1,href:'tel:08093684611', icon:'mdi-phone'},
        {id:2,href:'https://www.facebook.com', icon:'mdi-facebook'},
        {id:3,href:'https://www.twitter.com', icon:'mdi-twitter'},
        {id:4,href:'https://www.linkedin.com', icon:'mdi-linkedin'},
        {href:'mailto:kaunapraise@gmail.com', icon:'mdi-mail'},
      ],
  }),
  computed: {
    mobile() {
      return this.$vuetify.breakpoint.smAndDown 
    }
  },
  watch: {
    mobile(newValue) {
      if (!newValue) {
        this.hideDrawer()
      }      
    }
  },
  methods: {
    hideDrawer() {
      this.drawer = false;
    }
  },
};
</script>
<style scoped>
