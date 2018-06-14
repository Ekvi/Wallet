<template>
    <div>
        <div class="container #e0f2f1 teal lighten-5" v-if="showDashboard">
            <div class="row">
                <div class="col s12">
                    <app-statistic></app-statistic>
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
                    </div>
                </div>
            </div>

            <!-- Modal purchaseForm -->
            <!--<div id="purchaseForm" class="modal">
                <div class="modal-content">
                    <div class="col m4 offset-m4" >
                        <app-purchase-form></app-purchase-form>
                    </div>
                </div>
            </div>-->

            <!-- Modal incomeForm -->
            <!--<div id="incomeForm" class="modal">
                <div class="modal-content">
                    <div class="col m4 offset-m4" >
                        <app-income-form></app-income-form>
                    </div>
                </div>
            </div>-->
        </div>

        <div class="container valign-wrapper #e0f2f1 teal lighten-5" v-if="showPurchaseForm">
            <div class="row">
                <div class="col m12">
                    <app-purchase-form></app-purchase-form>
                </div>
            </div>
        </div>

        <div class="container valign-wrapper #e0f2f1 teal lighten-5" v-if="showIncomeForm">
            <div class="row">
                <div class="col m12">
                    <app-income-form></app-income-form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import {mapActions} from 'vuex';
    import {mapGetters} from 'vuex';

    import Statistic from './Dashboard/Statistic.vue';
    import CostsList from './Dashboard/CostsList.vue';
    import ChartCosts from './Dashboard/Chart/ChartCosts.vue';
    import ChartHistory from './Dashboard/Chart/ChartHistory.vue';
    import PurchaseForm from './Dashboard/Forms/PurchaseForm.vue';
    import IncomeForm from './Dashboard/Forms/IncomeForm.vue';

    export default {
        components: {
            appStatistic: Statistic,
            appCostsList: CostsList,
            appChartCosts: ChartCosts,
            appChartHistory: ChartHistory,
            appPurchaseForm: PurchaseForm,
            appIncomeForm: IncomeForm,
        },
        data() {
            return {

            }
        },
        mounted() {
            $('.modal').modal();
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
        computed: {
            ...mapGetters([
                'showDashboard',
                'showPurchaseForm',
                'showIncomeForm'
            ])
        },
    }
</script>
