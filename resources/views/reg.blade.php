



<form action="user" method="POST">
    @csrf
    Username:<input type="text" name="username" placeholder="User Name" ><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br><br>
    Email:<input type="email" name="usermail" placeholder="Email" ><br>
    <span style="color:red">@error('usermail'){{$message}}@enderror</span><br><br>
    Password:<input type="password" name="password" placeholder="Password"><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span><br><br>
    <button type="submit">Registration</button>
    <button><a href="login">Log In</a></button>
</form>



