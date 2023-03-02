@extends('layouts.card')

@section('header')
<div class="hamburger-menu">
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn"><span></span></label>
      <!--メニュー-->
      <div class="menu-content">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="#">Logout</a>
          </li>
          <li>
            <a href="my_page">Mypage</a>
          </li>
        </ul>
      </div>
      <!--ここまで-->
</div>
<div class="logo">
  <a href="/">Rese</a>
</div>
@endsection

@section('content')
<h2>ご予約ありがとうございます</h2>
<button>戻る</button>
@endsection