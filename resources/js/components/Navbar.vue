<script setup>
    import Menu from 'primevue/menu';
    import Button from 'primevue/button';
    import Avatar from 'primevue/avatar';
    import Divider from 'primevue/divider';

    import { ref } from "vue";
    import { authentication } from '../utils/authentication';

    const props = defineProps({
        user: Object
    })

    const { redirect } = authentication({
        clientId: import.meta.env.VITE_GITHUB_CLIENT_ID,
        redirectUrl: import.meta.env.VITE_GITHUB_REDIRECT_URL,
    })

    const menu = ref();
    const items = ref([
        {
            label: 'Menu',
            items: [
            {
                    label: 'Perfil',
                    icon: 'pi pi-user',
                    url: '/profile'
                },
                {
                    label: 'Logout',
                    icon: 'pi pi-sign-out'
                }
            ]
        }
    ]);

    const toggle = (event) => {
        menu.value.toggle(event);
    };
</script>

<template>
    <nav class="w-full p-4 border-b border-b-zinc-800 dark:bg-zinc-950 flex items-center justify-between">
        <div class="flex gap-8 items-center">
            <a href="/">
                <strong class="text-zinc-50 text-lg">Blog dev</strong>
            </a>

            <ul class="flex gap-4 text-zinc-50 text-sm">
                <li>
                    <a href="/">Início</a>
                </li>
                <li>
                    <a href="/back-end">Back-end</a>
                </li>
                <li>
                    <a href="/front-end">Front-end</a>
                </li>
            </ul>
        </div>

        <div class="flex gap-2 items-center">
            <a v-if="!user" class="h-full px-4 py-2 bg-emerald-500 rounded font-bold" :href="redirect()">
                Entar com
                <i class="pi pi-github"></i>
            </a>
            <div v-else class="flex items-center mr-4">
                <p class="text-zinc-50">{{ user.name }}</p>
                <Divider layout="vertical" />
                <Avatar :image="user.photo" :label="user.name.slice(0, 1)" class="mr-2" size="large" shape="circle" />
                <button @click="toggle" class="text-zinc-50">
                    <i class="pi pi-chevron-down"></i>
                </button>
                <Menu ref="menu" id="overlay_menu" :model="items" :popup="true" />
            </div>
            <Button icon="pi pi-discord" outlined />
        </div>
    </nav>
</template>
