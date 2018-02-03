@extends('layouts.main-layout')

@section('title', 'Main page')

@section('content')
<div class="jumbotron blue">
  <h1 class="tutorial__header">Разработка компонентов на React.</h1>
  <div class="tutorial__image-wrapper">
    <img src="http://devjournal.ru/wp-content/uploads/2016/08/getting-started-with-ReactJS-e1411727250765-750x288.png" alt="react_img">
  </div>
</div>
<section class="main-section">
  <div class="content tutorial__content">
    <h2>Getting Start</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="sidebar">
    <h2>sidebar</h2>
  </div>
</section>
<section class="author-section">
  <span>Здесь будет информацие об авторе поста.</span>
</section>
<section class="popular-section">
  <span>Зесь будет слайдер с самыми популярными постами в данной категории.</span>
</section>
@endsection
