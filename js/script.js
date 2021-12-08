'use strict';
Vue.config.devtools = true;

window.addEventListener('DOMContentLoaded', function () {
  new Vue({
      el: '#vue',
      data: {
        discsData: []
      },
      mounted() {
        axios.get('http://localhost/php-ajax-dischi/api/discs.php')
        .then(resp => {
          this.discsData = resp.data
        })
      }
  });
});