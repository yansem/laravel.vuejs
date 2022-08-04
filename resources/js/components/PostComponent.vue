<template>
    <div>
        <p>Hello {{ name }}</p>
        <p>{{ work }}</p>
        <div>
            <button @click="sayHello">Hello</button>
            <button @click="sayHi">Hi</button>
        </div>

        <SinglePostComponent></SinglePostComponent>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
    components: {
        SinglePostComponent
    },
    data() {
        return {
            name: 'Vasya',
            age: 20
        }
    },
    methods: {
        sayHello() {
            console.log('Hello');
        },
        sayHi() {
            console.log('Hi');
        }
    },
    computed: {
        work() {
            return this.name + ' не работает'
        }
    }
}
</script>

<style scoped>

</style>
