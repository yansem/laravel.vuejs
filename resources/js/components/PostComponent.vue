<template>
    <div>
        Hello {{ name }}
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
    }
}
</script>

<style scoped>

</style>
