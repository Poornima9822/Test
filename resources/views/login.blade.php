<form action="userlogin" method="POST">
    @csrf
    Email:<input type="email" name="email" placeholder="Email" ><br>
    <br>
    Password:<input type="password" name="password" placeholder="Password"><br>
    
    
    <button type="submit">Log In</button>
</form> 
