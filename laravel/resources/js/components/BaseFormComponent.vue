<template>
    <div class="container">
        <h4>{{ title }}</h4>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="submit">
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label"
                            >内容</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control"
                            id="content"
                            v-model="initialBlog.content"
                        />
                    </div>
                    {{ initialBlog }}
                    <button type="submit" class="btn btn-primary">送信</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BsaeForm",
    props: {
        initialBlog: {
            type: Object,
            required: false,
        },
        title: String,
    },
    // data() {
    //     return {
    //         form: {
    //             content: this.initialBlog.content,
    //         },
    //     };
    // },
};
</script>