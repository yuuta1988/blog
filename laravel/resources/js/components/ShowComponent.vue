<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label"
                            >#</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control-plaintext"
                            readonly
                            id="id"
                            v-bind:value="id"
                        />
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="name" class="col-sm-3 col-form-label"
                            >投稿者</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control-plaintext"
                            readonly
                            id="title"
                            value="title"
                        />
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="content" class="col-sm-3 col-form-label"
                            >内容</label
                        >
                        <input
                            type="text"
                            class="col-sm-9 form-control-plaintext"
                            readonly
                            id="content"
                            value="content"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        id: Number,
    },
};
</script>