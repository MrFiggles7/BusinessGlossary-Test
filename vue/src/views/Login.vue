<template>
<div>
  <h2 class="d-flex justify-center mt-3">Login</h2>
  <v-container style="width: 50%" class="mt-15">
    <v-form
        ref="form"
        v-model="valid"
        lazy-validation
    >

      <v-text-field
          v-model="email"
          :rules="emailRules"
          label="E-mail"
          required
      ></v-text-field>

      <v-text-field
          v-model="password"
          :rules="passwordRules"
          label="Password"
          required
      ></v-text-field>


      <v-btn
          color="success"
          class="mr-4"
      >
        Submit
      </v-btn>
    </v-form>
  </v-container>


</div>
</template>

<script>
export default {
  name: "Login",
  valid: true,
  email: null,
  emailRules: [
    v => !!v || 'E-mail is required',
    v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
  ],
  password: null,
  passwordRules: [
    v => !!v || 'Password is required',
  ],



  data() {
    return{

    }
  },


}
</script>

<style scoped>

</style>