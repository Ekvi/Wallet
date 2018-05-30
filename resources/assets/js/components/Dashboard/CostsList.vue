<template>
    <div class="card #e3f2fd blue lighten-5">
        <div class="card-content <!--white-text-->">
            <span class="card-title">Все расходы</span>

            <select class="browser-default">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">День</option>
                <option value="2">Неделя</option>
                <option value="3" selected>Месяц</option>
                <option value="4">Год</option>
            </select>

            <ul class="collection">
                <!--<li class="collection-item">
                    <div class="row">
                        <div class="col s8">Всего</div>
                        <div class="col s4">0</div>
                    </div>
                </li>-->
                <li class="collection-item"><span>Всего</span><span class="right">0</span></li>
                <li class="collection-item"><span>Еда</span><span class="right">0</span></li>
                <li class="collection-item"><span>Одежда</span><span class="right">0</span></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        },
        mounted() {
            console.log('Costs List')
        }
    }
</script>