<template>
    <base-form-component :initialContent="content"> </base-form-component>
</template>

<script>
import BaseFormComponent from "./BaseFormComponent";

export default {
    name: "EditForm",
    data() {
        return {
            content: "テスト",
        };
    },
    components: { BaseFormComponent },
};
</script>