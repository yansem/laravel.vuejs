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
                <tr :class="isEdit(person.id) ? 'd-none' : ''">
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
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
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
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "IndexComponent",
    components: {},
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
            this.name = person.name
            this.age = person.age
            this.job = person.job
        },
        isEdit(id) {
            return this.personId === id;
        },
        updatePerson(id) {
            this.personId = null
            axios.patch(`/api/persons/${id}`, {name:this.name, age:this.age, job:this.job})
            .then(res => {
                this.getPeople()
            })
        },
        deletePerson(id) {
            axios.delete(`/api/persons/${id}`)
            .then(res => {
                this.getPeople()
            })
        }
    },
    computed: {}
}
</script>

<style scoped>

</style>
