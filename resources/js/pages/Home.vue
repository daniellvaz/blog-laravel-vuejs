<script setup>
    import { Link } from '@inertiajs/vue3'
    import Button from 'primevue/button'

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
        <section class="w-full max-w-[1120px] m-auto min-h-[600px] flex items-center justify-between">
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

                <Button class="mt-8">
                    <Link href="/timeline">
                        Explorar agora
                    </Link>
                </Button>
            </div>
            <img src="../../assets/hero.svg" alt="">
        </section>
    </main>
    <Footer />
</template>
