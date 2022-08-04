<template>
    <div>
        Hello {{ name }}
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
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
    }
}
</script>

<style scoped>

</style>
