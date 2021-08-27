<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style media="screen">
    .has-bg-img { background: url('/img/sc-2.png')center center; background-size:cover;  }
  .optical{opacity: .9;}
    </style>
  </head>
  <body>
  <section class="hero  is-fullheight ">
    <div class="hero-body has-bg-img optical">
      <div class="m-6">
        <p class="is-size-1	has-text-light	">Project I</p>
        <form class="" action="index.html" method="post">
          @csrf

        <div class="field" medthod="post" action=>
<label class="label has-text-light"></label>
<div class="control">
  <?php

//  echo Form::text('email', 'example@gmail.com');

   ?>
  <input class="input is-large" type="text" placeholder="Username">
</div>
<br>
<label class="label has-text-light"></label>
<div class="control">
  <input class="input is-large " type="text" placeholder="Password"></div><br>
    <button class="button is-link is-outlined is-rounded">Sign Up</button>
    <button class="button is-link is-rounded">Sign In</button>
</div>
</form>

      </div>
    </div>
  </section>
  </body>
</html>
