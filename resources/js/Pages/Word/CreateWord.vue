<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import FormSection from "@/Components/FormSection.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    _method: "POST",
    topic: "",
    kanji: "",
    vnCn: "",
    readingOn: "",
    readingKun: "",
    meaning: "",
    sampleWords: "",
});
</script>
<template>
    <AppLayout title="Create Word">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Word
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <FormSection @submitted="createWord">
                        <template #title> Create Word </template>
                        <template #form>
                            <div class="col-span-6 sm:col-span-4">
                                <InputLabel for="word" value="Kanji" />
                                <TextInput
                                    id="kanji"
                                    v-model="form.kanji"
                                    type="text"
                                    class="mt-1 block w-full"
                                    required
                                    autocomplete="kanji"
                                />
                                <InputError
                                    :message="form.errors.kanji"
                                    class="mt-2"
                                />
                            </div>
                            
                        </template>
                        <template #actions>
                            <ActionMessage
                                :on="form.recentlySuccessful"
                                class="mr-3"
                            >
                                Saved.
                            </ActionMessage>

                            <PrimaryButton
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Save
                            </PrimaryButton>
                        </template>
                    </FormSection>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
