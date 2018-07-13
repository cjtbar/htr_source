@extends('layouts.master')
@section('content')
  <div class="jumbotron jumbotron-fluid mt-5 jumbotron-background">
    <div class="container text-center p-5">
      <img src="{{{ URL::asset('assets/img/header.png')}}}" />
      <h1 class="h2">Do you want to learn how to hack?</h1>
      <p class="lead">Want to learn how to crack??</p>
      <p class="">Wanna learn how to code?</p>
      <p><a class="btn btn-info btn-lg mt-1" href="http://www.quackit.com/bootstrap/bootstrap_4/tutorial/bootstrap_jumbotron.cfm" role="button">Call to Action Button</a></p>
    </div>
  </div> 



  <section id="details" class="details text-center">
    <div class="container">
        <h2 class="m-5 h3">Discover Possibilities With Us</h2>
        <div class="row m-5">
          <div class="col-xs-12 col-md-4">
            <h3 class="text-info">Banking Services</h3>
            <i class="fa fa-bar-chart fa-5x text-info mt-3 mb-4" aria-hidden="true"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ipsam, impedit est fugiat ratione incidunt delectus illo aperiam sunt temporibus!</p>        
          </div>
          <div class="col-xs-12 col-md-4">
            <h3 class="text-info">Consulting Services</h3>
            <i class="fa fa-comments fa-5x text-info mt-3 mb-4" aria-hidden="true"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum blanditiis omnis distinctio doloribus dolore eum repellendus minus excepturi, quo magni?</p>        
          </div>
          <div class="col-xs-12 col-md-4">
            <h3 class="text-info">Archived Data Access</h3>
            <i class="fa fa-archive fa-5x text-info mt-3 mb-4" aria-hidden="true"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quidem ab quo porro quod recusandae perferendis sit doloremque consequatur minus.</p>        
          </div>
        </div>
    </div>
  </section> 

  <div class="jumbotron jumbotron-fluid mt-5">
    <div class="container pt-3 pt-1">
      <h1 class="h2 mb-5">This is the h1 heading used in the regular jumbotron component.</h1>
      <div class="row">
        <div class="col-md-6 pr-5">
          <p class="lead">Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quos eos voluptatum nihil architecto, maxime quo quod alias non fugiat, pariatur voluptas repellat aspernatur eligendi quae libero recusandae consequuntur dignissimos, facilis nam minus nemo totam incidunt distinctio optio! Ut harum nihil quisquam porro reprehenderit ipsam labore reiciendis perspiciatis.</p>
        </div>
        <div class="col-md-6 pl-5">
          <p class="lead">Lorem ipsum dolor.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quos eos voluptatum nihil architecto, maxime quo quod alias non fugiat, pariatur voluptas repellat aspernatur eligendi quae libero recusandae consequuntur dignissimos, facilis nam minus nemo totam incidunt distinctio optio! Ut harum nihil quisquam porro reprehenderit ipsam labore reiciendis perspiciatis.</p>
        </div>
      </div>
      <p class="text-center"><a class="btn btn-info btn-lg mt-5" href="http://www.quackit.com/bootstrap/bootstrap_4/tutorial/bootstrap_jumbotron.cfm" role="button">Call to Action Button</a></p>
    </div>
  </div>
  @stop