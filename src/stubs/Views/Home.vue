<template>
    <div>
        <h1>{{ title }}</h1>
    </div>
</template>

<script>
    import View from './View';

    export default {

        extends: View,

        data() {
            return {
                title: "Hello World"
            }
        },

    }

</script>