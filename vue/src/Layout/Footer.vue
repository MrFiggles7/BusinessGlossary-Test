<template>
  <div>
    <v-app-bar id="footer"
        color="#003e7a"
        dark
    >

      <p id="school_name">Waukesha County Technical College</p>
      <v-spacer></v-spacer>
      <v-btn to="/login" class="d-flex justify-end">Login</v-btn>




    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style scoped>
#school_name{
  margin-left: 40%;
}
</style>