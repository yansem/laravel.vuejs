<template>
    <tr :class="this.$parent.isEdit(person.id) ? 'd-none' : ''">
        <th>{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td class="text-center"><a href="#" @click.prevent="editPerson(person)"
                                   class="btn btn-success">Edit
        </a></td>
        <td class="text-center"><a href="#" @click.prevent="deletePerson(person.id)"
                                   class="btn btn-danger">Delete
        </a></td>
    </tr>
</template>

<script>


export default {
    name: "ShowComponent",
    data() {
        return {}
    },
    props: [
        'person'
    ],
    mounted() {

    },
    methods: {
        editPerson(person) {
            this.$parent.personId = person.id
            let editName = `edit_${person.id}`
            this.$parent.$refs[editName][0].name = person.name
            this.$parent.$refs[editName][0].age = person.age
            this.$parent.$refs[editName][0].job = person.job
        },
        deletePerson(id) {
            axios.delete(`/api/persons/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                })
        }
    },
}
</script>

<style scoped>

</style>
