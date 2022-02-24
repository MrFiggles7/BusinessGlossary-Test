<template>
  <div>
  <v-app-bar
      color="#003e7a"
      dense
      dark
  >

    <v-toolbar-title style="cursor: pointer" @click="$router.push('/')">Business Glossary</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn
        color="#FFFFFF"
        elevation="2"
        fab
        to="/term-input"
    ><v-icon color="#000000">mdi-plus</v-icon></v-btn>

  </v-app-bar>

</div>
</template>

<script>

export default {
  name: "Header",

}

</script>

<style scoped>



</style>