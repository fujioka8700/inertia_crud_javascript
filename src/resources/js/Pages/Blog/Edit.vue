<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TextField from "@/MyComponents/TextField.vue";
import InputLabel from "@/MyComponents/InputLabel.vue";
import TextArea from "@/MyComponents/TextArea.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import { Head, useForm } from "@inertiajs/vue3";

const props = defineProps({
    blog: Object,
});

const form = useForm({
    title: props.blog.title,
    content: props.blog.content,
});

const editBlog = () => {
    form.patch(route("blog.update", props.blog.id));
};
</script>

<template>
    <Head title="Blog更新" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Blog更新
            </h2>
            <p>Blogの更新を行います</p>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form @submit.prevent="editBlog">
                <InputLabel for="title">タイトル</InputLabel>
                <TextField
                    v-model="form.title"
                    placeholder="タイトルを入力してください"
                    id="title"
                />
                <InputError :message="form.errors.title"></InputError>
                <InputLabel for="content">記事の内容</InputLabel>
                <TextArea
                    v-model="form.content"
                    placeholder="記事の内容を入力してください"
                    id="content"
                />
                <InputError :message="form.errors.content"></InputError>
                <PrimaryButton>更新</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
