<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sender</title>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('53cd00fefb3387391eea', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel-2');
    channel.bind('my-event-2', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>

    <h2>Broadcast</h2>
    <form action="{{ route('send-broadcast', App::getLocale())}}" method="POST">
        @csrf
        <label for="msg"> message: </label>
        <input type="text" name="msg">
        <input type="submit" value="send message">
    </form>
    


</body>
</html>