<script setup>
    import Button from 'primevue/button'
    import { authentication } from '../utils/authentication';

    const { redirect } = authentication({
        clientId: import.meta.env.VITE_GITHUB_CLIENT_ID,
        redirectUrl: import.meta.env.VITE_GITHUB_REDIRECT_URL,
    })
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
            <a class="h-full px-4 py-2 bg-emerald-500 rounded font-bold" :href="redirect()">
                Entar com
                <i class="pi pi-github"></i>
            </a>
            <Button icon="pi pi-discord" outlined />
        </div>
    </nav>
</template>
