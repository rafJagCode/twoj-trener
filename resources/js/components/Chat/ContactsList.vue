<template>
    <div class="contacts-list">
        <div class="contacts-list__interface-container">
            <i class="contacts-list__option-btn fas fa-user" @click="changeComponent"></i>
            <input class="contacts-list__search-contact-input" type="text" v-model="searchedContact" placeholder="Wyszukaj kontakt" aria-label="Wyszukaj kontakt">
        </div>
        <ul class="contacts-list__contacts-list">
            <li class="contacts-list__contact-item" v-for="contact in filteredConstacts" :key="contact.id" @click="selectContact(contact)" :class="{'contacts-list__contact-item--selected' : contact===selected}">
                <div class="contacts-list__contact-avatar">
                    <img class="contacts-list__contact-avatar-img" :src="/images/ + contact.profilePicture" :alt="contact.name">
                </div>
                <div class="contacts-list__contact-details">
                    <p class="contacts-list__contact-name">{{contact.firstName}} {{contact.secondName}}</p>
                    <p class="contacts-list__contact-email">{{contact.email}}</p>
                </div>
                <div class="contacts-list__message-notification" v-if="contact.unread">
                    <i class="contacts-list__unread-icon fas fa-envelope"></i>
                    <span class="contacts-list__unread-count">{{contact.unread}}</span>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                selected: null,
                searchedContact: '',
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
            },
            changeComponent(){
                this.$emit('changeComponent', 'ContactsManager');
            }
        },
        computed:{
            sortedContacts(){
                return _.sortBy(this.contacts, [(contact)=>{
                    return contact.unread;
                }]).reverse();
            },
            filteredConstacts(){
                if(this.searchedContact===''){
                    return this.sortedContacts;
                }
                return this.sortedContacts.filter((contact)=>{
                    return contact.firstName.toLowerCase().match(this.searchedContact.toLowerCase())
                        || contact.secondName.toLowerCase().match(this.searchedContact.toLowerCase());
                })
            }
        }
    }
</script>
<style lang="css" scoped>
    .contacts-list{
        display:flex;
        flex:2;
        flex-direction: column;
    }
    .contacts-list__interface-container{
        display:flex;
        width: 94%;
        align-items: center;
        margin: 0 auto;
    }
    .contacts-list__option-btn{
        color: #8731E8;
        cursor: pointer;
        border: 1px solid #8731E8;
        padding: 5px;
        font-size: 20px;
        border-radius: 20%;
        margin: auto;
    }
    .contacts-list__search-contact-input{
        margin: 10px 0 10px auto;
        width:85%;
        border:none;
        border-bottom: 1px solid #8731E8;
    }
    .contacts-list__search-contact-input:focus{
        outline:none;
        border:none;
        border-bottom: 1px solid #8731E8;
    }
    .contacts-list__contacts-list{
        padding:0;
        overflow: scroll;
        overflow-x: hidden;
    }
    .contacts-list__contacts-list::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        border-radius: 10px;
    }

    .contacts-list__contacts-list::-webkit-scrollbar
    {
        width: 5px;
        background-color: #F5F5F5;
    }

    .contacts-list__contacts-list::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-image: -webkit-gradient(linear,
                                        left bottom,
                                        left top,
                                        color-stop(0.44, rgb(180, 128, 240)),
                                        color-stop(0.72, rgb(158, 98, 226)),
                                        color-stop(0.86, rgb(135, 49, 232)));
    }
    .contacts-list__contact-item{
        height: 50px;
        -webkit-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        -moz-box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        box-shadow: 0px 0px 5px 1px rgb(180, 128, 240);
        border-radius: 0px 15px 15px 0px;
        -moz-border-radius: 0px 15px 15px 0px;
        -webkit-border-radius: 0px 15px 15px 0px;
        border: 0px solid #000000;
        padding: 10px;
        width: 94%;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 7px auto;
        cursor: pointer;
    }
    .contacts-list__contact-item--selected{
        background: rgb(180, 128, 240);
    }
    .contacts-list__contact-avatar{
        flex:1;
    }
    .contacts-list__contact-avatar-img{
        height:35px;
        border-radius:50%;
    }
    .contacts-list__contact-details{
        font-size:10px;
        flex:4;
    }
    .contacts-list__contact-name{
        font-weight: bold;
        margin:0;
        line-height: 11px;
    }
    .contacts-list__contact-email{
        margin:0;
        line-height: 11px;
    }
    .contacts-list__unread-count{
        font-size: 11px;
        line-height: 11px;
        color:#8731E8;
        font-weight: bold;
    }
    .contacts-list__unread-icon{
        font-size: 11px;
        line-height: 11px;
        color:#8731E8;
    }
</style>