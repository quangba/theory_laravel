<form method="POST" action="formTest">
    <div>
        <input type="text" name="user" placeholder="vui long nhap ten...">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>
