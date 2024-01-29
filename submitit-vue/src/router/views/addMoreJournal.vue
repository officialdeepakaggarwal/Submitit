<template>
  <layout>
    <div class="row mb-3 align-items-center">
      <div class="col">
        <PageHeader :title="title" />
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="main-search-card ">
          <div class="mb-3">
            <div class="row gx-2">
              <div class="col">
                <h3 class="my-1 font-size-18 text-dark-cstm">Add More Journals</h3>
              </div>
              <div class="col">
                <div class="searchBarStyle topBarCstmTable  position-relative">
                  <input type="text" v-model="searchValueTable" class="form-control" placeholder="Search...">
                  <span class="iconSearch bx bx-search-alt"></span>
                </div>
              </div>
              <div class="col-auto">
                <button @click="isshow = !isshow" class="btn btn-theme">Advance Search</button>
              </div>
            </div>
          </div>
        </div>
        <Transition name="fade">
          <div class="main-group-search p-3 border mb-3" v-if="isshow">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Journals Rating</label>
                <div class="multipleSelectCstm">
                  <Select2 v-model="journalRatingMain" placeholder="Select Rating" :settings="{ multiple: true }"
                    :options="journalRatingOptions" />
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Acceptance Percent</label>
                <div class="multipleSelectCstm">
                  <Select2 v-model="AcceptPreMain" placeholder="Select Acceptance Percent" :settings="{ multiple: true }"
                    :options="AcceptPreOptions" />
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Volume</label>
                <div class="single-select2-cstm">
                  <Select2 v-model="volumeMain" placeholder="Select Volume" :options="volumeOptions" />
                </div>
              </div>
              <div class="col-12">
                <div class="col-md-6 mb-3">
                  <label class="labelCheckboxCstm">
                    <input type="checkbox" name="storyCheckbox" :true-value="true" :false-value="false"
                      v-model="showAll" @change="update"/>
                    <span class="checkmark pe-1">
                      <i class="mdi mdi-checkbox-blank-outline font-size-20 text-theme"></i>
                      <i class="mdi mdi-checkbox-marked-outline font-size-20 text-theme"></i>
                    </span>
                    Show all open Journals
                  </label>
                </div>
                <div class="row mt-3 gx-2 justify-content-end">
                  <div class="col-auto">
                    <button class="btn btn-light" @click="getJournal()">Reset</button>
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-theme" @click="filterData()">Apply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </Transition>
        <EasyDataTable ref="myTable" @click="copyTable" v-model:items-selected="itemsSelected" show-index
          :headers="headers" :items="tableItems" :search-value="searchValueTable" border-cell theme-color="#3aafa9"
          :rows-per-page="25" buttons-pagination table-class-name="table-custom-style">
          <template #item-journalMain="{ jrnlName, rating, matchScore }">
            <span class="badge badge-soft-success">Match Percent: {{ matchScore }}%</span>
            <span class="text-dark-cstm d-block">
              {{ jrnlName }}
            </span>
            <div class="d-flex">
              <template v-for="jRating in parseInt(rating.slice(0, 1))" :key="jRating">
                <i :class="`mdi mdi-star font-size-13 text-warning`"></i>
              </template>
              <template v-for="jRating in 5 - parseInt(rating.slice(0, 1))" :key="jRating">
                <i :class="`mdi mdi-star-outline font-size-13 text-warning`"></i>
              </template>
            </div>

          </template>
          <template #item-acceptance="{ acceptance }">
            <p>{{ (acceptance * 100).toFixed(2) }}%</p>
          </template>
          <template #item-possibleThemes="{ possibleThemes }">
            <p v-if="possibleThemes==1">Yes</p>
            <p v-else>No</p>
          </template>

        </EasyDataTable>
        <div class="mt-3 text-end">
          <button type="button" class="btn btn-theme" @click="addInList">Add to List</button>
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from "../layouts/main";
import PageHeader from "@/components/admin/header/page-header";
import EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';
import Select2 from 'vue3-select2-component';
import axios from 'axios';
import CryptoJS from "crypto-js";

