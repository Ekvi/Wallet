<template>
    <div class="card #e3f2fd blue lighten-5">
        <div class="card-content <!--white-text-->">
            <div class="row">
                <div class="col s4">
                    <span class="card-title center-align">Расходы</span>
                    <ul class="collection">
                        <a href="#" class="btn-floating add-fab waves-effect #e57373 red lighten-2">
                            <i class="material-icons">add</i>
                        </a>
                        <li class="collection-item"><span>Сегодня</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Неделя</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Месяц</span><span class="right price">0</span></li>
                        <li class="collection-item"><span>Год</span><span class="right price">0</span></li>
                    </ul>
                </div>
                <div class="col s4">
                    <span class="card-title center-align">Доходы</span>
                    <ul class="collection">
                        <a href="#" class="btn-floating add-fab waves-effect #e57373 red lighten-2">
                            <i class="material-icons">add</i>
                        </a>
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
    export default {
        data() {
            return {}
        },
        mounted() {
            console.log('Statistics')
        }
    }
</script>