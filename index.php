<script>
fetch('https://anime-time.live/wp-json/wp/v2/users')
  .then(r => r.json())
  .then(data => document.body.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>')
  .catch(e => document.body.innerHTML = 'Error: ' + e);
</script>
