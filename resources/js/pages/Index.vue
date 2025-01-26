<script setup>
import DashboardBox from '@/Components/dashboard/box.vue';
import DashboardInterviews from '@/Components/dashboard/interviews.vue';

</script>

<template>
	<div class="grid grid-cols-3 gap-4">
		<dashboard-box
			title="Aktywnych rekrutacji"
			subtitle="4"
		/>

		<dashboard-box
			title="Zgłoszeń w tym miesiącu"
			subtitle="25"
		/>
	</div>
	<div class="grid grid-cols-3 gap-4 mt-4">
		<dashboard-box
			title="Historia aktywności"
		>
			<p>
				<span class="font-bold">Ostatnia aktywność:</span> 2 dni temu
			</p>
		</dashboard-box>

		<dashboard-box
			title="Nadchodzące spotkania"
		>
			<dashboard-interviews />
		</dashboard-box>
	</div>
</template>
