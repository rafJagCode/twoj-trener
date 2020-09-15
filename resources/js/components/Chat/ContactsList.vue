<template>
    <div class="contacts-list">
        <ul>
            <li v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{'selected' : contact===selected}">
                <div class="avatar">
                    <img :src="/images/ + contact.profilePicture" :alt="contact.name" class="avatar-img">
                </div>
                <div class="contact">
                    <p class="name">{{contact.firstName}} {{contact.secondName}}</p>
                    <p class="email">{{contact.email}}</p>
                </div>
                <div class="message-notification" v-if="contact.unread">
                    <span class="unread-count">{{contact.unread}}</span>
                    <i class="unread-icon fas fa-envelope fa-2x"></i>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                selected: null
            }
        },
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        methods:{
            selectContact(contact){
                this.selected = contact;
                
                this.$emit('selected', contact);
            }
        },
        computed:{
            sortedContacts(){
                return _.sortBy(this.contacts, [(contact)=>{
                    if(contact === this.selected){
                        return Infinity;
                    }
                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>
<style lang="css" scoped>
    .contacts-list{
        flex: 2;
        max-height: 400px;
        overflow-y: scroll;
        scrollbar-width: none;
        -ms-overflow-style: none;
        border-right: 1px solid black;
    }
    .contacts-list::-webkit-scrollbar{
        width: 0;
        height: 0;
    }
    ul{
        padding:0;
    }
    li{
        display: flex;
        padding: 2px;
        border-bottom: 1px solid black;
        height: 80px;
        position: relative;
        cursor: pointer;
    }
    li.selected{
        background: lightblue;
    }
    .avatar{
        display: flex;
        flex: 1;
        align-items: center;
    }
    .avatar-img{
        width: 35px;
        border-radius: 50%;
        margin: 0 auto;
    }
    .contact{
        display: flex;
        flex: 3;
        font-size: 10px;
        overflow: hidden;
        flex-direction: column;
        justify-content: center;

    }
    p{
        margin: 0;
    }
    .name{
        font-weight: bold;
    }
    .message-notification{
        display: flex;
        flex-direction: column;
        margin:10px 0;
        position: relative;
        right:10px;
    }
    .unread-count{
        align-self: flex-end;
        font-size: 11px;
        font-weight: 700;
        border-radius: 20%;
        background: red;
        padding: 3px;
        position: relative;
        line-height: 11px;
        top: 10px;
        right: 2px;
    }
    .unread-icon{
        padding-right: 10px;
    }
</style>