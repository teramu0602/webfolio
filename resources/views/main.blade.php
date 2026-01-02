@extends('layouts.webfolio')
@section('content')

<div class="hero">
  <video autoplay muted loop playsinline>
      <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
  </video>

  <div class="overlay"></div>  <!-- ← 半透明の黒いレイヤー -->

  <div class="hero-text">
      <p class="no-margin p1">世界を変える仕組みを創る<p>
  </div>
</div>

<section class="about-us block">
  <div class="container">
      <p class="c-size45">ABOUT US</p>
      <p class="c-size18"> ビジョン・コンサルティングは、3つの事業を通して、より良い社会の実現を目指します。<br>
          お客様や社会の抱える課題を解決に導く新たな仕組みを創出し、社会に変革と成長をもたらします。
      </p>
      <div class="card-container">
          <div class="card">
              <img src="{{ asset('images/Global.png') }}" alt="icon" class="global-icon">
              <p class="c-size13 c-down no-margin">グローバル</p>
              <p class="c-size30 margin30">Global</p>
              <p class="c-size18 c-left">日本から世界へ発進するグローバルコンサルティング企業として、全世界440都市への展開を目指す</p>
          </div>
          <div class="card">
              <img src="{{ asset('images/Consulting.png') }}" alt="icon" class="global-icon">
              <p class="c-size13 ">コンサルティング</p>
              <p class="c-size30 margin30">Consulting</p>
              <p class="c-size18 c-left">専門のコンサルタントが状況に応じた最善の課題解決をご提案し、お客様の企業価値向上を目指す</p>
          </div>
          <div class="card">
              <img src="{{ asset('images/NewBusiness.png') }}" alt="icon" class="global-icon">
              <p class="c-size13">新規事業</p>
              <p class="c-size30 margin30">New business</p>
              <p class="c-size18 c-left">より良い社会の実現を目指して、世の中の常識を覆す新事業に挑む</p>
          </div>           
      </div>
      <div class="c-right margin150">
          <a href="{{ route('webfolio.about') }}" class="blue c-size30">VIEW MORE</a>
      </div>
  </div>


  <section class="section">
    <div class="back-bl"></div>
    <div class="back-b"></div>
    <div class="container">
      <p class="c-size45 white">OUR ADVANTAGE</p>
      <p class="c-size32 white">急成長ランキング唯一4年連続選出</p>
      <p class="c-size18 white">英Financial Times社「High-Growth Companies Asia-Pacific 2025」においてアジア太平洋地域13ヵ国に本社を置く100万社以上を調査対象とした内、コンサルティング部門で唯一4年連続選出されています。</p>
      <img src="{{ asset('images/Awards.jpg') }}" alt="img" class="Awards-img">
      <p class="c-size32 white">数字で表すビジョン・コンサルティング</p>
      <p class="c-size18 white"> ウェブ・フォリオは総合系コンサルティングファームとして急成長を持続しています。</p>
    </div>
  </section>



  <div class="stats-wrapper">
    <img src="images/Vision.jpg" alt="" class="background">

    <div class="stats-grid">
      <div class="cell">
        <p class="title">顧客満足度</p>
        <p class="number">94.6<span class="unit">%</span></p>
      </div>

      <div class="cell">
        <p class="title">創業約10年で従業員数</p>
        <p class="number">1300<span class="unit">名超</span></p>
      </div>

      <div class="cell">
        <div class="t-contener">
          <p class="title">ファームならではの<br>知見に加え最先端技術</p>
        </div>
        <p class="number55">AI/RPA/5G<br><span class="unit1">等を駆使</span></p>
      </div>

      <div class="cell">
        <p class="title">リピート率</p>
        <p class="number">90.0<span class="unit">%</span></p>
      </div>

      <div class="cell">
        <p class="title">過去5年売上高成長率</p>
        <p class="number">2971<span class="unit">%</span></p>
      </div>

      <div class="cell">
        <p class="title">年平均成長率</p>
        <p class="number">140.3<span class="unit">%</span></p>
      </div>
    </div>
  </div>



    <section class="section1">
          <div class="back-gr"></div>
      <div class="container">
        <p class="c-size45 no-margin">INSIGHTS</p>
      </div>
    
    

    <div class="container">
    <div class="slider">
      <div class="slides">
        <div class="slide">
          <img src="images/Slide1.jpg" alt="" class="">
          <div class="overlay3s">
            <p class="margin50">AI運用の壁を突破する<br>MLOpsによる戦略的基盤構築</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/Slide2.jpg" alt="" class="">
          <div class="overlay3s">
            <p class="margin50">低リスクで始めるDX<br>既存システムとAIの融合術</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/Slide3.jpg" alt="" class="">
          <div class="overlay3s">
            <p class="margin50">瞬時の分析が可能な<br>次世代ソリューション</p>
          </div>
        </div>
      </div>
      <div class="progress-bar">
        <div class="progress-fill"></div>
      </div>
    </div>
      <div class="c-right margin150">
        <a href="{{ route('webfolio.insight') }}" class="blue c-size30 margin150">VIEW MORE</a>
      </div>
    </div>
