<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>
<body>
  <h1>Contact us any time</h1>
  <form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name" required>
    <input type="text" name="email" placeholder="Enter email" required>
    <textarea name="message" placeholder="Enter your message" required></textarea>
    <button>Send Message</button>
  </form>
</body>
</html>