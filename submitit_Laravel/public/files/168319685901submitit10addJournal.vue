<template>
  <layout>
    <div class="row mb-3 align-items-center">
      <div class="col">
        <PageHeader :title="title ? 'Add Journal' : 'Update Journal'" />
      </div>
      <div class="col-auto">
        <router-link to="/journals" class="btn btn-theme">
          <i class="mdi mdi-arrow-left font-size-14 align-middle me-2"></i>
          Back to Journals List
        </router-link>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <form class="needs-validation mb-3" v-if="showForm">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="journal-name-input">Journal Name *</label>
                <input id="journal-name-input" v-model="form.jrnlName" type="text" class="form-control"
                  placeholder="Journal Name" :class="{
                      'is-invalid': submitted && v$.form.jrnlName.$error,
                    }" />
                <div v-if="submitted && v$.form.jrnlName.$error" class="invalid-feedback">
                  <span v-if="v$.form.jrnlName.required.$message">
                    {{ v$.form.jrnlName.required.$message }}
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="last-name-input">Journal Rating *</label>
                <div class="single-select2-cstm">
                  <Select2 v-model="form.rating" placeholder="Select Rating" :options="ratingOption" :class="{
                      'is-invalid': submitted && v$.form.rating.$error,
                    }"></Select2>
                  <div v-if="submitted && v$.form.rating.$error" class="invalid-feedback">
                    <span v-if="v$.form.rating.required.$message">
                      {{ v$.form.rating.required.$message }}
                    </span>
                  </div>
                </div>
                <!-- <input
                  id="last-name-input"
                  v-model="form.ratingModal"
                  type="text"
                  class="form-control"
                  placeholder="Last name"
                  
                /> -->

              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="innerGroupFeilds my-2 p-2 p-md-3">
                <div class="row gx-3">
                  <div class="col-md-4 col-lg-3 mb-3">
                    <label class="form-label mb-1">Date Last Checked</label>
                    <div class="single-select2-cstm">
                      <Select2 v-model="form.date" placeholder="Date Last Checked" :options="lastDateOption"></Select2>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Open for Fiction Submissions?</h4>
                    <label for="fiction-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" class="d-none" id="fiction-check" name="fiction-check" true-value="1"
                        false-value="0" v-model="form.fictionSubmission">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Open for Nonfiction Submissions?</h4>
                    <label for="nonfiction-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.nonFictionSubmission"
                        class="d-none" id="nonfiction-check" name="nonfiction-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Fiction Only?</h4>
                    <label for="fictiononly-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.fictionOnly" class="d-none"
                        id="fictiononly-check" name="fictiononly-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Nonfiction Only?</h4>
                    <label for="nonfictiononly-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.nonFictionOnly" class="d-none"
                        id="nonfictiononly-check" name="nonfictiononly-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Online Submissions?</h4>
                    <label for="onlineSub-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.onlineSubmission" class="d-none"
                        id="onlineSub-check" name="onlineSub-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      No
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Simultaneous Submissions?</h4>
                    <label for="simultaneous-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.simultaneousSubmission"
                        class="d-none" id="simultaneous-check" name="simultaneous-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      No
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Defunct? </h4>
                    <label for="defunct-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.defunct" class="d-none"
                        id="defunct-check" name="defunct-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Not Included</h4>
                    <label for="included-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" true-value="1" false-value="0" v-model="form.notIncluded" class="d-none"
                        id="included-check" name="included-check">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Possible Themes?</h4>
                    <label for="possible-check" class="labelCheckboxCstm d-flex font-size-13">
                      <input type="checkbox" class="d-none" id="possible-check" name="possible-check" true-value="1"
                        false-value="0" v-model="form.possibleThemes">
                      <div class="checkmark me-2">
                        <i class="mdi mdi-checkbox-blank-outline text-theme font-size-18"></i>
                        <i class="mdi mdi-checkbox-marked-outline text-theme font-size-18"></i>
                      </div>
                      Yes
                    </label>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-3">
                    <h4 class="font-size-13 mb-2">Flash</h4>
                    <div class="single-select2-cstm">
                      <Select2 v-model="form.flash" placeholder="0" :options="flashOption"></Select2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label">Year of Inception *</label>
              <div class="single-select2-cstm">
                <Select2 v-model="form.yearOfInception" placeholder="Last checked" :options="YearInceptionOption" :class="{
                    'is-invalid': submitted && v$.form.yearOfInception.$error,
                  }">
                </Select2>
                <div v-if="submitted && v$.form.yearOfInception.$error" class="invalid-feedback">
                  <span v-if="v$.form.yearOfInception.required.$message">
                    {{ v$.form.yearOfInception.required.$message }}
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label">Actual Acceptance Percent *</label>
              <div class="input-group">
                <span class="input-group-text">%</span>
                <input type="text" class="form-control" placeholder="5" v-model="form.acceptancePercent" 
                :class="{
                    'is-invalid': submitted && v$.form.acceptancePercent.$error,
                  }" />
                  <div v-if="submitted && v$.form.acceptancePercent.$error" class="invalid-feedback">
                    <span v-if="v$.form.acceptancePercent.required.$message">
                      {{ v$.form.acceptancePercent.required.$message }}
                    </span>
                  </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label">Submission Volume *</label>
              <input type="text" class="form-control" placeholder="Submission volume" v-model="form.submissionVolume"
                :class="{
                    'is-invalid': submitted && v$.form.submissionVolume.$error,
                  }" />
                  <div v-if="submitted && v$.form.submissionVolume.$error" class="invalid-feedback">
                    <span v-if="v$.form.submissionVolume.required.$message">
                      {{ v$.form.submissionVolume.required.$message }}
                    </span>
                  </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Minimum Length *</label>
                  <input type="number" class="form-control" placeholder="Minimum length" v-model="form.minimumLength"
                    :class="{
                        'is-invalid': submitted && v$.form.minimumLength.$error,
                      }" />
                        <div v-if="submitted && v$.form.minimumLength.$error" class="invalid-feedback">
                          <span v-if="v$.form.minimumLength.required.$message">
                            {{ v$.form.minimumLength.required.$message }}
                          </span>
                        </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Maximum Length *</label>
                  <input type="number" class="form-control" placeholder="Maximum length" v-model="form.maximumLength"
                    :class="{
                        'is-invalid': submitted && v$.form.maximumLength.$error,
                      }" />
                      <div v-if="submitted && v$.form.maximumLength.$error" class="invalid-feedback">
                        <span v-if="v$.form.maximumLength.required.$message">
                          {{ v$.form.maximumLength.required.$message }}
                        </span>
                      </div>
                </div>

              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label">Style & Permanent Themes *</label>
              <input type="text" class="form-control" placeholder="e.g., “experimental” or “topical/margins"
                v-model="form.permanentThemes" :class="{
                    'is-invalid': submitted && v$.form.permanentThemes.$error,
                  }" />
                  <div v-if="submitted && v$.form.permanentThemes.$error" class="invalid-feedback">
                    <span v-if="v$.form.permanentThemes.required.$message">
                      {{ v$.form.permanentThemes.required.$message }}
                    </span>
                  </div>
            </div>
            <div class="col-12 mb-3">
              <label class="form-label">Notes About Journal</label>
              <textarea type="textarea" class="form-control resize-none" rows="4" placeholder="Notes about journal..."
                v-model="form.notesAboutJournal"></textarea>
            </div>
            <div class="col-12 mb-4">
              <label class="form-label font-size-15">Upload File</label>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="form-group">
                    <label for="my-file" class="labelUploadFile">
                      <input type="file"
                        accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                        @change="previewImage($event)" class="form-control-file" id="my-file">
                      <div class="uploadImageFile">
                        <span><i class="mdi mdi-arrow-up-circle"></i></span>
                        Upload File
                      </div>
                    </label>
                    <span class="text-danger font-size-12 d-block text-center">doc or docx (Max
                      Size: 15MB)</span>
                  </div>
                </div>
                <!-- <template v-if="newId.length"> -->
                <template v-for="datas in newId" :key="datas">
                  <div class="col-md-4">
                    <div class="p-2 mb-3 bg-success bg-soft">
                      <div class="row gx-2 align-items-center">
                        <div class="col">
                          <p class="mb-0 text-success font-size-14">File name: {{
                            datas
                          }}</p>
                        </div>
                        <div class="col-auto">
                          <div class="">
                            <button @click="resetData(datas)" class="border-0 p-0 bg-transparent" type="button">
                              <i class="mdi mdi-delete font-size-20 text-danger"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </template>
                <template v-for="data in id" :key="data">
                  <div class="col-md-4">
                    <div class="p-2 mb-3 bg-success bg-soft">
                      <div class="row gx-2 align-items-center">
                        <div class="col">
                          <p class="mb-0 text-success font-size-14">File name: {{
                            image[id.indexOf(data)].name
                          }}</p>
                          <p class="mb-0 text-success font-size-14">Size: {{
                            image[id.indexOf(data)].size / 1024
                          }}KB</p>
                        </div>
                        <div class="col-auto">
                          <div class="">
                            <button @click="reset(data)" class="border-0 p-0 bg-transparent" type="button">
                              <i class="mdi mdi-delete font-size-20 text-danger"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </template>
              </div>
            </div>
            <div class="col-12 mb-3">
              <label>Theme Date</label>
              <div class="row gx-1">
                <div class="col-md-6 mb-2 mb-md-0">
                  <div class="input-group w-100 inputFieldDate">
                    <datetime format="DD-MM-YYYY" width="160px" v-model="theme.date" lang="en"
                      class="form-control custom-datetimepicker">
                    </datetime>
                    <span class="input-group-text bg-theme"><i class="mdi mdi-calendar text-white"></i></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Theme" v-model="theme.text" />
                </div>
              </div>
            </div>
            <div class="col-12 mb-3">
              <h2 class="text-dark-cstm font-size-18 mt-4 mb-3">Submission Details</h2>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label class="form-label mb-1">Submission Platform</label>
                  <div class="single-select2-cstm">
                    <Select2 v-model="form.submissionPlatform" placeholder="Select Submission Platform"
                      :options="submissionPoption" />
                  </div>
                  <div class="d-block overflowScrollInputs mt-2"
                    v-if="form.submissionPlatform.includes('other [with fill-in option]')">
                    <label class="form-label font-size-11  mb-0">Other</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Type..."
                      v-model="submissionPlatformExtra" />
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label mb-1">Submission Guidelines</label>
                  <div class="multipleSelectCstm">
                    <Select2 v-model="form.submissionGuidelines" placeholder="Select Submission Guidelines"
                      :options="submissionGuidelineoption" :settings="{ multiple: true }" />
                  </div>
                  <div class="d-block overflowScrollInputs mt-2"
                    v-if="form.submissionGuidelines.some(v => ['File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'].includes(v))">
                    <div class="mt-0">
                      <textarea type="text" class="form-control form-control-md" row="5" placeholder="Type..."
                        v-model="submissionGuidelineExtra" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-label mb-1">Submission Cost <sup>(Dollars)</sup> </label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" placeholder="0" v-model="form.submissionCost" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row gx-2" v-if="!this.$route.params.id">
            <div class="col-auto">
              <button class="btn btn-theme mt-3" type="submit" @click.prevent="formSubmit(1)">Add Story</button>
            </div>
            <div class="col-auto">
              <button class="btn btn-theme mt-3" type="submit" @click.prevent="formSubmit(0)">Submit</button>
            </div>
          </div>
          <div class="col-auto" v-else>
            <button class="btn btn-theme mt-3" type="submit" @click.prevent="updateJournal">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "../layouts/main";
