<script setup lang="ts">
import AuthenticatedLayout from "../../Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { PropType } from "vue";
import { Course } from "../../types/app";
import InputLabel from "../../Components/InputLabel.vue";
import TextInput from "../../Components/TextInput.vue";
import InputError from "../../Components/InputError.vue";
import PrimaryButton from "../../Components/PrimaryButton.vue";
import TextareaInput from "../../Components/TextareaInput.vue";

const props = defineProps({
    course: {
        type: Object as PropType<Course>,
        required: true,
    },
});

const form = useForm({
    name: props.course.name,
    program: props.course.program,
    method: "PUT",
});

const send = () => {
    form.put(route("courses.update", props.course.id));
};
</script>

<template>
    <Head title="Cours" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ course.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Informations du cours
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                Modifier les informations du cours. Ajoutez ou
                                sélectionnez un devoir.
                            </p>
                        </header>

                        <form @submit.prevent="send" class="mt-6 space-y-6">
                            <div>
                                <InputLabel for="name" value="Nom" />

                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    autofocus
                                    autocomplete="name"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.name"
                                />
                            </div>

                            <div>
                                <InputLabel for="program" value="Programme" />

                                <TextareaInput
                                    id="program"
                                    class="mt-1 block w-full"
                                    v-model="form.program"
                                    rows="6"
                                >
                                </TextareaInput>

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.program"
                                />
                            </div>

                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing"
                                    >Enregistrer</PrimaryButton
                                >

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p
                                        v-if="form.recentlySuccessful"
                                        class="text-sm text-gray-600"
                                    >
                                        Sauvé.
                                    </p>
                                </Transition>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Devoirs
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                Ajoutez ou sélectionnez un devoir.
                            </p>
                        </header>

                        <ul class="mt-6 space-y-6">
                            <li
                                v-for="homework in course.homeworks"
                                :key="homework.id"
                            >
                                <Link
                                    :href="route('homeworks.show', homework.id)"
                                    class="text-indigo-600 hover:text-indigo-900"
                                >
                                    {{ homework.name }}
                                </Link>
                            </li>
                            <li v-if="course.homeworks.length === 0">
                                Aucun devoir.
                            </li>
                        </ul>

                        <div class="flex items-center gap-4">
                            <Link
                                :href="
                                    route('homeworks.create', {
                                        courseId: course.id,
                                    })
                                "
                                class="mt-6 text-indigo-600 hover:text-indigo-900"
                            >
                                Ajouter un devoir
                            </Link>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
