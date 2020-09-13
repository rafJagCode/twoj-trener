<template>
    <div class="contacts-list">
        <ul>
            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{'selected' : index===selected}">
                <div class="avatar">
                    <img :src="/images/ + contact.profilePicture" :alt="contact.name" class="avatar-img">
                </div>
                <div class="contact">
                    <p class="name">{{contact.firstName}} {{contact.secondName}}</p>
                    <p class="email">{{contact.email}}</p>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                selected: 0
            }
        },
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        methods:{
            selectContact(index, contact){
                this.selected = index;
                
                this.$emit('selected', contact);
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
</style>