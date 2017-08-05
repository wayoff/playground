import axios from 'axios';

const Auth = {
  currentUser() {
    return axios.get('/api/me');
  },

  logIn(email, password) {
    return axios.post('/api/login', {
      email,
      password
    });
  },

  logOut() {
      return axios.post('/api/logout');
  }
}

export default Auth;