<form action="<?php echo route('category.add')?>" method="post">
    <h2>Add category: </h2>
    <div>
        <input type="text" name="name" placeholder=".......">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <button type="submit">Add</button>
</form>