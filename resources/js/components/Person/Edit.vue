<template>
    <div class="w-25" v-if="">
        <div>
            <input type="text" class="form-control" v-model="name" placeholder="name">
        </div>
        <div>
            <input type="number" class="form-control" v-model="age" placeholder="age">
        </div>
        <div>
            <input type="text" class="form-control" v-model="job" placeholder="job">
        </div>
        <div>
            <a href="#" @click.prevent="updatePerson()" class="btn btn-primary">Update</a>
        </div>
    </div>
</template>

<script>

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
        this.getPerson()
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then( res => {
                    this.name = res.data.data.name;
                    this.age = res.data.data.age;
                    this.job = res.data.data.job;
                })
        },
        updatePerson() {
            axios.patch(`/api/people/${this.$route.params.id}`, {name: this.name, age: this.age, job: this.job})
            .then( res => {
                this.$router.push({name: 'person.show', params: {id: this.$route.params.id}})
            })
        }
    }


}
</script>

<style scoped>

</style>
