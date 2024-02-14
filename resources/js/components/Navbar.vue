<script setup>
    import Button from 'primevue/button'
</script>

<template>
    <nav class="w-full p-4 border-b border-b-zinc-800 flex items-center justify-between">
        <div class="flex gap-4 items-center">
            <a href="/">
                <strong class="text-zinc-50 text-lg">Blog dev</strong>
            </a>
            <ul class="flex gap-4 text-zinc-50">
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
            <Button icon="pi pi-github" label="Entrar com" />
            <Button icon="pi pi-discord" outlined />
        </div>
    </nav>
</template>
