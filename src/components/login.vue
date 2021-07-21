<form @submit.prevent="login()">
  <label>
    Username:
    <input type="text" v-model="loginCreds.email">
  </label>
  <label>
    Password:
    <input type="password" v-model="loginCreds.password">
  </label>
  <button type="submit">Login</button>
</form>

<form @submit.prevent="signup()">
  <label>
    Username:
    <input type="text" v-model="signupCreds.email">
  </label>
  <label>
    Password:
    <input type="password" v-model="signupCreds.password">
  </label>
  <button type="submit">Sign Me Up!</button>
</form>
