<div class="input-group">
    <form action="/chat/{{$conversation->id}}/send" class="d-flex" id="chatForm">
        <input id="btn-input" type="text" name="message" class="form-control" size="100"
            placeholder="Type your message here..." />
        <button class="btn btn-primary btn-sm ms-1" id="btn-chat">
            Send
        </button>
    </form>
</div>
