<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <router-link
                    class="navbar-brand mb-0 h1"
                    v-bind:to="{ name: 'home' }"
                >
                    ホーム
                </router-link>
                <div>
                    <router-link v-bind:to="{ name: 'create' }">
                        <button class="btn btn-success">追加</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>