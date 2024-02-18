import { defineStore } from "pinia";

export const usePost = defineStore("post", {
    state: () => ({
        post: {},
    }),
});
