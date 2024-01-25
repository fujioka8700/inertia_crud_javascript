<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import TextField from "@/MyComponents/TextField.vue";
import InputLabel from "@/MyComponents/InputLabel.vue";
import TextArea from "@/MyComponents/TextArea.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
    title: "",
    content: "",
});

const submitted = () => {
    form.post(route("blog.store"));
};
</script>

<template>
    <Head title="Blog作成" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Blog作成
            </h2>
            <p>Blogの作成を行います</p>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form @submit.prevent="submitted">
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
                <PrimaryButton>作成</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
