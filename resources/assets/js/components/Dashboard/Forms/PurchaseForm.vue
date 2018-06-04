<template>
    <div class="card #e3f2fd blue lighten-5">
        <form action="">
            <div class="card-content">
                <span class="card-title">Расход</span>
                <div class="row">
                    <div class="col s6">
                        <input type="text" class="datepicker">
                    </div>
                    <div class="col s6">
                        <input type="text" class="timepicker">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="input-field col s6">
                            <input id="category" type="text" class="validate">
                            <label for="category">Категория</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="input-field col s6">
                            <input id="amount" type="text" class="validate">
                            <label for="amount">Сумма</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="comment" class="materialize-textarea"></textarea>
                        <label for="comment">Коментарий</label>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                date: null,
                time: null,
            }
        },
        mounted() {
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
        },
    }
</script>