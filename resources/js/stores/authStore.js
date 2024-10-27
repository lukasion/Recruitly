import {defineStore} from 'pinia'
import {ref} from 'vue'

export const useAuthStore = defineStore('authStore', () => {
    // A variable ref to store the user data
    const userData = ref(null)

    // A function acts as a setter to set the incoming user data
    const setUserData = (newUserData) => {
        userData.value = newUserData
    }

    const init = async () => {
        await axios.get('/api/user')
            .then((response) => {
                if (response.data && response.status === 200) {
                    setUserData(response.data)
                }
            })
            .catch((error) => {
                return false
            })
    }

    return {userData, setUserData, init}
})