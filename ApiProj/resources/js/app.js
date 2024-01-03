require('./bootstrap');

//import Vue from 'vue';
import App from './App.vue';
import SyncDatabasesButton from './components/SyncDatabasesButton.vue';
import { createApp } from 'vue';

createApp(App).mount('#app')

new Vue({
  el: '#app',
  render: h => h(App),
});
resources/js/app.js


new Vue({
  el: '#app',
  components: {
    SyncDatabasesButton,
  },
});
