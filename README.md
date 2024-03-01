# 🧪 Rede-SBQ

<head>
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6LccGoUpAAAAAAYOqo3stClpJya3jMp5y5aAE7gx"></script>
  <!-- Your code -->
</head>

<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LccGoUpAAAAAAYOqo3stClpJya3jMp5y5aAE7gx', {action: 'LOGIN'});
    });
  }
</script>
