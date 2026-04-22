<form action="/send" method="POST">
    @csrf
    <input type="text" name="my_text" placeholder="your message">
    <button type="submit">Send</button>
</form>
