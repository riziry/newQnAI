<link rel="stylesheet" href="css/style-roti.css">
<div class="form-content">
    <form action="" method="POST">
        @csrf
        <p class="p1">Title</p>
        <p class="p2">Type in your simplified question</p>
        <textarea class="big-input" name="title" id="question-title" type="text"></textarea>
        <br>
        <p class="p1">Body</p>
        <p class="p2">Type in your question detail here</p>
        <textarea class="big-input" name="content" id="question-body" type="text"></textarea>
        <input type="hidden" name='uID' value="{{ Auth::user()->id }}">
        <br>
        <button class="yellow-button">Send Question</button>
    </form>
    
</div>