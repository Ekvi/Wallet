<template>
    <div class="card #e3f2fd blue lighten-5">
        <form action="">
            <div class="card-content">
                <span class="card-title">Расход</span>
                <div class="row">
                    <div class="col s6">
                        <input type="text" class="datepicker" v-model="income.date">
                    </div>
                    <div class="col s6">
                        <input type="text" class="timepicker" v-model="income.time">
                    </div>
                </div>
                <div class="row">
                    <div class="col m5 input-field">
                        <div class="row">
                            <div>
                                <select id="category" v-model="income.category">
                                    <option value="" disabled selected>Выберите категорию</option>
                                    <option v-for="category in incomeCategories" value="category._id">{{ category.name }}</option>
                                </select>
                                <label for="category">Категории</label>
                                <i class="material-icons add-category teal-text text-teal small">add_box</i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field col m6 offset-m1">
                        <input id="amount" type="text" class="validate" v-model="income.amount">
                        <label for="amount">Сумма</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="comment" class="materialize-textarea" v-model="income.comment"></textarea>
                        <label for="comment">Коментарий</label>
                    </div>
                </div>
                <div class="right-align">
                    <button type="button" class="waves-effect #80cbc4 teal lighten-3 btn" @click="close">Отмена</button>
                    <button type="button" class="waves-effect waves-light btn">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        data() {
            return {
                income: {}
            }
        },
        mounted() {
            this.initDatePickers();
            $('select').formSelect();
        },
        updated() {
            $('select').formSelect();
        },
        computed: {
            ...mapGetters([
                'incomeCategories'
            ])
        },
        methods: {
            close() {
                $('#incomeForm').modal('close');
            },
            initDatePickers() {
                $('.datepicker').datepicker({
                    selectMonths: true,
                    selectYears: 15,
                    firstDay: 1,
                    format: 'yyyy-mm-dd',
                    i18n: {
                        months: [
                            "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август",
                            "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"
                        ],
                        monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
                        weekdays: ["Воскресенье", "Понедельник","Вторник", "Среда", "Четверг", "Пятница", "Субота"],
                        weekdaysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                        weekdaysAbbrev: ["В", "П","В", "С", "Ч", "П", "С"],
                        cancel: 'Отмена'
                    }
                });

                $('.timepicker').timepicker({
                    i18n: {
                        cancel: 'Отмена',
                        done: 'OK'
                    }
                });
            }
        }
    }
</script>