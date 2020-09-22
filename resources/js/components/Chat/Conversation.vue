<template>
    <div class="conversation">
        <h1>{{contact ? contact.firstName+' '+contact.secondName : 'Select contact'}}</h1>
        <MessagesFeed :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>
<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';
    export default{
        props:{
            contact:{
                type: Object,
                default: null
            },
            messages:{
                type: Array,
                default: []
            }
        },
        methods:{
            sendMessage(message){
                if(!this.contact){
                    return;
                }
                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    message: message
                }).then((response)=>{
                    this.$emit('new', response.data);
                })
            }
        },
        components:{ MessagesFeed, MessageComposer}
    }
</script>
<style lang="css" scoped>
    .conversation{
        flex: 5;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin:2px;
        min-width:750px;
    }
    h1{
        font-size: 10px;
        padding: 10px;
        margin: auto;
        border-bottom: 1px dashed #8731E8;
    }
</style>