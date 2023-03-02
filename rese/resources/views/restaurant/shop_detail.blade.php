<style>
  .wrapper {
    margin: 100px;
  }
  .reservation_table {
    margin-top: 50px; 
  }
</style>
<div class="wrapper">
  <div class="reservation">
    <h1>予約</h1>
    <form action="/">
      //日付入力欄
      <div class="input_date">
        <input class="input date" type="date" name="date">
      </div>
      //時間入力欄
      <div class="inout_time">
        <input class="input time" type="time" name="time">
      </div>
      //人数入力欄
      <div class="input_number">
        <input class="input number" type="number" value=1 min=1 name="number">
      </div>
    <table class="reservation_table">
    
      <tr>
        <td>Date</td>
        <td>連動させたい日付</td>
      </tr>
      <tr>
        <td>Time</td>
        <td>連動させたい時間</td>
      </tr>
      <tr>
        <td>Number</td>
        <td>連動させたい人数</td>
      </tr>
    </table>
    <button class="reservation_btn">予約する</button>
    </form>
  </div>
</div>

