Selamat datang {{ Auth::user()->nama}}
{{auth::user()->pekerjaan}}
<br>
<a href="{{route('logout')}}">Logout</a>