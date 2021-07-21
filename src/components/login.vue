<template>
  <form @submit.prevent="login()">
    <label>
      Username:
      <input type="text" v-model="loginCreds.email" />
    </label>
    <label>
      Password:
      <input type="password" v-model="loginCreds.password" />
    </label>
    <button type="submit">Login</button>
  </form>

  
<script>
export default {
    name: "Login",
  data() {
    return {
      loginCreds: {
        email: null,
        password: null
      },
      signupCreds: {
        email: null,
        password: null
      }
    }
  },
    methods: {
    ...mapActions("auth", ["attemptLogin", "attemptSignUp"]),
    signup() {
      //call API signup//
      this.attemptSignUp(this.signupCreds)
        .then(() => console.log("A confirmation email has been sent to you!"))
        .catch(err => console.log(err, "womp womp. Something went wrong."))
    },
    login() {
      //call API login//
      this.attemptLogin(this.loginCreds)
        .then(() => {
          this.$router.push(this.$route.query.redirect || "/");
          console.log('You have successfully logged in')
        })
        .catch(err => console.log(err, "womp womp. Something went wrong."))
    }
  }
}