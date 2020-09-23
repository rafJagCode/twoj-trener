<template>
    <div class="messanger">
        <h1 class=messanger__receiver-name>{{receiver.firstName+' '+receiver.secondName}}</h1>
        <MessagesFeed :receiver="this.receiver" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>
<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';
    export default{
        data(){
            return{
                messages: [],
            }
        },
        props:{
            receiver:{
                type: Object,
                required: true
            },
            user:{
                type: Object,
                required: true
            }  
        },
        mounted(){
            axios.get(`/conversation/${this.receiver.id}`)
                .then((response)=>{
                    this.messages = response.data;
                })
            Echo.private(`messages.${this.user.id}`)
                .listen('NewMessage', (e)=>{
                    this.handleIncoming(e.message);
                })
        },
        methods:{
            sendMessage(message){
                axios.post('/conversation/send', {
                    contact_id: this.receiver.id,
                    message: message
                }).then((response)=>{
                    this.saveNewMessage(response.data);
                })
            },
            startConversationWith(contact){
                this.updateUnreadCount(contact, true);
                axios.get(`/conversation/${contact.id}`)
                    .then((response)=>{
                        this.messages = response.data;
                    })
            },
            saveNewMessage(message){
                this.messages.push(message);
            },
            handleIncoming(message){
                if(message.from === this.receiver.id){
                    this.saveNewMessage(message);
                    return;
                };
            },
        },
        components:{ MessagesFeed, MessageComposer}
    }
</script>
<style lang="css" scoped>
    .messanger{
        flex: 5;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin:2px;
        height: 341px;
        -webkit-box-shadow: 0px 0px 5px 1px #8731E8;
        -moz-box-shadow: 0px 0px 5px 1px #8731E8;
        box-shadow: 0px 0px 5px 1px #8731E8;
        border-radius: 1%;
        padding: 5px;
    }
    .messanger__receiver-name{
        font-size: 10px;
        padding: 5px;
        margin: auto;
        border-bottom: 1px dashed #8731E8;
    }
</style>
</script>