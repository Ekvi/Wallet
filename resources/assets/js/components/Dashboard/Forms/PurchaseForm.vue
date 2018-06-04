<template>
    <div class="card #e3f2fd blue lighten-5">
        <form action="">
            <div class="card-content">
                <span class="card-title">Расход</span>
                <div class="row">
                    <div class="col s6">
                        <input type="text" class="datepicker" v-model="purchase.date">
                    </div>
                    <div class="col s6">
                        <input type="text" class="timepicker" v-model="purchase.time">
                    </div>
                </div>
                <div class="row">
                    <div class="col m6">
                        <div class="input-field col s6">
                            <input id="category" type="text" class="validate" v-model="purchase.category">
                            <label for="category">Категория</label>
                        </div>
                    </div>
                    <div class="col m6">
                        <div class="input-field col s6">
                            <input id="amount" type="text" class="validate" v-model="purchase.amount">
                            <label for="amount">Сумма</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="comment" class="materialize-textarea" v-model="purchase.comment"></textarea>
                        <label for="comment">Коментарий</label>
                    </div>
                </div>
                <button class="waves-effect waves-light btn">Сохранить</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                purchase: {}
            }
        },
        mounted() {
            this.initDatePickers();
        },
        methods: {
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