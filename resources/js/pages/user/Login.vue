<script setup>
import {ref} from 'vue'

const email = ref('')
const password = ref('')

const signIn = () => {
	axios.post('/api/login', {
		email: email.value,
		password: password.value
	}).then(response => {
		console.log(response)
	}).catch(error => {
		console.error(error)
	})
}
</script>

<template>
	<q-layout>
		<q-page-container>
			<q-page class="flex flex-col flex-center bg-grey-2">
				<h2 class="text-h4 mb-6 text-blue-7">
					<strong>Recruitly</strong>
				</h2>

				<q-card class="q-pa-md shadow-2 w-1/5" bordered>
					<q-card-section class="text-center">
						<div class="text-grey-9 text-h5 text-weight-bold">Zaloguj się</div>
						<div class="text-grey-8 mt-2">Witaj! Zaloguj się do swojego konta<br/>w systemie
							<strong>Recruitly</strong>.
						</div>
					</q-card-section>
					<q-card-section>
						<q-input dense outlined v-model="email" label="Adres e-mail"></q-input>
						<q-input dense outlined class="q-mt-md" v-model="password" type="password"
						         label="Hasło"></q-input>
					</q-card-section>
					<q-card-section>
						<q-btn
							style="border-radius: 8px;"
							color="dark"
							rounded
							size="md"
							label="Zaloguj się"
							no-caps
							class="full-width"
							@click.prevent="signIn"
						/>
					</q-card-section>
					<q-card-section class="text-center q-pt-none">
						<div class="text-grey-8">Nie posiadasz konta?
							<a href="#" class="text-dark text-weight-bold" style="text-decoration: none">
								Zarejestruj się.
							</a>
						</div>
					</q-card-section>
				</q-card>
			</q-page>
		</q-page-container>
	</q-layout>
</template>

