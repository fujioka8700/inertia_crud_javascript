<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import Pagination from "@/MyComponents/Pagination.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
defineProps({
    blogs: Object,
});

const form = useForm({});

const deleteBlog = (id) => {
    form.delete(route("blog.destroy", id), {
        preserveScroll: true,
    });
};
</script>

<template>
    <Head title="Blog一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Blog
            </h2>
        </template>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link :href="route('blog.create')">
                    <PrimaryButton>Blogを作成</PrimaryButton>
                </Link>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <tr>
                        <th class="border px-4 py-2 bg-amber-100">タイトル</th>
                        <th class="border px-4 py-2 bg-amber-100" colspan="3">
                            コンテンツ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="blog in blogs.data" :key="blog.id">
                        <td class="border px-4 py-2">{{ blog.title }}</td>
                        <td class="border px-4 py-2">{{ blog.content }}</td>
                        <td class="border px-4 py-2">
                            <SecondaryButton>
                                <Link :href="route('blog.edit', blog.id)"
                                    >更新</Link
                                >
                            </SecondaryButton>
                        </td>
                        <td class="border px-4 py-2">
                            <DangerButton @click="deleteBlog(blog.id)"
                                >削除</DangerButton
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="my-5 flex justify-center">
            <Pagination :blogs="blogs" />
        </div>
    </AuthenticatedLayout>
</template>
