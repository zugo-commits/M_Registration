<template>
    <div >
        <div class="hello " style="background: white">
            <h2 style="align: left">Registration</h2>
            <form @submit="" style="width: 500px">
                <div class="form-group" label="Mobile Number">
                    <input style="width: 300px; height: 40px; border-radius: 5px" v-model="mNumber" type="number" placeholder="Mobile Number" disabled>
                </div>
                <br>
                <div class="form-group" label="First Name">
                    <input style="width: 300px; height: 40px; border-radius: 5px" v-model="fName" type="text" placeholder="First Name" disabled>
                </div>
                <br>
                <div class="form-group" label="Last Name">
                    <input style="width: 300px; height: 40px; border-radius: 5px" v-model="lName" type="text" placeholder="Last Name" disabled>
                </div>
                <br>
                <div class="form-group" label="DOB" align="center">
                    <!--<date-dropdown default="1970-01-01" v-model="selectedDate"></date-dropdown>-->
                    <date-dropdown default="1970-01-01" v-model="selectedDate"></date-dropdown>
                </div>
                <br>
                <div class="form-group" label="Sex" align="left">
                    <input type="radio" id="male" value="male" v-model="checkedSex" disabled>
                    <label style="padding-left: 10px; padding-right: 10px" for="male">Male</label>
                    <input type="radio" id="female" value="female" v-model="checkedSex" disabled>
                    <label style="padding-left: 10px" for="female">Female</label>
                </div>
                <br>
                <div class="form-group" label="Email">
                    <input style="width: 300px; height: 40px; border-radius: 5px" v-model="rMail" type="email" placeholder="Email Address" disabled>
                </div>
                <br>
                <div class="form-group">
                    <button style="width: 300px; height: 50px;  font-size:1.8rem; border-radius: 5px" class="" type="submit" disabled>Register</button>
                </div>
                <br>
            </form>
        </div>
        <div class="footerr " style="background: whitesmoke; color: white">
            <div class="form-group">
                <button style="width: 300px; height: 50px;  font-size:1.8rem; background: purple; color: white; border-radius: 5px" class="" type="" @click="rRegister">Login</button>
            </div>
        </div>
    </div>
</template>
<script>
    import DateDropdown from 'vue-date-dropdown'
    import router from '../router'
    export default {
        name: "CLogin",
        components: {
            DateDropdown
        },
        data: function () {
            return {
                mNumber: '',
                fName: '',
                lName: '',
                selectedDate: '',
                checkedSex: '',
                rMail: '',
                register: '',
                message: ''

            }
        },
        methods: {
            rRegister () {
                router.push({ name: 'Register' })
            }
        }
    }
</script>

<style scoped>
    h3 {
        margin: 40px 0 0;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        display: inline-block;
        margin: 0 10px;
    }
    a {
        color: #42b983;
    }
    input {
        padding: 1px 1px 1px 1px;
    }
    form {
        /*height: 300px !important;*/
        width: 300px !important;
    }
    .hello {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 1.5rem;
        padding: 4px 4px 4px 4px;
        border-radius: 5px;
    }
    .footerr {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 2.5rem;
        padding: 50px 30px;
        border-radius: 5px;
    }
    .footerr2 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 2.5rem;
        padding: 20px 10px;
        border-radius: 50px;
    }
    /*input:disabled {*/
        /*background-color: gray;*/
    /*}*/
    input.disable-input {
        background-color: gray;
    }
</style>
<style>
    h2 {
        justify-content: left;
    }
</style>
