<template>
    <base-form-component @submit="create"></base-form-component>
</template>

<script>
import BaseFormComponent from "./BaseFormComponent";

export default {
    name: "CreateForm",
    methods: {
        create: function (form) {
            axios.post("/api", form).then((response) => {
                this.$router.push({ name: "home" });
            });
        },
    },
    components: { BaseFormComponent },
};
</script>