export default ({
  page: {
    title: "Add More Journal",
    meta: [
      {
        name: "description",
        content: 'description',
      },
    ],
  },

  data() {

    return {
      title: "",
      showAll: false,
      url: process.env.VUE_APP_URL,
      doNotSubmitList: [],
      addMoreJournals: [],
      storyScore: {
        quality: 0,
        stylized: 0,
        difficulty: 0,
        topical: 0,
        experimental: 0,
        humor: 0,
        strange: 0,
        dark: 0,
        international: 0,
        margins: 0,
        historical: 0,
        long: 0,
        short: 0
      },
      searchValueTable: "",
      isshow: false,
      journalRatingMain: [],
      volumeMain: "",
      AcceptPreMain: "",
      AcceptPreOptions: ['<1%', '1-3%', '3-5%', '>5%'],
      journalRatingOptions: ['1 Stars', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
      volumeOptions: ['1', '2', '3', '4', '5'],
      itemsSelected: [],
      headers: [
        { text: "Journals", value: "journalMain" },
        { text: "Year", value: "yearOfInception" },
        { text: "Accep. %", value: "acceptance" },
        { text: "Volume", value: "volume" },
        { text: "Style", value: "permanentThemes" },
        { text: "Flash", value: "flash" },
        { text: "Possible Themes", value: "possibleThemes" },
        { text: "Themes", value: "theme" },
      ],
      tableItems: [],
      unmutableTableItems: [],
    }
  },
  components: {
    Layout,
    PageHeader,
    EasyDataTable,
    Select2
  },
  activated() {
    this.unmutableTableItems = this.$store.state.otherJournals
    this.unmutableTableItems.sort((a, b) => (a.matchScore < b.matchScore) ? 1 : -1)
  },
  mounted() {
    this.getAllJournals()
    this.unmutableTableItems = this.$store.state.otherJournals
    this.unmutableTableItems.sort((a, b) => (a.matchScore < b.matchScore) ? 1 : -1)
  },
  watch: {
    $route() {
      this.getAllJournals();
      this.resetInputField();
    }
  },
  methods: {
    getAllJournals() {
      let data = new FormData()
      data.append('storyId', this.decode(this.$route.params.id))
      axios.post(this.url + 'api/getJournalsWithScore', data).then(response => {
          let data = new FormData()
          data.append('id', this.decode(this.$route.params.id))
          axios.post(this.url + 'api/getStorySubmissionResult', data).then(res => {
              let submittedJournals = res.data.submittedJournals
              if(res.data.storyScore)
              {
                this.storyScore = res.data.storyScore
              }
              let allJournals = response.data.journals
              this.doNotSubmitList = response.data.doNotSubmitList
              this.rejectMainJournals = response.data.otherJournals
              this.unmutableJournal = filterByReference(allJournals, submittedJournals)
              this.unmutableJournal = this.unmutableJournal.filter((element) => {
                  return !this.doNotSubmitList.map((item) => item.id).includes(element.id);
              });
              this.getSuggestedJournals()
          })
      })
            const filterByReference = (arr1, arr2) => {
                let res = [];
                res = arr1.filter((el) => {
                    return !arr2.find((element) => {
                        if (
                            element.status == 0 ||
                            element.status == 1 ||
                            element.round >= 3
                        ) {
                            return element.journal_id === el.id;
                        }
                    });
                });
                return res;
            };
        },
    getSuggestedJournals() {
      this.journals = this.unmutableJournal
      let journals = this.journals;
      this.suggestedJournals = []
            for (var i = 0; i < this.journals.length; i++) {
                this.journals[i].matchScore = 0;
                let journalScore = this.journals[i].journal_scores;
                let storyScore = this.storyScore;
                if (journals[i].acceptancePercent == 5 && journals[i].submissionVolume == 5) {
                    this.bonusScore = 10 / 100;
                } else if (
                    (journals[i].acceptancePercent == 5 &&
                        journals[i].submissionVolume == 4) ||
                    (journals[i].acceptancePercent == 4 &&
                        journals[i].submissionVolume == 5)
                ) {
                    this.bonusScore = 9 / 100;
                } else if (
                    (journals[i].acceptancePercent == 5 &&
                        journals[i].submissionVolume == 3) ||
                    (journals[i].acceptancePercent == 4 &&
                        journals[i].submissionVolume == 4)
                ) {
                    this.bonusScore = 8 / 100;
                } else if (
                    (journals[i].acceptancePercent == 5 &&
                        journals[i].submissionVolume == 2) ||
                    (journals[i].acceptancePercent == 4 &&
                        journals[i].submissionVolume == 3)
                ) {
                    this.bonusScore = 7 / 100;
                } else if (
                    (journals[i].acceptancePercent == 5 &&
                        journals[i].submissionVolume == 1) ||
                    (journals[i].acceptancePercent == 4 &&
                        journals[i].submissionVolume == 2)
                ) {
                    this.bonusScore = 6 / 100;
                } else if (
                    (journals[i].acceptancePercent == 4 &&
                        journals[i].submissionVolume == 1) ||
                    (journals[i].acceptancePercent == 3 &&
                        journals[i].submissionVolume <= 6 &&
                        journals[i].submissionVolume >= 1) ||
                    (journals[i].acceptancePercent == 2 &&
                        journals[i].submissionVolume == 1)
                ) {
                    this.bonusScore = 5 / 100;
                } else if (
                    (journals[i].acceptancePercent == 2 &&
                        journals[i].submissionVolume == 2) ||
                    (journals[i].acceptancePercent == 1 &&
                        journals[i].submissionVolume == 1)
                ) {
                    this.bonusScore = 4 / 100;
                } else if (
                    (journals[i].acceptancePercent == 2 &&
                        journals[i].submissionVolume == 3) ||
                    (journals[i].acceptancePercent == 1 &&
                        journals[i].submissionVolume == 2)
                ) {
                    this.bonusScore = 3 / 100;
                } else if (
                    (journals[i].acceptancePercent == 2 &&
                        journals[i].submissionVolume == 4) ||
                    (journals[i].acceptancePercent == 1 &&
                        journals[i].submissionVolume == 3)
                ) {
                    this.bonusScore = 2 / 100;
                } else if (
                    (journals[i].acceptancePercent == 2 &&
                        journals[i].submissionVolume == 5) ||
                    (journals[i].acceptancePercent == 1 &&
                        journals[i].submissionVolume == 4)
                ) {
                    this.bonusScore = 1 / 100;
                } else {
                    this.bonusScore = 0 / 100;
                }
                let mainScore =
                    Math.abs((journalScore.quality - storyScore.quality) * 3) +
                    Math.abs(journalScore.stylized - storyScore.stylized) +
                    Math.abs(journalScore.difficulty - storyScore.difficulty) +
                    Math.abs(journalScore.topical - storyScore.topical) +
                    Math.abs(journalScore.experimental - storyScore.experimental) +
                    Math.abs(journalScore.humor - storyScore.humor) +
                    Math.abs(journalScore.strange - storyScore.strange) +
                    Math.abs(journalScore.dark - storyScore.dark) +
                    Math.abs(journalScore.international - storyScore.international) +
                    Math.abs(journalScore.margins - storyScore.margins) +
                    Math.abs(journalScore.historical - storyScore.historical) +
                    Math.abs(journalScore.long - storyScore.long) +
                    Math.abs(journalScore.short - storyScore.short);
                let matchScore = (0.9 + -0.02 * mainScore + this.bonusScore) * 100;
                this.journals[i].matchScore = Math.round(
                    (journals[i].yearOfInception == new Date().getFullYear() ||
                        journals[i].yearOfInception == new Date().getFullYear() - 1
                        ? 5
                        : 0) + matchScore
                );
             
                this.journals[i].story_id = this.decode(this.$route.params.id);
            }
            this.journals.sort((a, b) => (a.matchScore < b.matchScore) ? 1 : -1)
           this.addMoreJournals = this.journals
        },
    addInList() {
      if (this.itemsSelected.length > 0) {
        axios.post(this.url + 'api/addMoreJournal', this.itemsSelected).then(res => {
          this.itemsSelected = [];
          const story_id = res.data.flat().map(story => story.story_id);
          this.$router.push({ path: `/single_story/${this.encode(story_id[0])}` });
        })
      } else {
        this.$router.go(-1)
      }
    },
    filterData() {
      // this.tableItems = this.unmutableTableItems
      let items = this.addMoreJournals
      if (this.journalRatingMain.length >0 ) {
        items = items.filter(journal => this.journalRatingMain.includes(journal.rating));
       
      }
      if (this.AcceptPreMain) {
          items = items.filter(journal =>
          {
            return this.AcceptPreMain.some(acceptance => {
              if(acceptance==='<1%')
              {
                return (journal.acceptance * 100).toFixed(2) < 1
              }
              if(acceptance==='1-3%')
              {
                return (journal.acceptance * 100).toFixed(2) >= 1 && (journal.acceptance * 100).toFixed(2) <3
              }
              if(acceptance=='3-5%')
              {
                return (journal.acceptance * 100).toFixed(2) >= 3 && (journal.acceptance * 100).toFixed(2) <= 5
              }
              if(acceptance=='>5%')
              {
                return (journal.acceptance * 100).toFixed(2) > 5
              }
              return false;
            })
          } )
       

      }
      if(this.volumeMain)
      {
        
          items = items.filter(journal => journal.submissionVolume == this.volumeMain)
      }
      this.tableItems = items
    },
    encode(id) {
      return encodeURIComponent(
        CryptoJS.AES.encrypt(String(id), "Secret Passphrase")
      );
    },
    decode(id) {
          return decodeURIComponent(
              CryptoJS.AES.decrypt(String(id), "Secret Passphrase").toString(
                  CryptoJS.enc.Utf8
              )
          );
      },
    resetInputField() {
      this.itemsSelected = []
      this.journalRatingMain = []
      this.AcceptPreMain = []
      this.volumeMain = ''
      this.tableItems = []
    },
  }

})
</script>