<script setup>
    import { Link } from '@inertiajs/vue3'

    import Card from '../components/Card.vue';
    import Navbar from '../components/Navbar.vue';
    import Footer from '../components/Footer.vue';

    const props = defineProps({
        user: Object,
        posts: Array
    })

    console.log(props.posts[0].id)
</script>

<template>
    <Navbar :user="user" />
    <main class="w-full min-h-screen mt-20 py-4 dark:bg-zinc-950">
        <section class="w-full max-w-[1120px] h-full m-auto flex gap-4">
            <div class="w-full h-full flex flex-col gap-4">
                <p v-if="!posts">Sem items parar mostrar</p>
                <!-- <Card v-else v-for="post in posts"
                    :key="post.id"
                    :title="post.title"
                    :cover="post.cover"
                    :category="post.category"
                    :likes="post.likes"
                    :created-at="post.createdAt"
                    :user="post.user"
                /> -->
            </div>

            <div class="max-w-[400px] w-full h-fit bg-zinc-900 border border-zinc-700 rounded">
                <div class="p-4">
                    <strong class="text-zinc-50 text-2xl">Conteúdos relevantes</strong>
                </div>
                <div class="p-4 border-t border-t-zinc-700 flex flex-col overflow-y-auto">
                    <Link class="text-zinc-50" href="#">
                        Como fazer deploy na vercel
                    </Link>
                    <small class="text-zinc-400">
                        20 coments
                    </small>
                </div>
                <div class="p-4 border-t border-t-zinc-700 flex flex-col">
                    <Link class="text-zinc-50" href="#">
                        Como fazer deploy na vercel
                    </Link>
                    <small class="text-zinc-400">
                        20 coments
                    </small>
                </div>
                <div class="p-4 border-t border-t-zinc-700 flex flex-col">
                    <Link class="text-zinc-50" href="#">
                        Como fazer deploy na vercel
                    </Link>
                    <small class="text-zinc-400">
                        20 coments
                    </small>
                </div>
                <div class="p-4 border-t border-t-zinc-700 flex flex-col">
                    <Link class="text-zinc-50" href="#">
                        Como fazer deploy na vercel
                    </Link>
                    <small class="text-zinc-400">
                        20 coments
                    </small>
                </div>
            </div>
        </section>
    </main>
    <Footer />
</template>
