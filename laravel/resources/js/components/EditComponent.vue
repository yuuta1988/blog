<template>
    <div class="container">
        <h4>編集</h4>
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
                            v-model="blog.content"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">送信</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "EditForm",
    props: {
        id: Number,
    },
    data() {
        return {
            blog: {},
        };
    },
    methods: {
        getBlog() {
            axios.get("/api/" + this.id).then((response) => {
                this.blog = response.data;
            });
        },
        submit() {
            axios.put("/api/" + this.id, this.blog).then((response) => {
                this.$router.push({ name: "home" });
            });
        },
    },
    mounted() {
        this.getBlog();
    },
};
</script>