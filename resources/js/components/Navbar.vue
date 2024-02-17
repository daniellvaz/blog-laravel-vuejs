<script setup>
    import {
        Link
    } from '@inertiajs/vue3'
    import Menu from 'primevue/menu';
    import Button from 'primevue/button';
    import Avatar from 'primevue/avatar';
    import Divider from 'primevue/divider';

    import {
        ref
    } from "vue";
    import {
        authentication
    } from '../utils/authentication';

    const props = defineProps({
        user: Object
    })

    const {
        redirect
    } = authentication({
        clientId: import.meta.env.VITE_GITHUB_CLIENT_ID,
        redirectUrl: import.meta.env.VITE_GITHUB_REDIRECT_URL,
    })

    const menu = ref();
    const items = ref([{
        label: 'Menu',
        items: [{
                label: 'Perfil',
                icon: 'pi pi-user',
                url: '/profile',
            },
            {
                label: 'Logout',
                icon: 'pi pi-sign-out',
                url: '/logout'
            }
        ]
    }]);

    const toggle = (event) => {
        menu.value.toggle(event);
    };
</script>

<template>
    <nav class="w-full max-h-20 h-full fixed top-0 left-0 z-10 border-b border-b-zinc-800 dark:bg-zinc-950">
        <div class="w-full max-w-[1120px] py-4 m-auto flex items-center justify-between">
            <div class="flex gap-8 items-center">
                <a href="/">
                    <strong class="text-zinc-50 text-lg">Blog dev</strong>
                </a>

                <ul class="flex gap-4 text-zinc-50 text-sm">
                    <li>
                        <Link href="/">Início</Link>
                    </li>
                    <li>
                        <Link href="/back-end">Back-end</Link>
                    </li>
                    <li>
                        <Link href="/front-end">Front-end</Link>
                    </li>
                </ul>
            </div>

            <div class="flex gap-2 items-center">
                <a v-if="!user" class="h-full px-4 py-2 bg-emerald-500 rounded font-bold" :href="redirect()">
                    Entar com
                    <i class="pi pi-github"></i>
                </a>
                <div v-else class="flex items-center mr-4">
                    <p class="text-zinc-50">{{ user . name }}</p>
                    <Divider layout="vertical" />
                    <Avatar :image="user.photo" :label="user.name.slice(0, 1)" class="mr-2" size="large"
                        shape="circle" />
                    <button @click="toggle" class="text-zinc-50">
                        <i class="pi pi-chevron-down"></i>
                    </button>
                    <Menu ref="menu" id="overlay_menu" :model="items" :popup="true">
                        <template #item="{item}">
                            <Link class="p-4 flex gap-4" :href="item.url">
                            <i :class="item.icon"></i>
                            {{ item . label }}
                            </Link>
                        </template>
                    </Menu>
                </div>
                <Button icon="pi pi-discord" outlined />
            </div>
        </div>
    </nav>
</template>
