<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12" md="12">
        <v-text-field label="Term" solo></v-text-field>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12" md="6">
        <v-textarea
            solo
            label="Functional Definition"
        ></v-textarea>
      </v-col>
      <v-col cols="12" md="3">
        <v-text-field label="Related Term" solo></v-text-field>
      </v-col>
      <v-col cols="12" md="3">
        <v-radio-group class="mt-0" mandatory>
          <v-radio
              label="Entered"
              value="Entered"
          ></v-radio>
          <v-radio
              label="Active"
              value="Active"
          ></v-radio>
          <v-radio
              label="Inactive"
              value="Inactive"
          ></v-radio>
        </v-radio-group>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12" md="6">
        <v-textarea
            solo
            label="Technical Definition"
        ></v-textarea>
      </v-col>
      <v-col cols="12" md="6">
        <v-row class="mt-0">
          <v-col>
            <v-menu>
            <template v-slot:activator="{ on: menu, attrs }">
              <v-tooltip bottom>
                <template v-slot:activator="{ on: tooltip }">
                  <v-btn
                      color="primary"
                      dark
                      v-bind="attrs"
                      v-on="{ ...tooltip, ...menu }"
                  >Steward</v-btn>
                </template>
                <span>Select a Steward</span>
              </v-tooltip>
            </template>
            <v-list>
              <v-list-item
                  v-for="(item, index) in stewards"
                  :key="index"
              >
                <v-list-item-title>{{ item.title }}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
          </v-col>
          <v-col>
            <v-menu>
              <template v-slot:activator="{ on: menu, attrs }">
                <v-tooltip bottom>
                  <template v-slot:activator="{ on: tooltip }">
                    <v-btn
                        color="primary"
                        dark
                        v-bind="attrs"
                        v-on="{ ...tooltip, ...menu }"
                    >System/Source</v-btn>
                  </template>
                  <span>Select a Source</span>
                </v-tooltip>
              </template>
              <v-list>
                <v-list-item
                    v-for="(item, index) in sources"
                    :key="index"
                >
                  <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item>
              </v-list>
            </v-menu>
          </v-col>
        </v-row>
        <v-row class="mt-10">
          <v-col>
            <v-menu>
            <template v-slot:activator="{ on: menu, attrs }">
              <v-tooltip bottom>
                <template v-slot:activator="{ on: tooltip }">
                  <v-btn
                      color="primary"
                      dark
                      v-bind="attrs"
                      v-on="{ ...tooltip, ...menu }"
                  >Privacy Codes</v-btn>
                </template>
                <span>Select a Privacy Code</span>
              </v-tooltip>
            </template>
            <v-list>
              <v-list-item
                  v-for="(item, index) in privacyCodes"
                  :key="index"
              >
                <v-list-item-title>{{ item.title }}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
          </v-col>
          <v-col>
            <v-menu>
              <template v-slot:activator="{ on: menu, attrs }">
                <v-tooltip bottom>
                  <template v-slot:activator="{ on: tooltip }">
                    <v-btn
                        color="primary"
                        dark
                        v-bind="attrs"
                        v-on="{ ...tooltip, ...menu }"
                    >Departments</v-btn>
                  </template>
                  <span>Select a Department</span>
                </v-tooltip>
              </template>
              <v-list>
                <v-list-item
                    v-for="(item, index) in departments"
                    :key="index"
                >
                  <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item>
              </v-list>
            </v-menu>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
    <v-row>
      <v-col cols="12" md="6">
        <v-textarea
            solo
            label="Notes"
        ></v-textarea>
      </v-col>
      <v-col cols="12" md="6">
        <v-textarea
            solo
            label="Business Rules"
        ></v-textarea>
      </v-col>
    </v-row>
    <v-row class="justify-center">
      <v-btn color="primary" x-large>Add Term</v-btn>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "Term-Input",

  data: () => ({
    stewards: [
      { title: 'Steward' },
      { title: 'Steward' },
      { title: 'Steward' },
      { title: 'Steward' },
    ],
    privacyCodes: [
      { title: 'code' },
      { title: 'code' },
      { title: 'code' },
      { title: 'code' },
    ],
    sources: [
      { title: 'Source' },
      { title: 'Source' },
      { title: 'Source' },
      { title: 'Source' },
    ],
    departments: [
      { title: 'department' },
      { title: 'department' },
      { title: 'department' },
      { title: 'department' },
    ],
  }),
}
</script>

<style scoped>

</style>