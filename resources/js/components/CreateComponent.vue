<template>
    <div>
        <div class="w-25">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="name" v-model="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="age" placeholder="age" v-model="age">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="job" placeholder="job" v-model="job">
            </div>
            <input @click.prevent="addPerson" class="btn btn-primary" value="Добавить">
            </div>
    </div>
</template>

<script>

export default {
    name: "CreateComponent",
    components: {

    },
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
        addPerson() {
            axios.post('/api/persons', {name:this.name, age:this.age, job:this.job})
            .then(res => {
                this.name = '';
                this.age = '';
                this.job = '';
                this.$parent.$refs.index.getPeople();
            })
        }
    },
    computed: {

    }
}
</script>

<style scoped>

</style>
