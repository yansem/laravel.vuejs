<template>
    <div class="w-25">
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
            <input type="submit" class="btn btn-primary" @click.prevent="store">
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

    methods: {
        store() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
            .then(res => {
                this.$router.push({name: 'person.index'})
            })
        }
    }


}
</script>

<style scoped>

</style>