import PageHeader from "@/components/admin/header/page-header";
import useVuelidate from "@vuelidate/core";
// import Datepicker from "vue3-datepicker";
import datetime from "vuejs-datetimepicker-translatable";
import Select2 from 'vue3-select2-component';
import axios from 'axios';
import _ from 'lodash';
import CryptoJS from 'crypto-js';

import {
  required,
  helpers
} from "@vuelidate/validators";

export default {
  page: {
    title: "Add Journal",
    meta: [
      {
        name: "description",
        content: 'description',
      },
    ],
  },

  setup() {
    return { v$: useVuelidate() }
  },

  data() {
    return {

      url: process.env.VUE_APP_URL,
      pickeddd: new Date(),
      id: [],
      newId: [],
      image: [],
      preview: [],
      newImage: [],
      i: 0,
      title: true,
      showForm: true,
      // v$: useVuelidate(),
      form: {
        jrnlName: "",
        rating: '',
        date: null,
        fictionSubmission: false,
        nonFictionSubmission: false,
        fictionOnly: false,
        nonFictionOnly: false,
        onlineSubmission: false,
        simultaneousSubmission: false,
        defunct: false,
        notIncluded: false,
        possibleThemes: false,
        flash: [],
        yearOfInception: '',
        acceptancePercent: '',
        submissionVolume: '',
        minimumLength: '',
        maximumLength: '',
        permanentThemes: '',
        notesAboutJournal: '',
        theme: '',
        submissionPlatform: '',
        submissionGuidelines: [],
        submissionCost: '',
      },

      theme: {
        date: new Date(),
        text: ''
      },
      guideLine: {
        fileName: '',
        email: "",
        permanentTheme: "",
        other: ""
      },
      submissionPlatformExtra: '',
      submissionGuidelineExtra: '',
      ratingOption: ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
      lastDateOption: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14'],
      flashOption: ['0', '1', '2', '3', '4', '5'],
      YearInceptionOption: ['2023', '2022', '2021', '2020', '2019', '2018', '2017', 'unknown'],
      isShowData: false,
      submitted: false,
      password: this.value,
      submissionPoption: ['Submittable', 'Email (paste)', 'Email (attach)', 'own manager', 'online form', 'Google forms', 'Duosuma', 'Oleada', 'Moksha', 'other [with fill-in option]'],
      submissionGmain: '',
      submissionGuidelineoption: ['Blind', 'No page numbers', 'Single-Space', '1.5-space', 'File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'PDF only', 'Block Paragraphs', 'Indented Paragraphs', 'Check for possible themes', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'],
      submissionCmain: '',
      submissionCoption: ['$120', '$200', '$230', '$260', '$280'],
    }
  },

  components: {
    Layout,
    PageHeader,
    Select2,
    datetime
  },
  validations: {
    form: {
      jrnlName: {
        required: helpers.withMessage("Journal Name is required", required),
      },
      rating: {
        required: helpers.withMessage("Rating is required", required),
      },
      yearOfInception: {
        required: helpers.withMessage("Year Of Inception is required", required),

      },
      acceptancePercent: {
        required: helpers.withMessage("Acceptance Percet is required", required),

      },
      submissionVolume: {
        required: helpers.withMessage("Submission Volume is required", required),

      },
      minimumLength: {
        required: helpers.withMessage("Minimum Length is required", required),

      },
      maximumLength: {
        required: helpers.withMessage("Maximum Length is required", required),

      },
      permanentThemes: {
        required: helpers.withMessage("Permanent Themes is required", required),

      },
    },
  },
  activated() {
    if (this.$route.params.id) {
      this.title = false;
    }
    this.editJournal();
  },
  created() {
    if ("id" in this.$route.params) {
      this.title = false;
    }
  },
  watch: {
    $route() {
      this.resetFields()
    }
  },
  methods: {
    formSubmit(type) {
      this.submitted = true;
      this.v$.$touch();
      if (this.v$.$invalid) {
        return;
      } else {
        if (this.form.submissionPlatform.includes('other [with fill-in option]')) {
          this.form.submissionPlatform = this.submissionPlatformExtra
        }
        if (this.form.submissionGuidelines.some(v => ['File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'Check for possible themes', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'].includes(v))) {
          const arrayToRemove = ['File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'Check for possible themes', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'];
          for (let i = 0; i < arrayToRemove.length; i++) {
            let index = this.form.submissionGuidelines.indexOf(arrayToRemove[i]);
            if (index !== -1) {
              this.form.submissionGuidelines.splice(index, 1);
            }
          }
          this.form.submissionGuidelines.push(this.submissionGuidelineExtra)
        }
        this.form.theme = new Date(this.theme.date).getDate() + '-' + new Date().getMonth(this.theme.date) + '-' + new Date(this.theme.date).getFullYear() + ':' + this.theme.text
        let data = new FormData()
        _.each(this.form, (value, key) => {
          data.append(key, value)
        })
        for (let i = 0; i < this.image.length; i++) {
          data.append('files[]', this.image[i]);
        }
        axios.post(this.url + 'api/addJournal', data).then(() => {
          if (type == 0) {
            this.$router.push({ path: '/journals' });
          }
          else {
            this.$router.push({ path: '/addStory' });
          }
        });
      }
    },

    editJournal() {
      let id = this.decode(this.$route.params.id);
      if (id) {
        this.showForm = false;
        axios.post(this.url + "api/editJournal", { 'id': id }).then(res => {
          this.form = res.data;
          this.form.date = res.data.date;
          this.form.submissionPlatform = res.data.submissionPlatform.split(',')
          this.form.submissionGuidelines = res.data.submissionGuidelines.split(',');
          this.newImage = res.data.files.split(",")
          if (res.data.files) {
            this.newId = res.data.files.split(",");
          }
          if (res.data.files.split(",").length != null) {
            this.i = res.data.files.split(",").length
          }
          const arr = this.form.submissionGuidelines.filter(i => !this.submissionGuidelineoption.includes(i))
          if (arr.length > 0) {
            for (let i = 0; i < arr.length; i++) {
              let index = this.form.submissionGuidelines.indexOf(arr[i]);
              if (index !== -1) {
                this.form.submissionGuidelines.splice(index, 1);
              }
            }
            this.form.submissionGuidelines.push('other [w/ fill-in option]')
            this.submissionGuidelineExtra = arr.toString();
          }
          const arr1 = this.form.submissionPlatform.filter(i => !this.submissionPoption.includes(i))
          if (arr1.length > 0) {
            this.form.submissionPlatform.push('other [with fill-in option]')
            this.submissionPlatformExtra = arr1.toString();
          }
          this.theme.text = res.data.theme.split(':')[1];
          this.showForm = true;
        })
      }
    },

    updateJournal() {
      this.submitted = true;
      this.v$.$touch();
      if (this.v$.$invalid) {
        return;
      } else {
        if (this.form.submissionPlatform.includes('other [with fill-in option]')) {
          this.form.submissionPlatform = this.submissionPlatformExtra
        }
        if (this.form.submissionGuidelines.some(v => ['File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'Check for possible themes', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'].includes(v))) {
          const arrayToRemove = ['File Name [with fill-in option]', 'Email Subject [with fill-in option]', 'Check for possible themes', 'Check for permanent theme [with fill-in option]', 'other [w/ fill-in option]'];
          for (let i = 0; i < arrayToRemove.length; i++) {
            let index = this.form.submissionGuidelines.indexOf(arrayToRemove[i]);
            if (index !== -1) {
              this.form.submissionGuidelines.splice(index, 1);
            }
          }
          this.form.submissionGuidelines.push(this.submissionGuidelineExtra)
        }
        this.form.theme = new Date(this.theme.date).getDate() + '-' + new Date().getMonth(this.theme.date) + '-' + new Date(this.theme.date).getFullYear() + ':' + this.theme.text
        let data = new FormData()
        data.append('id', this.decode(this.$route.params.id));
        _.each(this.form, (value, key) => {
          data.append(key, value)
        });
        for (let i = 0; i < this.image.length; i++) {
          data.append('files[]', this.image[i]);
        }
        for (let j = 0; j < this.newImage.length; j++) {
          data.append('images[]', this.newImage[j]);
        }
        axios.post(this.url + 'api/updateJournal', data).then(() => {
          this.$router.go(-1);
        });
      }
    },
    previewImage(event) {
      this.id.push(this.i++)
      var input = event.target;
      if (input.files) {
        var reader = new FileReader();
        reader.onload = (e) => {
          this.preview.push(e.target.result);
        }
        this.image.push(input.files[0]);
        reader.readAsDataURL(input.files[0]);
      }
    },
    reset(data) {
      const index = this.id.indexOf(data);
      this.id.splice(index, 1);
      this.preview.splice(index, 1);
      this.image.splice(index, 1);
    },
    resetData(datas) {
      const newIndex = this.newId.indexOf(datas);
      this.newId.splice(newIndex, 1);
      this.newImage.splice(newIndex, 1);

    },
    decode(id) {
      return decodeURIComponent(CryptoJS.AES.decrypt(String(id), 'Secret Passphrase').toString(CryptoJS.enc.Utf8));
    },
    resetFields() {
      this.form = {
        jrnlName: "",
        rating: '',
        date: null,
        fictionSubmission: false,
        nonFictionSubmission: false,
        fictionOnly: false,
        nonFictionOnly: false,
        onlineSubmission: false,
        simultaneousSubmission: false,
        defunct: false,
        notIncluded: false,
        possibleThemes: false,
        flash: [],
        yearOfInception: '',
        acceptancePercent: '',
        submissionVolume: '',
        minimumLength: '',
        maximumLength: '',
        permanentThemes: '',
        notesAboutJournal: '',
        theme: '',
        submissionPlatform: '',
        submissionGuidelines: [],
        submissionCost: '',
      }
      this.id = [],
        this.newId = [],
        this.image = [],
        this.preview = [],
        this.newImage = [],
        this.i = 0,
        this.submissionPlatformExtra = null
      this.submissionGuidelineExtra = null
      this.title = true
    }
  }
};
</script>