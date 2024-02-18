<script setup>
    import { Link } from '@inertiajs/vue3'
import { stringify } from 'postcss';
    import Avatar from 'primevue/avatar'

    defineProps({
        title: String,
        cover: String,
        category: String,
        likes: Number,
        user: Object,
        createdAt: String,
    })

</script>
<template>
    <Link :href="`/post/${user.id}/${slug}`" class="w-full bg-zinc-900 border border-zinc-700 rounded">
        <div class="w-full h-[200px]">
            <img class="w-full h-full rounded-t object-cover" :src="cover" :alt="title">
        </div>
        <div class="p-4">
            <div class="w-full flex items-center gap-4">
                <Avatar shape="circle" size="large" :image="user.photo" />

                <div>
                    <p class="text-zinc-200">{{ user.name }}</p>
                    <small class="text-zinc-400">{{ createdAt }}</small>
                </div>
            </div>
        </div>
        <div class="p-4">
            <h2 class="text-zinc-200 text-lg font-bold">
                {{ title }}
            </h2>
            <strong class="text-zinc-300 text-xs">{{ category }}</strong>
        </div>
        <div class="p-4 flex items-center justify-between">
            <div class="flex gap-2 items-center text-zinc-50">
                <button>
                    <i class="pi pi-heart"></i>
                </button>
                <p>{{ likes }}</p>
            </div>

            <button class="text-zinc-50">
                <i class="pi pi-bookmark"></i>
            </button>
        </div>
    </Link>
</template>
