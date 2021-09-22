
<!DOCTYPE html>
<html>
<head>
  <title>Pusher receiver</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('53cd00fefb3387391eea', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });


  </script>
</head>
<body>
  <h1>Pusher reply</h1>
  <h2>Broadcast-2</h2>
    <form action="{{ route('reply-broadcast', App::getLocale() )}}" method="POST">
        @csrf
        <label for="msg"> message reply: </label>
        <input type="text" name="msg">
        <input type="submit" value="send message">
    </form>
</body>
</html>

