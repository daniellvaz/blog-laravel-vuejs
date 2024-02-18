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
        items: [
            {
                label: 'Minha conta',
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
            <Link href="/">
                <strong class="text-zinc-50 text-lg">Blog dev</strong>
            </Link>

            <div class="flex gap-2 items-center">
                <div v-if="!user" class="flex gap-4 items-center">
                    <a class="h-full px-4 py-2 bg-emerald-500 rounded font-bold" :href="redirect()">
                        Entar com
                        <i class="pi pi-github"></i>
                    </a>
                    <Button icon="pi pi-discord" outlined />
                </div>

                <div v-else class="flex items-center mr-4">
                    <Button>Novo post</Button>

                    <Divider layout="vertical" />

                    <Avatar
                        class="mr-2"
                        size="large"
                        shape="circle"
                        image="https://github.com/daniellvaz.png"
                        :label="user.name.slice(0, 1)"
                    />

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

            </div>
        </div>
    </nav>
</template>
