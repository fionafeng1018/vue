<template>
    <div>
        <!--Form Validation-->
        <form action="">
        
            <div class="field">
                <label class="label" for="name">Name:</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Please enter your name">
                </div>               
            </div>

            <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                    </span>
                </div>
                <p class="help is-success">This username is available</p>
            </div>

            <div class="field">
                <label class="label" for="phone">Phone Number</label>
                <div class="control">
                    <input class="input" type="tel" placeholder="Please enter your phone number">
                </div> 
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
            </div>
            <button class="button is-primary">Submit</button>
        </form>

    </div>
</template>
<script>

export default {

    data(){
        return{

        }
    },

    validations:{

    }
}
</script>
<style lang="scss">
    form{
    padding:20px;
    }
</style>