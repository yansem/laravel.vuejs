<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";
export default {
    name: "PostComponent",
    components: {
        CreateComponent,
        IndexComponent
    },
    data() {
        return {

        }
    },
    mounted() {

    },
    methods: {

    },
    computed: {

    }
}
</script>

<style scoped>

</style>
