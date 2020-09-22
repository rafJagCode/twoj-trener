<template>
    <div class="chat-app">
        <ContactsManager :contacts="contacts" @contactAdded="addContact" @contactRemoved="removeContact" @changeComponent="changeVisibleComponent" v-show="componentVisible==='ContactsManager'"/>
        <ContactsList :contacts="contacts" @selected="startConversationWith" @changeComponent="changeVisibleComponent" v-show="componentVisible==='ContactsList'"/>
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
    </div>
</template>
<script>
    import Conversation from './Conversation';
    import ContactsList from './ContactsList';
    import ContactsManager from './ContactsManager'
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
                contacts: [],
                componentVisible: 'ContactsList'
            }
        },
        mounted(){
            Echo.private(`messages.${this.user.id}`)
                .listen('NewMessage', (e)=>{
                    this.handleIncoming(e.message);
                })

            axios.get('/contacts')
                .then((response)=>{
                    this.contacts = response.data;
                })
        },
        methods:{
            startConversationWith(contact){
                this.updateUnreadCount(contact, true);
                axios.get(`/conversation/${contact.id}`)
                    .then((response)=>{
                        this.messages = response.data;
                        this.selectedContact = contact;
                    })
            },
            saveNewMessage(message){
                this.messages.push(message);
            },
            handleIncoming(message){
                if(this.selectedContact && message.from === this.selectedContact.id){
                    this.saveNewMessage(message);
                    return;
                };
                this.updateUnreadCount(message.from_contact, false);
            },
            updateUnreadCount(contact, reset){
                this.contacts = this.contacts.map((single)=>{
                    if(single.id !== contact.id){
                        return single;
                    } 
                    if(reset) single.unread = 0;
                    else single.unread += 1;
                    return single;
                })
            },
            addContact(contact){
                this.contacts.push(contact);
            },
            removeContact(contact){
                let indexOfContactToRemove = this.contacts.findIndex(singleContact=>singleContact.id===contact.id);
                Vue.delete(this.contacts, indexOfContactToRemove);
            },
            changeVisibleComponent(name){
                this.componentVisible = name;
            }
        },
        components: {Conversation, ContactsList, ContactsManager}
    }

</script>
<style lang="css" scoped>
    .chat-app{
        display:flex;
        height: 400px;
    }
</style>