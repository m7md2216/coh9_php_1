<h1>Edit Form</h1>



<form action="/posts/update" method="POST">
    <input type="hidden" name="id" value="<?= $data->post->id ?>">
    <input type="text" name="title" value="<?= $data->post->title ?>">
    <textarea name="content" cols="30" rows="10">
   <?= $data->post->content ?>"
    </textarea>
    <button>Submit</button>
</form>