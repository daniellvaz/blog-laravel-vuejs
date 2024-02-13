<template>
    <header class="w-full p-4 flex items-center justify-center bg-zinc-950 text-lg text-zinc-50">
        <strong>Blog</strong>
    </header>
    <main>
        <p>{{ name }}</p>

        <InputText type="text" v-model="name" />
    </main>
</template>

<script>
import InputText from 'primevue/inputtext'

export default {
    components: {
        InputText
    },
    data() {
        return {
            name: ''
        }
    }
}
</script>
