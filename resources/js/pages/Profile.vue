<script setup>
    import Navbar from '../components/Navbar.vue'
    import Footer from '../components/Footer.vue'

    const props = defineProps({
        user: Object,
        posts: Array
    })

    console.log(props.posts)
</script>

<template>
    <Navbar :user="user" />
    <main class="w-full min-h-screen dark:bg-zinc-950">

    </main>
    <Footer />
</template>
