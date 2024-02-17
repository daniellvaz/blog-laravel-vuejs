<script setup>
    import Card from 'primevue/card'
    import Button from 'primevue/button'
    import InputText from 'primevue/inputtext'

    import Navbar from '../components/Navbar.vue';
    import Footer from '../components/Footer.vue'

    const props = defineProps({
        user: Object,
        posts: Array
    })

    function filterByCategory(e) {
        console.log(e.srcElement.dataset.category)
    }
</script>

<template>
    <Navbar :user="user" />

    <main class="w-full mt-20 min-h-screen dark:bg-zinc-950">
        <div class="w-full max-w-[1120px] m-auto">
            <section class="w-full min-h-[600px] flex items-center justify-between">
                <div class="mb-4">
                    <h1 class="text-6xl text-emerald-500 font-bold">
                        Fique por dentro <br>
                        das principais <br>
                        novidades do mercado!
                    </h1>
                    <div class="px-2 border-l-4 border-l-zinc-600 mt-4">
                        <p class="dark:text-zinc-200 text-2xl">
                            Aqui você encontrar vários assuntos do mundo da programação!
                        </p>
                    </div>
                    <div class="mt-8 flex gap-4">
                        <InputText class="min-w-[440px]" placeholder="Assine nossa newsletter" />
                        <Button>Assinar agora</Button>
                    </div>
                </div>
                <img src="../../assets/hero.svg" alt="">
            </section>
            <section class="w-full grid gap-4 grid-cols-[repeat(auto-fill,minmax(276px,1fr))]">
                <p v-if="!posts">Sem items para mostrar</p>
                <Card v-else v-for="post of posts" :key="post.id">
                    <template #header>
                        <img
                            :alt="post.title"
                            :src="post.cover"
                            class="rounded-t"
                        />
                    </template>
                    <template #title> {{ post.title }}</template>
                    <template #subtitle> {{ post.subtitle }} </template>
                    <template #content>
                        <p class="m-0">{{ post.content.slice(0, 200) }} ...</p>
                    </template>
                    <template #footer>
                        <a :href="`/post/${post.slug}`">Ler mais</a>
                    </template>
                </Card>
            </section>
        </div>
    </main>
    <Footer />
</template>
