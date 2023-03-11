<?=$this->layout('master', ['title'=>$title])?>

<h1>User Create</h1>

<form method="post" action="/user/store">
    <input type="text" name="firstName" placeholder="First Name" value="Caio">
    <input type="text" name="lastName" placeholder="Last Name" value="Silva">
    <input type="text" name="email" placeholder="Email" value="x@x.com.br">
    <input type="password" name="password" placeholder="Password" value="123456">
    <button type="submit">Create User</button>
</form>