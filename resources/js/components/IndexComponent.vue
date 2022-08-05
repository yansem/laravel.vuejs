<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in persons">
                <ShowComponent :person="person"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>

import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";
export default {
    name: "IndexComponent",
    components: {ShowComponent, EditComponent},
    data() {
        return {
            name: null,
            age: null,
            job: null,
            persons: null,
            personId: null
        }
    },
    mounted() {
        this.getPeople()
    },
    methods: {
        getPeople() {
            axios.get('/api/persons')
                .then(res => {
                    this.persons = res.data
                })
        },
        editPerson(person) {
            this.personId = person.id
            let editName = `edit_${person.id}`
            this.$refs[editName][0].name = person.name
            this.$refs[editName][0].age = person.age
            this.$refs[editName][0].job = person.job
        },
        isEdit(id) {
            return this.personId === id;
        },
        deletePerson(id) {
            axios.delete(`/api/persons/${id}`)
            .then(res => {
                this.getPeople()
            })
        }
    },
}
</script>

<style scoped>

</style>
