@extends('layouts.basic')

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
            <a href="/my_page">Mypage</a>
          </li>
        </ul>
      </div>
      <!--ここまで-->
</div>
<div class="logo">
  <a href="/">Rese</a>
</div>
@endsection

<style>
  .wrapper {
    display: flex;
    justify-content: space-between;
  }
  .reservations {
    width: 40%;
  }
  .favorites {
    width: 50%;
  }
  .reservations_card {
    background-color: #0055e8;
    width: 80%;
    padding: 20px;
    color: #fff;
    border-radius: 10px;
    box-shadow: 1px 1px 2px #000;
  }
  .title {
    margin-left: 20Px;
    display: flex;
    justify-content: space-between;
  }
  .reservations_table{
    padding: 20px 0;
    color: #fff;
  }
  .reservations_table td {
    padding-right: 30px;
  }

  .favorites_wrpper {
    display: flex;
    flex-wrap: wrap;
  }
  .items {
    width: 40%;
    background-color: #fff;
    margin: 0 50px 30px 0;
    box-shadow: 1px 1px 5px;
    border-radius: 5px;
  }
  img {
    width: 100%;
    border-radius: 5px 5px 0 0;
  }
  .items__content {
    padding: 10px 20px;
  }
  .item__content--title {
    font-size: 18px;
    font-weight: bold;
    margin: 0;
  }
  .item__content--detail {
    display: flex;
    font-size: 12px;
    font-weight: bold;
  }
  .item__content--detail p{
    margin: 5px 10px 0 0;
  }
  .item__content--action {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
  }
  .item__content--action button {
    background-color: #0055e8;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  .bookmark {
    font-size: 28px;
    cursor: pointer;
  }
</style>
@section('content')
<div class="user_name">
  <h2>{{ $user->name }}さん</h2>
</div>
<div class="wrapper">
  <div class="reservations">
    <h3>予約状況</h3>
    <div class="reservations_card">
      <div class="title">
        <div>予約</div>
        <div>☒</div>
      </div>
      <table class="reservations_table">
        <tr>
          <td>Shop</td>
          <td>仙人</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>2021-04-01</td>
        </tr>
        <tr>
          <td>Time</td>
          <td>17:00</td>
        </tr>
        <tr>
          <td>Number</td>
          <td>1人</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="favorites">
    <h3>お気に入り店舗</h3>
    <div class="favorites_wrpper">
      <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>
    
    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>
    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>

    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>

    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>

    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>

    <div class="items">
    <div class="items__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg " alt="飲食店の写真">
    </div>
    <div class="items__content">
      <p class="item__content--title">仙人</p>
      <div class="item__content--detail">
        <p>#東京 #寿司</p>
      </div>
      <div class="item__content--action">
        <button>詳しくみる</button>
        <div class="bookmark">
          ♡
        </div>
      </div>
      </div>
    </div>
    </div>
</div>

@endsection