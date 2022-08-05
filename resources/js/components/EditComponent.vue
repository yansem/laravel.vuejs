<template>
        <tr :class="this.$parent.isEdit(person.id) ? '' : 'd-none'">
            <th></th>
            <td><input type="text" class="form-control" v-model="name"></td>
            <td><input type="number" class="form-control" v-model="age"></td>
            <td><input type="text" class="form-control" v-model="job"></td>
            <td
                class="text-center"><a href="#" @click.prevent="updatePerson(person.id)"
                                       class="btn btn-primary">Update
            </a></td>
        </tr>
</template>

<script>

export default {
    name: "EditComponent",
    components: {},
    props: [
        'person'
    ],
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    mounted() {

    },
    methods: {
        updatePerson(id) {
            this.$parent.personId = null
            axios.patch(`/api/persons/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$parent.getPeople()
                })
        },
    }
}
</script>

<style scoped>

</style>