</section>


<div class="container">
    <div class="">
      <p class="margin150top c-size45">EXPERTS</p>
      <p class="c-size18">専門的知見を持つエキスパートが、</br>お客様のビジネスやニーズに合わせて支援します。</p>
    </div>
</div>

    <section class="section1">      
    <div class="container">
      <div class="slider slider2">
        <div class="slides">
          <div class="slide2">
            <img src="images/Officer1.jpg" alt="" class="">
            <div class="overlay3">
              <div class="card-contner">
                <p class="c-size13 pt1">社外取締役</p>
                <p class="c-size20 pt">山本 太郎</p>
                <p class="c-size13">Web ＆ Folio等を経て、弊社に参画。事業戦略・業務改革・IT戦略立案、実行支援に精通。</p>
              </div>
            </div>
          </div>
        <div class="slide2">
          <img src="images/Officer2.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">IBMでパートナー職を経て、現職。次世代テクノロジー領域において、IT戦略・ガバナンス、DX戦略に精通。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer3.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">PwCコンサルティング等を経て、現職。官公庁、金融、通信、小売、商社を中心に、戦略立案からIT等の実行支援まで幅広く従事。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer1.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">社外取締役</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">Web ＆ Folio等を経て、弊社に参画。事業戦略・業務改革・IT戦略立案、実行支援に精通。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer2.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">IBMでパートナー職を経て、現職。次世代テクノロジー領域において、IT戦略・ガバナンス、DX戦略に精通。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer3.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">PwCコンサルティング等を経て、現職。官公庁、金融、通信、小売、商社を中心に、戦略立案からIT等の実行支援まで幅広く従事。</p>
            </div>
          </div>
        </div>
                <div class="slide2">
          <img src="images/Officer1.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">社外取締役</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">Web ＆ Folio等を経て、弊社に参画。事業戦略・業務改革・IT戦略立案、実行支援に精通。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer2.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">IBMでパートナー職を経て、現職。次世代テクノロジー領域において、IT戦略・ガバナンス、DX戦略に精通。</p>
            </div>
          </div>
        </div>
        <div class="slide2">
          <img src="images/Officer3.jpg" alt="" class="">
          <div class="overlay3">
            <div class="card-contner">
              <p class="c-size13 pt1">パートナー</p>
              <p class="c-size20 pt">山本 太郎</p>
              <p class="c-size13">PwCコンサルティング等を経て、現職。官公庁、金融、通信、小売、商社を中心に、戦略立案からIT等の実行支援まで幅広く従事。</p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="progress-bar">
        <div class="progress-fill"></div>
      </div>
    </div>
        <div class="c-right margin150">
            <a href="{{ route('webfolio.expert') }}" class="blue c-size30 margin150">VIEW MORE</a>
        </div>
    </div>
</section>

<div class="back-gr1"></div>
<div class="back-br1"></div>
<div class="newscontainer">
    <div class="news-wrapper">
        <p class="margin300top c-size45 z-5">NEWS</p>
        <ul class="news-list">
          <li class="news-item margin300top">
            <span class="news-date c-size23">2025.08.07</span>
            <span class="news-tag c-size23">トピックス</span>
            <span class="news-text c-size18">サービス紹介ページ公開のお知らせ</span>
          </li>
          <li class="news-item">
            <span class="news-date c-size23">2025.08.06</span>
            <span class="news-tag c-size23">トピックス</span>
            <span class="news-text c-size18">
              弊社代表取締役社長の山本がLinkedInでの情報発信を開始しました
            </span>
          </li>
          <li class="news-item">
            <span class="news-date c-size23">2025.07.08</span>
            <span class="news-tag c-size23">プレスリリース</span>
            <span class="news-text c-size18">
              「働きがいのある会社」として認定されました。
            </span>
          </li>
        </ul>
    </div>
</div>

<img src="{{ asset('images/Buildings.jpg') }}" alt="" class="bg-image">
<div class="container">
  <a href="{{route('webfolio.recruit')}}" class="recruit-link no-under-line">
    <div class="recruit-content">
      <p class="c-size45 white recruit-link1">RECRUIT</p>
      <p class="c-size30 white recruit-desc">自身の価値を高め、社会に価値を与える。<br>そのための環境がここにある。</p>
    </div>
  </a>
</div>


