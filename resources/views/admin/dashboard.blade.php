admin
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">logout</button>
</form>
