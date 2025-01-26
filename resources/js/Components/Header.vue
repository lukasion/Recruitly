<script setup>
import {ref} from 'vue'

const search = ref('')
</script>

<template>
	<q-toolbar class="bg-white border-b-2 q-py-lg !px-6 !w-[calc(100%-350px)]">
		<q-avatar>
			<img src="https://cdn.quasar.dev/logo-v2/svg/logo-mono-black.svg">
		</q-avatar>

		<q-toolbar-title class="text-black">
			Witaj w systemie, <strong>Łukasz</strong>!
		</q-toolbar-title>

		<q-space/>

		<q-input
			outlined
			dense
			placeholder="Szukaj..."
			class="w-64 mr-12"
			rounded
			v-model="search"
		/>

		<q-btn-dropdown flat dense icon="add" label="Dodaj" class="mr-4">
			<q-list>
				<q-item clickable>
					<q-item-section>
						<q-item-label>Nowa rekrutacja</q-item-label>
					</q-item-section>
				</q-item>
				<q-item clickable>
					<q-item-section>
						<q-item-label>Nowy kandydat</q-item-label>
					</q-item-section>
				</q-item>
			</q-list>
		</q-btn-dropdown>
		<q-btn flat round dense icon="notifications"/>
		<q-btn flat round dense icon="settings" class="ml-2"/>
	</q-toolbar>
</template>