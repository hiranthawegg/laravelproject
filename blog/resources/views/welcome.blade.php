@extends('master', ['title'=>'home'])

@section('container')

    <form class="form-horizontal" role="form" method="post" action="{{route('signup')}}">

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="firstname" name="firstname">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">lastname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="lastname" name="lastname">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="email" name="email">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="password" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
            {{ csrf_field() }}
        </div>
    </form>








    @stop

@section('footer')
    @ All right reserved for wegg france
    @stop