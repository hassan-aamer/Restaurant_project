@extends('app')

@section('title')
Reserve
@endsection



@section('body')


    <section class="foo">
        <center>
            <div class="fooo">
                <form method="POST" action="/add">
                    @csrf
                    <h3>Enter your Email</h3>
                    <label for="">Name </label>
                    <input type="text" placeholder="enter yor name" name="name"  required>
                    <label for="">your phone </label>
                    <input type="text" placeholder="enter yor name" name="phone"  required>
                    <label for="">Order details?</label>
                    <textarea type="text" name="order" placeholder="write here"  required > </textarea >
                    <input type="submit" value="submit" class="button">
                </form>
            </div>
        </center>
    </section>

    @endsection
