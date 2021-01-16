<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">投稿者</th>
                    <th scope="col">内容</th>
                    <th scope="col">詳細</th>
                    <th scope="col">編集</th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.content }}</td>
                    <td>
                        <router-link
                            class="btn btn-primary"
                            v-bind:to="{
                                name: 'show',
                                params: { id: user.id },
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
                                params: { id: user.id },
                            }"
                        >
                            編集
                        </router-link>
                    </td>
                    <td><button class="btn btn-danger">削除</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            users: [
                {
                    id: 1,
                    name: "山田 一郎",
                    content: "テスト1",
                },
                {
                    id: 2,
                    name: "山田 二郎",
                    content: "テスト2",
                },
                {
                    id: 3,
                    name: "山田 三郎",
                    content: "テスト3",
                },
            ],
        };
    },
};
</script>