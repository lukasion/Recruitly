<script setup>
const props = defineProps({
	title: String,
	subtitle: String,
});
</script>

<template>
	<div class="bg-white rounded-lg py-4 px-6 flex flex-col items-start justify-start">
		<h2 class="text-xl font-bold mb-2">
			{{ props.title }}
		</h2>

		<slot />

		<h3 class="font-bold text-3xl" v-if="props.subtitle">
			{{ props.subtitle }}
		</h3>
	</div>
</template>