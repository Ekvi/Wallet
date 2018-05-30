<template>
    <div class="card #e3f2fd blue lighten-5">
        <div class="card-content <!--white-text-->">
            <div class="row">
                <div class="col s4">
                    <span class="card-title center-align">Расходы</span>
                    <ul class="collection">
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Сегодня</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Неделя</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Месяц</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Год</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s4">
                    <span class="card-title center-align">Доходы</span>
                    <ul class="collection">
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Месяц</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Год</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col s4">
                    <span class="card-title center-align">Баланс</span>
                    <ul class="collection">
                        <li class="collection-item #bcaaa4 brown lighten-4">
                            <div class="row">
                                <div class="col s8">Всё время</div>
                                <div class="col s4">0</div>
                            </div>
                        </li>
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