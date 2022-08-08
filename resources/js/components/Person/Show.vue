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

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id);
    },
    computed: {
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
