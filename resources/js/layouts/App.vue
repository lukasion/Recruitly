<script setup>
import Header from '../Components/Header.vue'
import {ref} from "vue";

const drawer = ref(true)
const menuList = [
	{icon: 'notifications', label: 'Powiadomienia'},
	{icon: 'drafts', label: 'Wiadomości'},
	{separator: true},
	{icon: 'logout', label: 'Wyloguj się'},
	{icon: 'settings', label: 'Ustawienia'}
]
</script>

<template>
	<q-layout class="!min-h-screen">
		<q-drawer
			v-model="drawer"
			:width="350"
			:breakpoint="500"
			class="bg-blue-7 pt-6 text-white px-4 rounded-r-2xl"
		>
			<q-scroll-area class="fit">
				<h2 class="text-h4 !font-extrabold mb-10 pl-4 pt-4">
					Recruitly.
				</h2>

				<q-list>
					<template v-for="(menuItem, index) in menuList" :key="index">
						<q-separator :key="'sep' + index" v-if="menuItem.separator" class="bg-blue-4 !mt-8 !mb-4"/>

						<q-item clickable :active="menuItem.label === 'Outbox'" v-ripple v-else>
							<q-item-section avatar>
								<q-icon :name="menuItem.icon"/>
							</q-item-section>
							<q-item-section class="text-h6 my-1">
								{{ menuItem.label }}
							</q-item-section>
						</q-item>
					</template>
				</q-list>
			</q-scroll-area>
		</q-drawer>

		<q-page-container>
			<Header class="fixed top-0 z-50"/>

			<q-page class="q-pa-md bg-grey-2 !pt-[105px]">
				<router-view/>
			</q-page>
		</q-page-container>
	</q-layout>
</template>
