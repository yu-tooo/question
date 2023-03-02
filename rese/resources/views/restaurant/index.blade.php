@extends('layouts.basic')

<style>
  .sarch {
    position: absolute;
    display: flex;
    align-items: bottom;
    top: 5%;
    right: 10%;
    width: 500px;
    height: 36px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 1px 1px 2px;
  }
  select {
    width: 100px;
    border: none;
    outline: none;
    border-right: 1px inset gray;
    text-align: center;
    font-weight: bold;
    border-radius: 5px 0 0 5px;
    margin: 10px 0;
    cursor: pointer;
  }
  input {
    width: 225px;
    border: none;
    outline: none;
  }
  .submit {
    width: 40px;
    background-color: #0055e8;
    color: #fff;
    font-size: 4px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>

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
            <a href="/register">Registration</a>
          </li>
          <li>
            <a href="/login">Login</a>
          </li>
        </ul>
      </div>
      <!--ここまで-->
</div>
<div class="logo">
  <a href="/">Rese</a>
</div>
<div class="sarch">
  <form action="/" method="GET">
    <select name="area">
      <option value="">All area</option>
      <option value="東京都">東京都</option>
      <option value="大阪府">大阪府</option>
      <option value="福岡県">福岡県</option>
    </select>
    <select name="genre">
      <option value="">All genre</option>
      <option value="焼肉">焼肉</option>
      <option value="寿司">寿司</option>
      <option value="ラーメン">ラーメン</option>
      <option value="居酒屋">居酒屋</option>
      <option value="イタリアン">イタリアン</option>
    </select>
    <input type="text" name="name" placeholder=" 店舗名で検索">
    <input  class="submit" type="submit" value="検索">
  </form>
</div>
@endsection
<style>
  .wrapper {
    display: flex;
    flex-wrap: wrap;
  }
  .items {
    width: 22%;
    background-color: #fff;
    margin: 0 0 30px 25px;
    box-shadow: 1px 1px 5px;
    border-radius: 5px;
  }
  img {
    width: 100%;
    border-radius: 5px 5px 0 0;
  }
  .items__content {
    padding: 10px 20px 0 20px;
  }
  .items__content--title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
  }
  .items__content--detail {
    display: flex;
    font-size: 12px;
    font-weight: bold;
    margin: 10px 0 10px 0;
  }
  .items__content--action {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .action--button button {
    background-color: #0055e8;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    box-shadow: .5px 1px 1px #000;
    cursor: pointer;
  }
  .bookmark {
    font-size: 28px;
    cursor: pointer;
  }
</style>
@section('content')

@isset($restaurants)
<div class="wrapper">
  @foreach($restaurants as $restaurant)
    
    <div class="items">
      <div class="items_img">
        <img src="{{ $restaurant->img_url }}" alt="飲食店の写真が表示されません">
      </div>
      <div class="items__content">
        <div class="items__content--title">
          {{ $restaurant->name }}
        </div>
        <div class="items__content--detail">
          {{ $restaurant->detail->getDetail() }}
        </div>
        <div class="items__content--action">
          <form action="/shop_detail/id={{ $restaurant->id }}">
          <div class="action--button">
            <button>詳しくみる</button>
          </div>
          </form>
          <form action="">
          <div class="bookmark">
            ♡
          </div>
          </form>
        </div>
        
      </div>
    </div>
  
  @endforeach
</div>
@endisset
@endsection