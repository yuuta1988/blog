<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">内容</th>
                    <th scope="col">詳細</th>
                    <th scope="col">編集</th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="blog in blogs" :key="blog.id">
                    <th scope="row">{{ blog.id }}</th>
                    <td>{{ blog.content }}</td>
                    <td>
                        <router-link
                            class="btn btn-primary"
                            v-bind:to="{
                                name: 'show',
                                params: { id: blog.id },
                            }"
                        >
                            詳細
                        </router-link>
                    </td>
                    <td>
                        <router-link
                            class="btn btn-success"
                            v-bind:to="{
                                name: 'edit',
                                params: { id: blog.id },
                            }"
                        >
                            編集
                        </router-link>
                    </td>
                    <td>
                        <button
                            class="btn btn-danger"
                            v-on:click="deleteBlog(blog.id)"
                        >
                            削除
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            blogs: [],
        };
    },
    methods: {
        getBlogs() {
            axios.get("/api").then((response) => {
                this.blogs = response.data;
            });
        },
        deleteBlog(id) {
            axios.delete("/api/" + id).then((response) => {
                this.getBlogs();
            });
        },
    },
    mounted() {
        this.getBlogs();
    },
};
</script>