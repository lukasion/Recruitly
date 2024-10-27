<script setup>
import * as AppLayout from './layouts/App.vue'
import {useAuthStore} from "./stores/authStore.js";

const authStore = useAuthStore()
</script>

<template>
	<app-layout v-if="authStore.userData"/>
	<router-view v-else/>
</template>
