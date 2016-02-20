@extends('layout') 
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Welcome to my Laravel 5 Project</h4>
      </div>
      <div class="panel-body">
        <img class="img-circle pull-right" src="//placebear.com/150/150"> 
        <p>I am following along <a href="https://laracasts.com/series/laravel-5-from-scratch">Jeffrey Way's Laravel 5 From Scratch Tutorial.</a> I can do Laravel 4, though, so I'm sure that something dynamic will go here soon.</p>
        <div class="clearfix"></div>
        <hr>
        <p>Also, using the <a href="www.bootstrapzero.com/bootstrap-template/facebook">Faceboot theme for Bootstrap.</a></p>
        <hr>
        <form>
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
            </div>
            <input class="form-control" placeholder="Add a comment.." type="text">
          </div>
        </form>
      </div>
    </div>
@stop