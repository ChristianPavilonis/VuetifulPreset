<template>
    <div>
        <h1>{{ title }}</h1>
    </div>
</template>

<script>
    import BaseView from './BaseView';

    export default {

        extends: BaseView,

        data() {
            return {
                title: "Hello World"
            }
        },

    }

</script>