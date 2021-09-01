<template>
    <div class="form">
        <div class="error">
            <p v-if="errors.length" v-bind:style="errorstyle">
                <b>Error in the following field(s)</b>
                <ul>
                    <li v-for="error in errors" v-bind:key="error.id">{{error}}</li>
                </ul>
             </p>
        </div>
      <div class="container">          
          <form action="../api/dbh.php" method="POST">              
              <h2 class="signin">Sign Up</h2>
              <input type="text" v-model="username" placeholder="Username" class="input" name="username">
              <input type="password" v-model="password" placeholder="Password" class="input" name="password">
              <button class="btn" v-on:click="getLogin" name="signup">Sign Up</button><br>
              <div class="help">
                  <input type="checkbox"><span class="check">Remember me </span>
                  <span><a href="#">Forgot password?</a></span>
              </div> 
              <div class="social-links">
                 <span class="fa fa-twitter"></span>             
              </div>
          </form>
      </div>
  </div>
</template>

<script>
export default {    
    name: 'Signup',
    data() {
        return {                   
            errors: [],
            username: '',
            password: '',             
            errorstyle:{
                 width: '100%',
                 height: '100px',
                 border: 'none',
                 borderRadius: '10px',
                 background: 'red',
                 opacity: '0.55',
                 marginTop: '-60px',
                 color: 'black'

            }   
        }
    },
    methods: {
        getLogin(e){     
            
            if (this.username && this.password) {
                return true;
            }
            this.errors = [];
            if (!this.username) {
                this.errors.push('UserName Required!');
            }
            if (!this.password) {
                this.errors.push('Password Required!');
            }
            e.preventDefault(); 
            
            // var formdata = new formData;
            // formData.append('username', this.username)
            // formData.append('password', this.password)

        //     axios({
        //     method: 'post',
        //     url: '../api/dbh.php',
        //     // data: formData,
        //     config: { headers: {'Content-Type': 'multipart/form-data' }}
        // })
        }
    },
     
}
</script>

<style>
    @import '../assets/css/style.css';
    b{
        margin-top: -60px;
    }
</style>