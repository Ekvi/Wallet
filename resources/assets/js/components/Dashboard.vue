<template>
    <div class="container #e0f2f1 teal lighten-5">
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
                    <div class="col s6">

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Statistic from './Dashboard/Statistic.vue';
    import CostsList from './Dashboard/CostsList.vue';
    import ChartCosts from './Dashboard/Chart/ChartCosts.vue';
    import ChartHistory from './Dashboard/Chart/ChartHistory.vue';

    export default {
        components: {
            appStatistic: Statistic,
            appCostsList: CostsList,
            appChartCosts: ChartCosts,
            appChartHistory: ChartHistory,
        },
        data() {
            return {

            }
        },
        mounted() {
            console.log('Dash.')
        }
    }
</script>
