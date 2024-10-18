<script>
import {showSuccess} from "@/scripts.js";

export default {
    name: "App",
    watch: {
        '$page.props.flash.message': {
            handler(message) {
                if (message) {
                    showSuccess(message);
                }
            },
            immediate: true,
            deep: true
        }
    }
}
</script>

<template>
    <slot/>
</template>

<style scoped>

</style>
