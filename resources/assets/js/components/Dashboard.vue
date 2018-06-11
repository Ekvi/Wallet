<template>
    <div class="container #e0f2f1 teal lighten-5">
        <div class="row">
            <div class="col s12" v-show="showDashboard">
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
                    <div class="col s6">
                        <app-purchase-form></app-purchase-form>
                    </div>
                </div>
            </div>
            <div class="col m6 offset-m3" v-show="showPurchaseForm">
                <app-purchase-form></app-purchase-form>
            </div>
        </div>
        <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>-->

        <!-- Modal Structure -->
        <!--<div id="modal1" class="modal">
            <div class="modal-content">
                <div class="col m6 offset-m3" v-show="showPurchase">
                    <app-purchase-form></app-purchase-form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>-->

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
