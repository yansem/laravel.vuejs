<template>
    <div class="w-25">
        <div>
            <input type="text" class="form-control" v-model="person.name" placeholder="name">
        </div>
        <div>
            <input type="number" class="form-control" v-model="person.age" placeholder="age">
        </div>
        <div>
            <input type="text" class="form-control" v-model="person.job" placeholder="job">
        </div>
        <div>
            <input :disabled="!isDisabled" type="submit" class="btn btn-primary"
                   @click.prevent="$store.dispatch('store', {name: person.name, age: person.age, job: person.job})"
                   value="Add">
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex'
export default {
    name: "Index",

    data() {
        return {
            name: '',
            age: null,
            job: ''
        }
    },


    mounted() {
        this.$store.commit('setPerson', {name: '', age: null, job: ''})
    },

    computed: {
        ...mapGetters({
            isDisabled: 'isDisabled',
            person: 'person'
        })
    }


}
</script>

<style scoped>

</style>
