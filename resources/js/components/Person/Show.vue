<template>
    <div class="w-25" v-if="person">
        <div>Name: {{ person.name }}</div>
        <div>Age: {{ person.age }}</div>
        <div>Job: {{ person.job }}</div>
        <router-link class="btn btn-success" :to="{name: 'person.edit', params: {id: person.id}}">Edit</router-link>
    </div>
</template>

<script>

export default {
    name: "Index",

    data() {
        return {
            person: null
        }
    },
    mounted() {
        this.getPerson();
    },
    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
            .then( res => {
                this.person = res.data.data;
            })
        }
    }


}
</script>

<style scoped>

</style>
