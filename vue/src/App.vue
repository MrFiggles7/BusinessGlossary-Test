<template>
  <v-app>
    <v-main>
      <Header></Header>
      <router-view/>
      <Footer></Footer>
    </v-main>
  </v-app>
</template>

<script>

import Header from "@/Layout/Header";
import Footer from "@/Layout/Footer";
export default {
  name: 'App',
  components: {Footer, Header},
  data: () => ({
    //
  }),
};
</script>
