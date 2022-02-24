<template>
  <v-row class="home-row" justify="center">
    <v-col cols="12" md="4">
      <v-text-field
          class="header_search_boxes"
          label="Search Term"
          outlined
          solo
          dense
      ></v-text-field>
    </v-col>
    <v-col cols="12" md="4">
      <v-select
          :items="departments"
          v-model="department"
          :value="departments[3]"
          item-text="name"
          placeholder="All Departments"
          outlined
          solo
          dense
          class="header_search_boxes"
      ></v-select>
    </v-col>
    <v-col cols="12" md="1">
      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: "HomeSearchBar",

  data: () => ({
    department: null,
    departments: [
      { name: "Finance"},
      { name: "Learning"},
      { name: "IRE"},
      { name: "All Departments"},
    ],

  }),
}
</script>

<style scoped>

</style>