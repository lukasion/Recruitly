<script setup>

import {ref} from "vue";

const interviews = ref([
	{
		date: '2021-11-15',
		time: '10:00 - 11:00',
		name: 'Interview z Łukasz Mikulec'
	},
	{
		date: '2021-11-15',
		time: '13:00 - 14:00',
		name: 'Interview z Łukasz Testowy'
	},
	{
		date: '2021-11-15',
		time: '15:00 - 16:00',
		name: 'Interview z Łukasz Kowalski'
	}
])
</script>

<template>
	<div class="flex flex-col gap-2 w-full">
		<div class="flex justify-between gap-4 [&:not(:first-child)]:border-t [&:not(:first-child)]:pt-2 " v-for="interview in interviews" :key="interview.name">
			<div class="flex gap-4">
				<div class="flex flex-col text-center">
					<span class="font-bold">Mon</span>
					<span class="text-grey">15</span>
				</div>

				<div class="flex flex-col">
					<span class="font-bold">{{ interview.name }}</span>
					<span class="text-grey">{{ interview.time }}</span>
				</div>
			</div>

			<div class="flex items-center">
				<a href="#" class="text-blue-500 text-xs">Szczegóły</a>
			</div>
		</div>
	</div>
</template>