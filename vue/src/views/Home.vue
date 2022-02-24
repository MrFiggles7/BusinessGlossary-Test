<template>



  <div class="home">
    <HomeSearchBar></HomeSearchBar>
    <v-data-table
        :headers="headers"
        :items="terms"
        :items-per-page="5"
        class="elevation-1"
    ></v-data-table>

  </div>

</template>

<script>
import HomeSearchBar from "@/Layout/Home-Search-Bar";

export default {
  name: 'Home',
  components: {HomeSearchBar},
  data() {
    return {
      headers: [
        {text: 'Term', align: 'start', value: 'term'},
        {text: 'Functional Definition', sortable: false, value: 'functional_definition'},
        {text: 'Department', value: 'department'},
      ],
      terms: [
        {
          term: 'Enrollment',
          functional_definition: 'The status definition when student is enrolled in the courses',
          department: 'Learning, IRE, Registration, Finance',
        },
        {
          term: '#Applications',
          functional_definition: 'Prospective students may apply to more than one program. This shows the total number of applications that prospective students submitted',
          department: 'IRE, Registration, Admissions',
        },
        {
          term: 'Admission Rate',
          functional_definition: 'Calculated as #Admitted Applicants divided by #Applicants',
          department: 'Admissions',
        },
      ],

      methods: {},


      components: {
        HomeSearchBar

      },

      mounted() {

      }
    }
  }
}
</script>


<style scoped>


</style>
