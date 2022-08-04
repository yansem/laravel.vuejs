<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
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
            persons: [
                {
                    id: 1,
                    name: 'a',
                    age: 11,
                    job: 0
                },
                {
                    id: 2,
                    name: 'b',
                    age: 22,
                    job: 1
                },
                {
                    id: 3,
                    name: 'c',
                    age: 33,
                    job: 0
                }
            ]
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
