<template>
    <div id="checkboxes">

        <div class="block">
            <div class="row" v-for="i in Math.ceil(box.checked.length / 3)">
                <span class="items" v-for="(category, index) in box.checked.slice((i - 1) * 3, i * 3)">
                    <div class="checked-parent">
                        <div class="del-text">
                            <label>{{ category }}</label>
                        </div>
                    <div class="delete-button">
                        <button type="button" @click="deleteEvent(index)">X</button>
                    </div>
                    </div>
                </span>
            </div>

            <div class="row" v-for="i in Math.ceil(box.data.length / box.cols)">
                <button class="items" type="button" v-for="(item, index) in box.data.slice((i - 1) * box.cols, i * box.cols)" @click="addToChecked(item)" >
                    <div>
                        <input class="checkbox" type="checkbox" :value="`${ item }`" v-model="box.checked">
                        <label>{{ item }}</label>
                    </div>
                </button>
            </div>
        </div>
    </div>
</template>
<script>


export default {
    computed: {},
    methods: {
        deleteEvent: function (index) {
            this.box.checked.splice(index, 1)
        },
        addToChecked: function (index){
            if (this.box.checked.indexOf(index) === -1){
                this.box.checked.push(index)
            }
        }
    },

    data() {
        return {
            box: {
                cols: 3,
                title: "",
                content: "",
                data: ['EUR', 'PLN', 'GEL', 'DKK', 'CZK', 'GBP', 'SEK', 'USD', 'RUB'],
                checked: []
            }
        }
    }
};
</script>