<div class="back-br2"></div>
<div class="four-columns">
  <div class="column column1 margin100">        
        <div class="header-logo">
            <div class="logo1 white">
                Web
            </div>
            <div class="logo2 white">
                Folio
            </div>
          </div>
      </div>
  <div class="column margin100">
    <ul class="c-size29">
      <a href="">
        <li class="blue">サイトTOP</li>
      </a>
      <a href="{{route('webfolio.news')}}">
        <li class="blue">ニュース</li>
      </a>
      <a href="{{route('webfolio.introduction')}}">
        <li class="blue">事業紹介</li>
      </a>
    </ul>
  </div>
  <div class="column margin100">
    <ul class="c-size29">
      <a href="{{route('webfolio.insight')}}">
        <li class="blue">インサイト</li>
      </a>
      <a href="{{route('webfolio.company')}}">
        <li class="blue">企業情報</li>
      </a>
    </ul>
  </div>
  <div class="column margin100">
    <ul class="c-size29">
      <a href="{{route('webfolio.recruit')}}">
        <li class="blue">採用情報</li>
      </a>
      <a href="">
        <li class="blue">ご利用相談</li>
      </a>
      <a href="{{route('webfolio.contact')}}">
        <li class="blue">お問い合わせ</li>
      </a>
    </ul>
  </div>
</div>



<script>
document.querySelectorAll('.slider').forEach(slider => {

  const slides = slider.querySelector('.slides');
  const slideElements = slider.querySelectorAll('.slide, .slide2');
  const slideCount = slideElements.length;

  // 1. コンテナ（表示領域）の幅を取得
  const containerWidth = slider.clientWidth;

  // 2. スライド1枚の幅（margin含む）を計算
  // 最初の要素からスタイルを取得
  const firstSlideStyle = window.getComputedStyle(slideElements[0]);
  const slideWidth = slideElements[0].getBoundingClientRect().width;
  const slideMarginRight = parseFloat(firstSlideStyle.marginRight) || 0;
  
  // スライド1枚あたりの移動単位（幅 + 右余白）
  const slideUnit = slideWidth + slideMarginRight;

  const progressFill = slider.querySelector('.progress-fill');

  let startX = 0;
  let currentTranslate = 0;
  let prevTranslate = 0;
  let isDragging = false;

  // ★ 修正箇所：最大移動距離の計算ロジックを変更
  // (スライド全体の幅) - (表示エリアの幅) = スクロールすべき余剰分
  // ※最後のスライドの右余白を無視したい場合は調整可能ですが、基本はこの計算でOKです
  let maxTranslate = (slideUnit * slideCount) - containerWidth;
  
  // 微調整：最後のスライドのmargin-right分までスクロールしたくない場合（ピタッと止めたい場合）
  // maxTranslate = (slideUnit * slideCount) - slideMarginRight - containerWidth;

  // コンテンツが表示エリアより小さい場合はスクロールさせない
  if (maxTranslate < 0) maxTranslate = 0;

  slides.addEventListener('mousedown', startDrag);
  slides.addEventListener('mousemove', drag);
  slides.addEventListener('mouseup', endDrag);
  slides.addEventListener('mouseleave', endDrag);
  slides.addEventListener('touchstart', startDrag, { passive: true });
  slides.addEventListener('touchmove', drag, { passive: true });
  slides.addEventListener('touchend', endDrag);

  function startDrag(e) {
    isDragging = true;
    startX = getPositionX(e);
    slides.style.transition = 'none';
  }

  function drag(e) {
    if (!isDragging) return;

    const currentX = getPositionX(e);
    const diff = currentX - startX;
    currentTranslate = prevTranslate + diff;

    // 範囲制限
    if (currentTranslate > 0) currentTranslate = 0;
    // -maxTranslate より小さくならないように制限
    if (currentTranslate < -maxTranslate) currentTranslate = -maxTranslate;

    slides.style.transform = `translateX(${currentTranslate}px)`;
    updateProgress();
  }

  function endDrag() {
    if (!isDragging) return;
    isDragging = false;
    prevTranslate = currentTranslate;
  }

  function getPositionX(e) {
    return e.type.includes('touch') ?
      e.touches[0].clientX :
      e.clientX;
  }

  function updateProgress() {
    // 0除算を防ぐ
    if (maxTranslate === 0) {
        progressFill.style.width = '100%';
        return;
    }
    const progress = Math.abs(currentTranslate) / maxTranslate * 100;
    progressFill.style.width = `${progress}%`;
  }
});

// スライダーの初期化ロジック全体を関数でラップし、リサイズ時にも実行できるようにする
function initializeSlider(sliderElement) {
    // 既存のコード（const slides = ... から updateProgress(); の定義まで）
    // ...
}

// ページロード時とリサイズ時に全スライダーを初期化する
function handleSliderInitialization() {
    document.querySelectorAll('.slider').forEach(initializeSlider);
    document.querySelectorAll('.slider2').forEach(initializeSlider);
}

// ページロード時に実行
handleSliderInitialization();

// リサイズイベントにバインド
window.addEventListener('resize', handleSliderInitialization);

</script>






</section>
@endsection