@extends("layout.app")
@section("title")
HOME PAGE
@endsection

@section("content")
<h1>REGISTRATION</h1>
<form action="{{route('register.submit')}}" method="post">
    @csrf
    <div>
        <label for="name">NAME</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="username">USERNAME</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">PASSWORD</label>
        <input type="password" name="password">
    </div>
    <div>
        <button>SUBMIT</button>
    </div>
</form>
@endsection