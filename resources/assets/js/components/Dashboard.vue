<template>
    <div class="container #e0f2f1 teal lighten-5">
        <div class="row">
            <div class="col s12">
                <app-statistic></app-statistic>
                <!--<button class="btn" @click="fetchCategories">Fetch Categories</button>-->

                <div class="row">
                    <div class="col s6">
                        <app-costs-list></app-costs-list>
                    </div>
                    <div class="col s6">
                        <app-chart-costs></app-chart-costs>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <app-chart-history></app-chart-history>
                    </div>
                    <div class="col s6">
                        <app-purchase-form></app-purchase-form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import {mapActions} from 'vuex';
    import Statistic from './Dashboard/Statistic.vue';
    import CostsList from './Dashboard/CostsList.vue';
    import ChartCosts from './Dashboard/Chart/ChartCosts.vue';
    import ChartHistory from './Dashboard/Chart/ChartHistory.vue';
    import PurchaseForm from './Dashboard/Forms/PurchaseForm.vue';

    export default {
        components: {
            appStatistic: Statistic,
            appCostsList: CostsList,
            appChartCosts: ChartCosts,
            appChartHistory: ChartHistory,
            appPurchaseForm: PurchaseForm,
        },
        data() {
            return {

            }
        },
        created() {
            //this.fetchStatistic();
            this.fetchPurchaseCategories();
            this.fetchIncomeCategories();
        },
        methods: mapActions([
            'fetchPurchaseCategories',
            'fetchIncomeCategories'
        ]),
        //methods: {
            /*fetchCategories () {    // Add this
                this.fetchCategories();
            }*/
            /*fetchStatistic() {
                axios.get(`/api/statistic`)
                        .then(response => console.log(response.json()));
            },
            */
            /*fetchCategories() {
                axios.get(`/api/categories`)
                        .then(response => console.log(response.json()));
            }*/
        //}
    }
</script>
