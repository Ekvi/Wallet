<template>
    <div class="card #e3f2fd blue lighten-5">
        <div class="card-content <!--white-text-->">
            <div class="row">
                <div class="col s4">
                    <span class="card-title center-align">Расходы</span>
                    <ul class="collection">
                        <button type="button"
                                class="btn-floating add-fab waves-effect #e57373 red lighten-2"
                                @click="showPurchaseForm" >
                            <i class="material-icons">add</i>
                        </button>
                        <li class="collection-item"><span>Сегодня</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Неделя</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Месяц</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Год</span><span class="right price">0</span></li>
                    </ul>
                </div>
                <div class="col s4">
                    <span class="card-title center-align">Доходы</span>
                    <ul class="collection">
                        <button type="button"
                                class="btn-floating add-fab waves-effect #e57373 red lighten-2"
                                @click="showIncomeForm">
                            <i class="material-icons">add</i>
                        </button>
                        <li class="collection-item"><span>Месяц</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Год</span><span class="right price">0</span></li>
                    </ul>
                </div>
                <div class="col s4">
                    <span class="card-title center-align">Баланс</span>
                    <ul class="collection">
                        <li class="collection-item"><span>Всё время</span><span class="right price">0</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    //import {mapMutations} from 'vuex';

    export default {
        data() {
            return {}
        },
        methods: {
            /*...mapMutations([
                'SHOW_PURCHASE_FORM'
            ]),*/
            showPurchaseForm() {
                $('#purchaseForm').modal('open');

                //this.SHOW_PURCHASE_FORM({showDashboard: false, showPurchaseForm: true});
            },
            showIncomeForm() {
                $('#incomeForm').modal('open');
            }
        }
    }
</script>