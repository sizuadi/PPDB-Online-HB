<template>
    <div>
        <div v-show="currentStep === 1">
            <label for="name">Name:</label>
            <input type="text" v-model="formData.name" />
        </div>
        <div v-show="currentStep === 2">
            <label for="email">Email:</label>
            <input type="email" v-model="formData.email" />
        </div>
        <div v-show="currentStep === 3">
            <label for="phone">Phone:</label>
            <input type="text" v-model="formData.phone" />
        </div>
        <button @click="nextStep">Next</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            currentStep: 1,
            formData: {
                name: "",
                email: "",
                phone: "",
            },
        };
    },
    methods: {
        nextStep() {
            this.currentStep++;
            axios
                .post("/form", this.formData)
                .then((response) => console.log(response.data));
        },
    },
};
</script>
