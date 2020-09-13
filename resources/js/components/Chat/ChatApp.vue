<template>
    <div class="chat-app">
        <ContactsList :contacts="contacts" @selected="startConversationWith"/>
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
    </div>
</template>
<script>
    import Conversation from './Conversation';
    import ContactsList from './ContactsList';
    export default{
        props:{
            user:{
                type: Object,
                required: true
            }
        },
        data(){
            return{
                selectedContact: null,
                messages: [],
                contacts: []
            }
        },
        mounted(){
            axios.get('/contacts')
                .then((response)=>{
                    this.contacts = response.data;
                })
        },
        methods:{
            startConversationWith(contact){
                axios.get(`/conversation/${contact.id}`)
                    .then((response)=>{
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },
            saveNewMessage(message){
                this.messages.push(message);
            }
        },
        components: {Conversation, ContactsList}
    }

</script>
<style lang="css" scoped>
    .chat-app{
        display:flex;
    }
</style>