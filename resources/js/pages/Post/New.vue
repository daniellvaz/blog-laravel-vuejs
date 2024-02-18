<script setup>
    import { ref } from 'vue'

    import Card from 'primevue/card'
    import Button from 'primevue/button'
    import Dialog from 'primevue/dialog';
    import InputText from 'primevue/inputtext'
    import MultiSelect from 'primevue/multiselect'
    import Editor from 'primevue/editor'

    import Navbar from '../../components/Navbar.vue'
    import Footer from '../../components/Footer.vue'

    const visible = ref(false)
    const props = defineProps({
        user: Object,
        posts: Array,
        post: {
            title: String,
            subtitle: String,
            categoryId: String,
            content: String,
            cover: String
        }
    })

    const onSubmit = () => {
        console.log(props.post)
    }
</script>

<template>
    <Navbar :user="user" />
    <main class="w-full min-h-screen mt-20 dark:bg-zinc-950">
        <Dialog v-model:visible="visible" modal header="Header" :style="{ width: '50rem' }" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
            <template #header>
                Novo Post
            </template>
            <form @submit.prevent="onSubmit" action="/post" method="post">
                <label for="title">Título</label>
                <InputText id="title" class="w-full mb-4"/>

                <div class="flex gap-4">
                    <div>
                        <label for="title">Sub-titulo</label>
                        <InputText id="title" class="w-full"/>
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="title" class="mb-1">Categoria</label>
                        <MultiSelect v-model="selectedCities" :options="groupedCities" optionLabel="label" optionGroupLabel="label" optionGroupChildren="items" display="chip" placeholder="Select Cities" class="w-full">
                            <template #optiongroup="slotProps">
                                <div class="flex items-center">
                                    <div>{{ slotProps.option.label }}</div>
                                </div>
                            </template>
                        </MultiSelect>
                    </div>
                </div>
                <Editor
                    class="mt-4"
                    editorStyle="height: 320px"
                />

                <div class="flex gap-4 items-center mt-4">
                    <Button label="Cancelar" severity="danger" @click="visible = false" />
                    <Button label="Postar" type="submit" />
                </div>
            </form>
        </Dialog>

        <div class="w-full max-w-[1120px] m-auto">
            <div class="py-4 flex items-center justify-between">
                <strong class="dark:text-zinc-50 text-lg">Minhas publicações</strong>

                <Button @click="visible = true">Novo post</Button>
            </div>

            <div class="w-full grid grid-cols-[repeat(auto-fill,minmax(276px,1fr))]">
            </div>
        </div>
    </main>
    <Footer />
</template>
