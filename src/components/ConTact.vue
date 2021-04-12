<template>
  <v-container>
    <v-row class="text-center">
      <v-col class="mb-5 pa-lg-5" cols="12" md="6">
        <v-card mt-3 elevation="0" color="grey" class="pa-lg-3">
          <v-card-text>
            <v-form v-model="valid" ref="forms">
              <v-text-field
                solo
                v-model="formz.fullname"
                :rules="nameRules"
                label="Full Name"
                required
              ></v-text-field>
              <v-text-field
                solo
                v-model="formz.email"
                :rules="emailRules"
                label="E-mail"
                required
              ></v-text-field>
              <v-textarea
                solo
                name="input-7-4"
                v-model="formz.textarea"
                label="Send Message..."
                :rules="nameRules"
                required
              ></v-textarea>

              <v-btn color="red white--text" class="px-5 mt-6"> Submit </v-btn>
            </v-form>
          </v-card-text>
        </v-card>
      </v-col>

      <v-col class="mb-5 pa-lg-5" cols="12" md="6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.30698847156!2d5.221163914597402!3d7.650101494484525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047fb4b88b3ce6f%3A0x28f5b1ec76d86241!2sChristore!5e0!3m2!1sen!2sng!4v1617948629927!5m2!1sen!2sng"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "ConTact",

  data: () => ({
    valid: false,
    nameRules: [
      // v =>
      (v) => v == !!v || "This Field is required",
    ],
    emailRules: [
      (v) => v == !!v || "E-mail is required",
      (v) => /.+@.+/.test(v) || "E-mail must be valid",
    ],
    formz: {},
  }),
};
</script>
