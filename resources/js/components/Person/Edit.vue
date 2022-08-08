<template>
    <div class="w-25" v-if="person">
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
                   @click.prevent="$store.dispatch('updatePerson', {id: person.id, name: person.name, age: person.age,
                   job:
                   person.job})"
                   value="Update">
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex';
export default {
    name: "Index",
    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    methods: {},
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
