
<form action='/user/store' method='post'> 
    <input type='hidden' name='id' value='<?php echo $user->id ?? "" ?>' >
    <label>Username</label>
    <input type='text' name='username' size=" 30" value='<?php echo $user->username ?? "" ?>'></br>
    <label>Password</label>
    <input type='text' name='password' size=" 30" value=''></br>

    <input type='submit' value='Enviar'>

</form>
