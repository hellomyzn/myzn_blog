@extends('layout')

@section('content')
<div class="container">
    <h1>WEEKLY DIALY FORM</h1>
    <form action="/weekly" method="post">

        {{ csrf_field() }}
        <label for="title">TITLE</label><br>
        <input type="text" name="title" id="title"><br><br>

        <label for="text">TEXT</label><br>
        <input type="text" name="text" id="text"><br><br>
        <input type="submit" value="SENT">
    </form>
</div>
@endsection
