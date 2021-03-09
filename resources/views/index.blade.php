<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.9.0/css/flag-icon.css" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <title>自己紹介</title>
</head>
<body>
  <header>
    <div class="nav">
    <ul class="right-nav">
        <li><a href="#">トップ</li>
        <li><a href="#sec1">about</a></li>
        <li><a href="#sec2">work</a></li>
        <li><a href="#sec3">contact</a></li>
      </ul>
    </div>
  </header>
  <div class="content">
    <div class="warapper">
      <h1>welcome to my portfolio</h1>
    </div>
  </div>
  
  <div class="content">
   <div id="sec1">
    <h1>About Me</h1>
 <img class="photo" src="{{asset('/image/self.jpg')}}" alt="顔写真">
 <div class="about-content"> 
 <h2>畑本亮太</h2>
 <p>1996.5.13</p>
 <div class="text">
     <p>北海道の倶知安町出身。<br>
     専門学校卒業後、地元のディーラーで整備士として勤務<br>
     将来自由に場所にとらわれることなく働きたいと思い、<br>
     プログラミンを勉強。現在に至る</p>
 </div>
 <h2>スキル</h2>
 <div class="skill"> 
    <img class="icon" src="{{asset('/image/html.png')}}" alt="html写真">
    <img class="icon" src="{{asset('/image/css.png')}}" alt="css写真">
    <img class="icon" src="{{asset('/image/js.png')}}" alt="js写真">
    <img class="icon" src="{{asset('/image/php.png')}}" alt="php写真">
 </div>
  </div>
  </div>
 </div>
 
<div class="content">
  <div id="sec2">
    <h1>Work</h1>
    <div class="work-content">
    
      <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
     </div>
     <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
     </div>
     <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
     </div>
     <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
     </div>
     <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
     </div>
     <div class="works">
      <a href="#">
       <img class="work" src="{{asset('/image/work.jpg')}}" alt="仕事写真">
      </a>
      <p>work1</p>
      </div>
     </div>
    </div>
<div class="content">
 <div id="sec3">
  <h1>contact</h1>
  <form name="form" method="POST" action="contacts">
 <div class="Form">
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
    <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
    <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
    <textarea class="Form-Item-Textarea"></textarea>
  </div>
  <input type="submit" class="Form-Btn" value="送信する">
  </form>
  </div>
 </div>
</div>
</div>
<div class="footer">
<p>@2021 Ryota Hatamoto</p>
</div>

</body>
</html>




