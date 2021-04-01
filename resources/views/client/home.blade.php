
@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
          </button>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="キーワードで検索">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">1</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">JSAT NAVIへようこそ。<br /><span style="color: gray">1時間前</span></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <a class="dropdown-item" href="#">プロフィール</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">記事</a>
              <a class="dropdown-item" href="./mediaLibrary.html">画像</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">投稿した記事</a>
              <a class="dropdown-item" href="#">Likeした記事</a>
              <a class="dropdown-item" href="#">Saveした記事</a>
              <a class="dropdown-item" href="#">閲覧した記事</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">アカウント設定</a>
              <a class="dropdown-item" href="#">ダッシュボード</a>
              <a class="dropdown-item" href="login.html">ログアウト</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="./post.html" class="btn btn-info"><i class="fas fa-edit"></i>投稿</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Category Navbar -->
  <nav class="category_nav">
    <div class="category_nav_list">
      <a class="category_nav_item is_selected" href="#">ホーム</a>
      <a class="category_nav_item" href="./recommend.html">おすすめ</a>
      <a class="category_nav_item" href="#">人気のジャンル</a>
      <a class="category_nav_item" href="#">人気のタグ</a>
      <a class="category_nav_item" href="#">JSAT NAVIの使い方</a>
    </div>
  </nav>
  <!-- END Category Navbar -->
  <div class="panel_main">
    <div class="content content_main">
      <!-- START 記事ブロック -->
      <div class="content article_block">
        <div class="container-fluid">
          <h3><i class="fas fa-award"></i>グルメ</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000001" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000001" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000002" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000002" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000003" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000003" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END 記事ブロック -->
      <!-- START 記事ブロック -->
      <div class="content article_block">
        <div class="container-fluid">
          <h3><i class="fas fa-award"></i>旅行・おでかけ</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000004" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000004" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000005" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000005" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000006" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000006" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END 記事ブロック -->
      <!-- START 記事ブロック -->
      <div class="content article_block">
        <div class="container-fluid">
          <h3><i class="fas fa-award"></i>#起業</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000007" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000007" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000008" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000008" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000009" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000009" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END 記事ブロック -->
       <!-- START 記事ブロック -->
       <div class="content article_block">
        <div class="container-fluid">
          <h3><i class="fas fa-award"></i>#ゲーム</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000010" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000010" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000011" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000011" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" class="card card-product">
                <div class="card-header card-header-image">
                  <span>
                    <img class="img" src="{{ asset('img/card-2.jpg') }}">
                  </span>
                </div>
                <div class="card-body">
                  <div class="card-actions text-center">
                    <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="見る">
                      <i class="material-icons">art_track</i>
                    </button>
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="編集">
                      <i class="material-icons">edit</i>
                    </button>
                  </div>
                  <h4 class="card-title">
                    <span>東京のレストランランキング</span>
                  </h4>
                  <div class="card-description">
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                  </div>
                </div>
                <div class="card-footer card_footer_top">
                  <div class="card_footer_left">
                    <div class="iine">
                      <i class="fas fa-heart"></i><span class="iine_cnt">15</span>
                    </div>
                    <div class="comment">
                      <i class="far fa-comment-dots"></i>10
                    </div>
                  </div>
                </div>
                <div class="card-footer card_footer_bottom">
                  <div class="card_footer_user">
                    <div class="photo">
                      <img class="card_user_img" src="{{ asset('img/user.png') }}">
                    </div>
                    <div class="footer_user">
                      <span>山口 敬太郎</span>
                      <span>2日前</span>
                    </div>
                  </div>
                  <div class="card_footer_iine">
                    <input class="iine_btn" id="toggle_heart_article0000012" type="checkbox"/>
                    <label class="iine_lbl" for="toggle_heart_article0000012" aria-label="like"><i class="fas fa-heart"></i></label>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END 記事ブロック -->
    </div>
    <div class="content_sub">
      <div class="content_sub_item">
        <img src="{{ asset('img/Advertising3.jpg') }}" />
      </div>
      <div class="content_sub_item">
        <img src="{{ asset('img/Advertising.jpg') }}" />
      </div>
      <div class="content_sub_item">
        <div class="sub_featured_title">
          <h4>今日の注目記事</h4>
          <a href="#">すべて見る</a>
        </div>
        <div class="sub_featured_item">
          <div class="sub_featured_item_left">
            <h5>旅行に行くならここしかない！おすすめ5選</h5>
            <div class="sub_featured_text">
              <i class="fas fa-heart"></i><span class="c_pink">100</span>
              <span class="featured_user">山口 敬太郎</span>
            </div>
          </div>
          <div class="sub_featured_item_right">
            <img src="{{ asset('img/travel.jpg') }}" />
          </div>
        </div>
        <div class="sub_featured_item">
          <div class="sub_featured_item_left">
            <h5>旅行に行くならここしかない！おすすめ5選</h5>
            <div class="sub_featured_text">
              <i class="fas fa-heart"></i><span class="c_pink">100</span>
              <span class="featured_user">山口 敬太郎</span>
            </div>
          </div>
          <div class="sub_featured_item_right">
            <img src="{{ asset('img/travel.jpg') }}" />
          </div>
        </div>
        <div class="sub_featured_item">
          <div class="sub_featured_item_left">
            <h5>旅行に行くならここしかない！おすすめ5選</h5>
            <div class="sub_featured_text">
              <i class="fas fa-heart"></i><span class="c_pink">100</span>
              <span class="featured_user">山口 敬太郎</span>
            </div>
          </div>
          <div class="sub_featured_item_right">
            <img src="{{ asset('img/travel.jpg') }}" />
          </div>
        </div>
        <div class="sub_featured_item">
          <div class="sub_featured_item_left">
            <h5>旅行に行くならここしかない！おすすめ5選</h5>
            <div class="sub_featured_text">
              <i class="fas fa-heart"></i><span class="c_pink">100</span>
              <span class="featured_user">山口 敬太郎</span>
            </div>
          </div>
          <div class="sub_featured_item_right">
            <img src="{{ asset('img/travel.jpg') }}" />
          </div>
        </div>
        <div class="sub_featured_item">
          <div class="sub_featured_item_left">
            <h5>旅行に行くならここしかない！おすすめ5選</h5>
            <div class="sub_featured_text">
              <i class="fas fa-heart"></i><span class="c_pink">100</span>
              <span class="featured_user">山口 敬太郎</span>
            </div>
          </div>
          <div class="sub_featured_item_right">
            <img src="{{ asset('img/travel.jpg') }}" />
          </div>
        </div>
      </div>
      <div class="content_sub_item">
        <img src="{{ asset('img/Advertising2.jpg') }}" />
      </div>
      <div class="content_sub_item">
        <div class="sub_featured_title">
          <h4>月別</h4>
        </div>
        <div class="date_item">
          <h6>2021年</h6>
          <div class="date_block">
            <ul class="date_list">
              <li><a href="#">1月</a></li>
              <li><a href="#">2月</a></li>
              <li><a href="#">3月</a></li>
              <li><a href="#">4月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">5月</a></li>
              <li><a href="#">6月</a></li>
              <li><a href="#">7月</a></li>
              <li><a href="#">8月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">9月</a></li>
              <li><a href="#">10月</a></li>
              <li><a href="#">11月</a></li>
              <li><a href="#">12月</a></li>
            </ul>
          </div>
          <h6>2020年</h6>
          <div class="date_block">
            <ul class="date_list">
              <li><a href="#">1月</a></li>
              <li><a href="#">2月</a></li>
              <li><a href="#">3月</a></li>
              <li><a href="#">4月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">5月</a></li>
              <li><a href="#">6月</a></li>
              <li><a href="#">7月</a></li>
              <li><a href="#">8月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">9月</a></li>
              <li><a href="#">10月</a></li>
              <li><a href="#">11月</a></li>
              <li><a href="#">12月</a></li>
            </ul>
          </div>
          <h6>2019年</h6>
          <div class="date_block">
            <ul class="date_list">
              <li><a href="#">1月</a></li>
              <li><a href="#">2月</a></li>
              <li><a href="#">3月</a></li>
              <li><a href="#">4月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">5月</a></li>
              <li><a href="#">6月</a></li>
              <li><a href="#">7月</a></li>
              <li><a href="#">8月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">9月</a></li>
              <li><a href="#">10月</a></li>
              <li><a href="#">11月</a></li>
              <li><a href="#">12月</a></li>
            </ul>
          </div>
          <h6>2018年</h6>
          <div class="date_block">
            <ul class="date_list">
              <li><a href="#">1月</a></li>
              <li><a href="#">2月</a></li>
              <li><a href="#">3月</a></li>
              <li><a href="#">4月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">5月</a></li>
              <li><a href="#">6月</a></li>
              <li><a href="#">7月</a></li>
              <li><a href="#">8月</a></li>
            </ul>
            <ul class="date_list">
              <li><a href="#">9月</a></li>
              <li><a href="#">10月</a></li>
              <li><a href="#">11月</a></li>
              <li><a href="#">12月</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
