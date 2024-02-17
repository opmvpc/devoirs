<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { PropType } from "vue";
import { Course } from "../../types/app";

defineProps({
    courses: {
        type: Array as PropType<Course[]>,
        required: true,
    },
});
</script>

<template>
    <Head title="Cours" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Cours
                </h2>
                <div>
                    <Link
                        :href="route('courses.create')"
                        class="text-indigo-600 hover:text-indigo-900"
                    >
                        Ajouter un cours
                    </Link>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <ul class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <li
                        v-for="course in courses"
                        :key="course.id"
                        class="p-6 text-gray-900"
                    >
                        <Link :href="route('courses.show', course.id)">
                            {{ course.name }}
                        </Link>
                    </li>
                    <li v-if="!courses.length" class="p-6 text-gray-900">
                        Aucun cours.
                    </li>
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
