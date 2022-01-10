<h1> Welcome </h1>

@if(session('user'))
<h2 style="color:green">{{session('user')}} registered</h2>
@endif

<a href="about">About page</a>