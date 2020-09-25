<template>
    <div class="email">
        <form ref="form" name="contact_form" action="javascript:void(0);">
            <input v-model="details" type="text" placeholder="Imię i nazwisko" required />
            <input v-model="number" type="number" placeholder="Numer telefonu" required />
            <input v-model="email" type="email" placeholder="Adres email" required />
            <textarea v-model="message" placeholder="Wiadomość" name="message" required></textarea>
            <input type="submit" class="multiple-send-message" value="Wyślij wiadomość" @click="checkValidation"/>
        </form>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                details: '',
                number: '',
                email: '',
                message: ''
            }
        },
        props:{
            receiver:{
                type: Object,
                required: true
            }
        },
        methods:{
            checkValidation(){
                if (this.$refs.form.checkValidity()) {
                    this.sendEmail();
                } else {
                    this.$refs.form.reportValidity();
                }
            },
            sendEmail(){
                axios.post('/email/send',{
                    details: this.details,
                    number: this.number,
                    email: this.email,
                    message: this.message,
                    receiver_email: this.receiver.email
                }).then(console.log('Wysłano'));
            }
        }
    }
</script>