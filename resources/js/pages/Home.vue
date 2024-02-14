<script setup>
import Card from 'primevue/card'
import InputText from 'primevue/inputtext'

import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue'

function filterByCategory(e) {
    console.log(e.srcElement.dataset.category)
}

</script>

<template>
    <Navbar />
    <main class="w-full min-h-screen">
        <section class="w-full max-w-[1120px] m-auto">
            <div class="w-full mb-4 mt-4 flex gap-2 items-end justify-between">
                <InputText type="text" placeholder="Buscar por título" style="min-width: 276px;" />
                <ul class="flex gap-2">
                    <li>
                        <button data-category="front-end" @click="filterByCategory" class="text-zinc-50 text-xs px-4 py-2 bg-blue-600 rounded">
                            Front-end
                        </button>
                    </li>
                    <li>
                        <button class="text-zinc-50 text-xs px-4 py-2 bg-blue-600 rounded">Back-end</button>
                    </li>
                    <li>
                        <button class="text-zinc-50 text-xs px-4 py-2 bg-blue-600 rounded">Carreira</button>
                    </li>
                </ul>
            </div>
            <div class="w-full grid gap-4 grid-cols-[repeat(auto-fill,minmax(276px,1fr))]">
                <Card>
                    <template #header>
                        <img alt="user header" style="border-radius: 4px 4px 0 0;" src="https://plus.unsplash.com/premium_photo-1676422355165-d809008b8342?q=80&w=2598&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </template>
                    <template #title> Advanced Card </template>
                    <template #subtitle> Card subtitle </template>
                    <template #content>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sed consequuntur error repudiandae numquam deserunt quisquam repellat libero asperiores earum nam nobis, culpa ratione quam perferendis esse, cupiditate neque
                            quas!
                        </p>
                    </template>
                    <template #footer>
                        <a href="#">Ler mais</a>
                    </template>
                </Card>
                <Card>
                    <template #header>
                        <img alt="user header" style="border-radius: 4px 4px 0 0;" src="https://plus.unsplash.com/premium_photo-1676422355165-d809008b8342?q=80&w=2598&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </template>
                    <template #title> Advanced Card </template>
                    <template #subtitle> Card subtitle </template>
                    <template #content>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sed consequuntur error repudiandae numquam deserunt quisquam repellat libero asperiores earum nam nobis, culpa ratione quam perferendis esse, cupiditate neque
                            quas!
                        </p>
                    </template>
                    <template #footer>
                        <a href="#">Ler mais</a>
                    </template>
                </Card>
                <Card>
                    <template #header>
                        <img alt="user header" style="border-radius: 4px 4px 0 0;" src="https://plus.unsplash.com/premium_photo-1676422355165-d809008b8342?q=80&w=2598&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </template>
                    <template #title> Advanced Card </template>
                    <template #subtitle> Card subtitle </template>
                    <template #content>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sed consequuntur error repudiandae numquam deserunt quisquam repellat libero asperiores earum nam nobis, culpa ratione quam perferendis esse, cupiditate neque
                            quas!
                        </p>
                    </template>
                    <template #footer>
                        <a href="#">Ler mais</a>
                    </template>
                </Card>
                <Card>
                    <template #header>
                        <img alt="user header" style="border-radius: 4px 4px 0 0;" src="https://plus.unsplash.com/premium_photo-1676422355165-d809008b8342?q=80&w=2598&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </template>
                    <template #title> Advanced Card </template>
                    <template #subtitle> Card subtitle </template>
                    <template #content>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sed consequuntur error repudiandae numquam deserunt quisquam repellat libero asperiores earum nam nobis, culpa ratione quam perferendis esse, cupiditate neque
                            quas!
                        </p>
                    </template>
                    <template #footer>
                        <a href="#">Ler mais</a>
                    </template>
                </Card>
                <Card>
                    <template #header>
                        <img alt="user header" style="border-radius: 4px 4px 0 0;" src="https://plus.unsplash.com/premium_photo-1676422355165-d809008b8342?q=80&w=2598&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </template>
                    <template #title> Advanced Card </template>
                    <template #subtitle> Card subtitle </template>
                    <template #content>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sed consequuntur error repudiandae numquam deserunt quisquam repellat libero asperiores earum nam nobis, culpa ratione quam perferendis esse, cupiditate neque
                            quas!
                        </p>
                    </template>
                    <template #footer>
                        <a href="#">Ler mais</a>
                    </template>
                </Card>
            </div>
        </section>
    </main>
    <Footer />
</template>
